{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf --}}

<!-- Email Address -->
{{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

<!-- Password -->
{{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

<!-- Remember Me -->
{{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

{{-- <div class="flex items-center justify-end mt-4"> --}}
{{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}
{{-- 
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



{{-- @extends('frontend.frontend')
@section('content_area')
    <div class="">
        <input type="text">
        <input type="text">
        <input type="text">
    </div>
@endsection --}}

@extends('layouts.guest')
@section('content_area')
    <section class="account py-80">
        <div class="container container-lg">
            <form action="#" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row gy-4">

                    <div class="col-xl-6">
                        <img src="https://eakeen.com/frontend/amazy/img/banner/login_img.png" alt="">
                    </div>

                    <!-- Login Card Start -->
                    <div class="col-xl-6 pe-xl-5">
                        <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-100">
                            <h6 class="text-xl mb-32">Login</h6>
                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Email
                                    address <span class="text-danger">*</span> </label>
                                <input type="email" class="common-input" id="username" placeholder="Email Address"
                                    name="email" required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mb-24">
                                <label for="password" class="text-neutral-900 text-lg mb-8 fw-medium">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="common-input" id="password" placeholder="Enter Password"
                                        value="" name="password" required>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    <span
                                        class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash"
                                        id="#password"></span>
                                </div>
                            </div>
                            <button class="btn btn-success"> Sign in </button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
