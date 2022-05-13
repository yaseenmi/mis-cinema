@extends('components.layouts.dash')

{{-- Styles --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/movie.css') }}">
@endsection

{{-- Content --}}
@section('content')

<main>
    <x-sidemenu-container
    px="2"
    py="2"
    minHeight="93"
    menuLinksGap="1"
    menuColor="#DCDCDC"
    mainColor="#F2F2F2">
        <x-slot name="menuLinks">
                <x-sidebar.link href="/admin/dashboard" iconColor="black" icon="stat">Statistics</x-sidebar-link>
                <x-sidebar.link href="/admin/dashboard/movie" iconColor="black" icon="movie">Movies</x-sidebar-link>
                <x-sidebar.link href="/admin/dashboard/screen" iconColor="black" icon="screen">Screens</x-sidebar-link>
                <x-sidebar.link href="/admin/dashboard/user" iconColor="black" icon="user">Users</x-sidebar-link>
        </x-slot>
        <div class="records-table flex flex-col gap-10">
            <div class="movie-details-container">
                <div class="flex items-center flex-wrap">
                    <div class="movie-cover">
                        <img width="500px" height="250px" src="{{ asset('images/posters/poster1.jpg') }}" alt="">
                    </div>
                    <div class="movie-details ml-10">
                        <div class="flex flex-col items-start gap-8">
                            <h2 class="movie-title">Movie Name : Jonny English - Strikes Again</h2>
                            <div class="flex flex-col items-start gap-6">
                                <p>Description : quibusdam ad! Esse provident error natus dolore deserunt fuga magni?</p>
                                <div class="flex flex-col items-start gap-2">
                                    <p >Screens: Screen 1, Screen 2</p>
                                    <div class="movie-display ">
                                        Display: <span>3D</span> <span>2D</span>
                                    </div>
                                    <p >Show Time: 10:00 12:30 - 2:00 4:00</p>
                                </div>
                                <p >Ticket Price: 10,000 SP</p>
                            </div>
                        </div>
                        <div class="records-table flex flex-row gap-5">
                        <div class="mt-10">
                            <x-button
                                type="link"
                                href="#"
                                px="28"
                                textTransform="uppercase"
                                fontSize="18"
                                fontWeight="600">
                                Delete
                            </x-button>
                        </div>
                        <div class="mt-10">
                            <x-button
                                type="link"
                                href="#"
                                px="28"
                                textTransform="uppercase"
                                fontSize="18"
                                fontWeight="600">
                                Edit
                            </x-button>
                        </div>
                        </div>
                    </div>
     
                </div>
            </div>
        </div>
    </x-sidemenu-container>
</main>

@endsection
