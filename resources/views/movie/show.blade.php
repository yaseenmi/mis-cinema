@extends('components.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/movie/show.css') }}">
@endsection

{{-- Content --}}
@section('content')

<main style="background: url('{{ asset('images/bg3.jpg'); }}')">
    <div class="movie-details-container">
        <div class="flex items-center flex-wrap">
            <div class="movie-cover">
                <img src="{{ asset('images/posters/poster3.jpg') }}" alt="">
            </div>
            <div class="movie-details">
                <div class="flex flex-col items-start gap-8">
                    <h2 class="movie-title">Doctor Strange - Multiverse of Maddness</h2>
                    <div class="flex flex-col items-start gap-6">
                        <p class="white-text-color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo nam, praesentium eligendi a maiores, eius ullam quos quas rerum debitis quibusdam ad! Esse provident error natus dolore deserunt fuga magni?</p>
                        <div class="flex flex-col items-start gap-2">
                            <p class="white-text-color">Screens: Screen 1, Screen 2</p>
                            <div class="movie-display white-text-color">
                                Display: <span>3D</span> <span>2D</span>
                            </div>
                            <p class="white-text-color">Show Time: 10:00 12:30 - 2:00 4:00</p>
                        </div>
                        <p class="white-text-color">Ticket Price: 10,000 SP</p>
                    </div>
                </div>
                <div class="reserve-btn-res">
                    <x-button
                        type="link"
                        href="#"
                        px="28"
                        textTransform="uppercase"
                        fontSize="18"
                        style="no-background-btn"
                        fontWeight="600">
                        Reserve Ticket
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
