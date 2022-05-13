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
    <form method="POST" action="{{ route('verification.send') }}" class="flex justify-between" style="flex-direction: column">
            @csrf

            <div>
                <div class="form-logo flex justify-center ">
                    <img src="{{ asset('images/logo2.png') }}" alt="">
                </div>
                <div class="mt-10 mb-4 text-sm text-gray-600">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>
                <div class="mb-4">
                    <x-button fontSize="14" px="12" py="4" radius="4">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>

        </form>

    </section>
@endsection


