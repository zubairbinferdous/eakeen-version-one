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
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('layouts.guest')
@section('content_area')
    <section class="account py-80">
        <div class="container container-lg">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row gy-4">



                    <!-- register Card Start -->
                    <div class="col-xl-6 pe-xl-5">
                        <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-100">
                            <h6 class="text-xl mb-32">Sign Up</h6>
                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Full Name
                                    <span class="text-danger">*</span> </label>
                                <input type="text" class="common-input" id="username" placeholder="Full Name"
                                    name="name">
                            </div>
                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">User Name
                                    <span class="text-danger">*</span> </label>
                                <input name="Username" type="text" class="common-input" id="Username"
                                    placeholder="User Name">
                            </div>
                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Phone
                                    <span class="text-danger">*</span> </label>
                                <input type="phone" name="phone" class="common-input" id="username"
                                    placeholder="Phone">
                            </div>



                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Referral Code
                                    <span class="text-danger">*</span> </label>
                                <input type="test" class="common-input" id="referral" placeholder="Referral Code"
                                    name="Referral">
                            </div>


                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Email
                                    address <span class="text-danger">*</span> </label>
                                <input type="email" class="common-input" id="username" placeholder="Email Address"
                                    name="email">
                            </div>
                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Password<span
                                        class="text-danger">*</span> </label>
                                <input type="Password" class="common-input" id="username" placeholder="Password"
                                    name="password">
                            </div>
                            <div class="mb-24">
                                <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Confirm
                                    Password<span class="text-danger">*</span> </label>
                                <input type="Password" class="common-input" id="username" placeholder="Confirm Password"
                                    name="password_confirmation">
                            </div>

                            <button class="btn btn-success"> Sign up </button>
                        </div>
                    </div>



                    <div class="col-xl-6 d-flex justify-content-center align-items-center" style="height: 100vh;">
                        <div>
                            <img src="https://eakeen.com/frontend/amazy/img/banner/login_img.png" alt="Login banner image"
                                class="img-fluid">
                        </div>
                    </div>



                </div>
            </form>
        </div>
    </section>
@endsection

@push('script')
    <script>
        // Extract the Referral parameter from the URL
        const urlParams = new URLSearchParams(window.location.search);
        const referral = urlParams.get('Referral');

        // Set the value in the Referral input field
        if (referral) {
            document.getElementById('referral').value = referral;
        }
    </script>
@endpush
