@extends('client/layouts/master')

@section('content')
    {{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">Sign In</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Shortcodes</a></li>
            <li class="active">Elements</li>
        </ul>
    </div>
    <section id="content">
        <div class="container">
            <div id="main">
                <div class="section-info">
                    <div class="row" style="display: flex;justify-content: center">
                        <div class="col-sm-6"
                            style="background: #f8f8f8;
                        padding: 10px;
                        border: 2px solid #e8e8e8;
                        border-radius: 10px;
                    ">
                            <h4 style="font-weight: 800">Sign In</h4>
                            <form method="POST" action="{{ route('register') }}" class="form-sign-in">
                                @csrf
                                <div class="form-group">
                                    <input id="name" name="name" type="text" class="input-text full-width"
                                        required autofocus="" autocomplete="name" {{ old('name') }} placeholder="Name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: red" />

                                </div>
                                <div class="form-group">
                                    <input id="email" name="email" type="email" class="input-text full-width"
                                     required autocomplete="username" placeholder="Email Address">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" required autocomplete="new-password"
                                        class="input-text full-width" placeholder="Password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red" />
                                </div>
                                <div class="form-group">
                                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                                        class="input-text full-width" placeholder="Confirm Password">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red"/>
                                </div>
                                <div class="form-group " style="display: flex; justify-content: space-between">
                                    <div class="checkbox">
                                        <label><input type="checkbox">I agree to the terms &amp; conditions</label>
                                    </div>
                                    <span> <a href="{{ route('login') }}">Already registered?</a></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn style1">Create Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
