@extends('components.layouts.app')

{{-- Styles --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/auth-form.css') }}">
@endsection

{{-- Content --}}
@section('content')
<main style="background: url('{{ asset('images/bg3.jpg'); }}')">
    <section class="form-container flex justify-center items-center">
        <form method="POST" action="{{ route('password.email') }}" class="flex justify-between" style="flex-direction: column">
            @csrf

            <div>
                <div class="form-logo flex justify-center ">
                    <img src="{{ asset('images/logo2.png') }}" alt="">
                </div>
                <!-- Email Address -->
                <div class="mt-10">
                    <x-input name="email" type="email" style="no-background-ph" width="100%" text="email" />

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <span>{{ $message }}</span>
                        </span>
                    @enderror
                </div>
                <div class="mt-4 text-sm white-text-color">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button type="submit" style="no-background-btn" px="50" py="5" radius="4">
                    Submit Email
                </x-button>
            </div>
      </form>

    </section>
@endsection
