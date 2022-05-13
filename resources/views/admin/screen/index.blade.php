@extends('components.layouts.dash')

{{-- Styles --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/screen.css') }}">
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
        <div class="records-table flex flex-center items-center flex-col gap-10">
            <div class="flex gap-6">
                <div class="screen-select-item">Screen 1</div>
                <div class="screen-select-item">Screen 2</div>
                <div class="screen-select-item">Screen 3</div>
                <div class="screen-select-item">Screen 4</div>
            </div>
            <div class="screen-container flex flex-col">
                <div class="flex justify-center items-center flex-wrap">
                    <div class="monitor"></div>
                </div>
                <div class="flex flex-wrap seats-container gap-3">
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-false"></div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true seat-reserved">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                        <div class="seat-true">S1</div>
                </div>
            </div>
        </div>
    </x-sidemenu-container>
</main>

@endsection
