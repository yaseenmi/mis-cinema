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
    <form method="POST" action="{{ route('password.update') }}" class="flex justify-between" style="flex-direction: column">
            @csrf
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div>
                <div class="form-logo flex justify-center ">
                    <img src="{{ asset('images/logo2.png') }}" alt="">
                </div>

                <div class="mt-10">
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
                    Reset Password
                </x-button>
            </div>
        </form>

    </section>
@endsection












