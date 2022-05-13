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
            <div class="records-table flex flex-col gap-4">
                <div class="flex justify-between">
                    <div class="heading">Current Active Movies</div>
                    <div>
                        <x-button type="link" href="/admin/dashboard/movie/create" style="no-background-btn" py="5">
                            Create movie
                        </x-button>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <a href="/admin/dashboard/movie/detail" class="movie-card"><img src="{{ asset('images/posters/poster1.jpg') }}" alt=""></a>
                    <a href="/admin/dashboard/movie/detail" class="movie-card"><img src="{{ asset('images/posters/poster2.jpg') }}" alt=""></a>
                    <a href="/admin/dashboard/movie/detail" class="movie-card"><img src="{{ asset('images/posters/poster3.jpg') }}" alt=""></a>
                    <a href="/admin/dashboard/movie/detail" class="movie-card"><img src="{{ asset('images/posters/poster4.jpg') }}" alt=""></a>
                </div>
            </div>

            <div class="records-table flex flex-col gap-4">
                <div class="heading">History</div>
                <div class="flex items-center gap-3">
                    <a href="#" class="movie-card"><img src="{{ asset('images/posters/poster1.jpg') }}" alt=""></a>
                    <a href="#" class="movie-card"><img src="{{ asset('images/posters/poster2.jpg') }}" alt=""></a>
                    <a href="#" class="movie-card"><img src="{{ asset('images/posters/poster3.jpg') }}" alt=""></a>
                    <a href="#" class="movie-card"><img src="{{ asset('images/posters/poster4.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </x-sidemenu-container>
</main>

@endsection
