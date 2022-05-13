@extends('components.layouts.app')

{{-- Styles --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

{{-- Content --}}
@section('content')

<main style="background: url('{{ asset('images/bg3.jpg'); }}')">
    <div class="header-container" >
        <div class="flex flex-col gap-20">
            <div class="header-title">
                <h1>Welcome to Cinema City</h1>
            </div>
            <div class="flex flex-col gap-12 items-start">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum numquam deserunt porro repudiandae quia vero blanditiis assumenda? Voluptatibus id dolores quaerat iure fugit tempore repellat architecto fugiat, pariatur, sint asperiores?</p>
                @auth
                    <x-button
                        type="link"
                        href="#movies"
                        px="28"
                        textTransform="uppercase"
                        fontSize="18"
                        fontWeight="600">
                        Browse movies
                    </x-button>
                @else
                    <x-button
                        type="link"
                        href="/register"
                        px="28"
                        textTransform="uppercase"
                        fontSize="18"
                        fontWeight="600">
                        Get started
                    </x-button>
                @endauth
            </div>
        </div>
    </div>

    <div class="movies-container" id="movies">
        <h2><span>Now</span> Showing</h2>
        <div class="movies-cards-container flex items-center justify-center gap-4">
            <a href="/movie/x" class="movie-card" >
                <img src="{{ asset('images/posters/poster3.jpg') }}">
            </a>
            <a href="/movie/x" class="movie-card">
                <img src="{{ asset('images/posters/poster1.jpg') }}" alt="">
            </a>
            <a href="/movie/x" class="movie-card">
                <img src="{{ asset('images/posters/poster4.jpg') }}" alt="">
            </a>
            <a href="/movie/x" class="movie-card">
                <img src="{{ asset('images/posters/poster2.jpg') }}" alt="">
            </a>
        </div>
        <div class="prices-container text-center">
            <h3>Ticket Price: 10,000 SP</h3>
            <h3>3D Glasses: 2,000 SP</h3>
        </div>
    </div>

</main>

@endsection
