<?php

use App\Http\Controllers\UserSettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('@me')->middleware(['auth'])->group(function () {
    Route::get('settings', [UserSettingsController::class, 'index'])->name('my.settings');
    Route::put('settings', [UserSettingsController::class, 'update'])->name('my.settings.update');
    Route::delete('settings', [UserSettingsController::class, 'destroy'])->name('my.settings.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
