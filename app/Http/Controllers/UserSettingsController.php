<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Util\Regex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.settings.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = $request->user();
        $updated = false;
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id . ',id',
            'name' => 'required|string|max:255',
            'password' => 'string|confirmed|min:8|nullable',
            'avatar' => 'file|image|mimes:png,jpg,jpeg,gif|nullable',
        ]);

        if ($user->name != $request->name) {
            $user->name = $request->name;
            $updated = true;
        }

        if (!Str::contains($user->email, $request->email)) {
            $user->email = $request->email;
            $updated = true;
        }

        if ($request->hasFile('avatar') && !empty($request->avatar)) {
            // remove old avatar if user doesn't use default avatar
            if (!$user->usesDefaultAvatar()) {
                Storage::disk('public')->delete('./'.Str::after($user->avatar, 'storage'));
            }

            // save new avatar
            $file = $request->file('avatar');
            $filename = time() . '-' . $file->hashName();

            // each user will have a folder containing all uploads
            // /storage/users/<user_id>/<media>/<file>
            Storage::disk('public')->put('./users/' . $user->id . '/avatar/' . $filename, $file->getContent());
            $user->avatar = '/storage/users/' . $user->id . '/avatar/' . $filename;
            $updated = true;
        }

        if ($request->has('password') && !empty($request->password)) {
            $user->password = Hash::make($request->password);
            $updated = true;
        }

        if ($updated) {
            $user->save();
            session()->flash('success', 'Your account have been updated.');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
