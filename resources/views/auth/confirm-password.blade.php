@extends('components.layouts.app')

{{-- Styles --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/auth-form.css') }}">
@endsection

{{-- Content --}}
@section('content')
<main style="background: url('{{ asset('images/bg3.jpg'); }}')">
    <section class="form-container flex justify-center items-center">
        <form method="POST" action="{{ route('password.confirm') }}" class="flex justify-between" style="flex-direction: column">
            @csrf

            <div>
                <div>
                    <div class="form-logo flex justify-center ">
                        <img src="{{ asset('images/logo2.png') }}" alt="">
                    </div>
                </div>

                <!-- Password -->
                <div class="mt-10">
                    <x-input name="password" type="password" style="no-background-ph" width="100%" text="Password" />

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <span>{{ $message }}</span>
                        </span>
                    @enderror
                </div>
                <div class="mt-4 text-sm white-text-color">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button type="submit" style="no-background-btn" px="50" py="5" radius="4">
                    Log in
                </x-button>
            </div>
        </form>


    </section>
@endsection



