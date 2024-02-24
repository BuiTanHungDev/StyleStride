@extends('client/layouts/master')

@section('content')
    {{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">Login</h1>
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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" id="email" name="email" class="input-text full-width"
                                        placeholder="Email Address">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red;" />
                                </div>
                                <div class="form-group">
                                    <input id="password" name="password" type="password" class="input-text full-width"
                                        placeholder="Password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red;" />
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input id="remember_me" name="remember" type="checkbox">Remember my password?
                                        </label>
                                    </div>
                                    <div class="" style="display: flex; justify-content: space-between">
                                        <div>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}"
                                                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                    Forgot your password?
                                                </a>
                                            @endif
                                        </div>

                                        <div class="ml-auto">
                                            <span><a href="{{ route('register') }}"
                                                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                    Create account
                                                </a></span>
                                        </div>
                                    </div>


                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn style1">Login Now</button>
                                </div>
                                <div class="social-login">
                                    <span class="social-label">Or login with</span>
                                    <ul class="socials">
                                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
