@extends('components.layouts.app')

{{-- Styles --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/auth-form.css') }}">
@endsection

{{-- Content --}}
@section('content')
<main style="background: url('{{ asset('images/bg3.jpg'); }}')">
    <section

    class="form-container flex justify-center items-center">
        <form method="POST" action="{{ route('register') }}" class="flex justify-between" style="flex-direction: column">
            @csrf

            <div>
                <div class="form-logo flex justify-center ">
                    <img src="{{ asset('images/logo2.png') }}" alt="">
                </div>

                <div class="mt-10">
                    <!-- Name -->
                    <div class="mt-5">
                        <x-input name="name" style="no-background-ph" width="100%" text="Username" />

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="mt-5">
                        <x-input name="email" style="no-background-ph" width="100%" text="Email" />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-5">
                        <x-input name="password" type="password" style="no-background-ph" width="100%" text="Password" />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                     <!-- Confirm Password -->
                     <div class="mt-5">
                        <x-input name="password_confirmation" type="password" style="no-background-ph" width="100%" text="Confirm Password" />

                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button type="submit" style="no-background-btn" px="50" py="5" radius="4">
                    Register Now!
                </x-button>
            </div>
        </form>
    </section>
</main>

@endsection









