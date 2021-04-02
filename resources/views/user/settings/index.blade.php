@php
$user = Auth::user();
@endphp


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Settings
        </h2>
        <small class="text-sm text-gray-400">Update your profile settings.</small>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('my.settings.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="flex flex-col items-center justify-center">
                            <label for="avatar">
                                <img src="{{ $user->getAvatar() }}" alt="{{ $user->name }}'s avatar"
                                    class="w-64 h-64 rounded-full object-cover" />
                            </label>
                            <input type="file" name="avatar" id="avatar" />
                        </div>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name') ?? $user->name" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email') ?? $user->email" required />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" />
                        </div>

                        <x-button class="mt-4">
                            Save
                        </x-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
