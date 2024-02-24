@extends('admin/layouts/master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.profile.edit') }}"><i class="bx bx-user me-1"></i> Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages-account-settings-notifications.html"><i
                                    class="bx bx-bell me-1"></i> Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages-account-settings-connections.html"><i
                                    class="bx bx-link-alt me-1"></i> Connections</a>
                        </li>
                    </ul>
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                @if (!empty(Auth::user()->photo))
                                    <img src="{{ asset(Auth::user()->photo) }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                @else
                                <img src="{{ asset('template/backend/assets/img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">

                                @endif
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg">
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4" onclick="resetAvatar()">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>
                        
                                    <p class="text-muted mb-0">Allowed JPG, GIF, or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                @csrf
                            </form>
                            <form action="{{ route('admin.profile.update') }}" id="formAccountSettings" method="POST">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input class="form-control" type="text" id="name" name="name"
                                            value="{{ $user->name }}" required autofocus autocomplete="name">
                                        @if ($errors->has('name'))
                                            <p class="mt-2 text-sm text-red-500">{{ $errors->first('name') }}</p>
                                        @endif

                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input class="form-control" type="text" readonly id="email" name="email"
                                            value="{{ $user->email }}" placeholder="john.doe@example.com">
                                        @if ($errors->has('name'))
                                            <p class="mt-2 text-sm text-red-500">{{ $errors->first('name') }}</p>
                                        @endif
                                            {{-- @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                <div>
                                                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                        Your email address is unverified.

                                                        <button onclick="document.getElementById('send-verification').submit();"
                                                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                            Click here to re-send the verification email.
                                                        </button>
                                                    </p>

                                                    @if (session('status') === 'verification-link-sent')
                                                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                            A new verification link has been sent to your email address.
                                                        </p>
                                                    @endif
                                                </div>
                                                    
                                            @endif --}}

                                    </div>

                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                </div>

                            </form>

                        </div>
                        <!-- /Account -->
                    </div>
                    <div class="card">
                        <h5 class="card-header">Update Password</h5>
                        <div class="card-body">
                            <form action="{{ route('admin.password.update') }}" id="formAccountSettings" method="POST">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="update_password_current_password" class="form-label">Current
                                            Password</label>
                                        <input class="form-control" type="password" id="update_password_current_password"
                                            name="current_password" autocomplete="current-password" />
                                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-sm" style="color: red;" />
                                            </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="update_password_password" class="form-label">New Password</label>
                                        <input class="form-control" type="text" id="update_password_password"
                                            name="password" autocomplete="new-password">
                                            
                                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" style="color: red;" />
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="update_password_password_confirmation" class="form-label">Confirm
                                            Password</label>
                                        <input class="form-control" type="password"
                                            id="update_password_password_confirmation" name="password_confirmation"
                                            autocomplete="new-password">
                                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" style="color: red;" />

                                    </div>

                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- / Content -->

        <!-- Footer -->

        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
