@extends('components.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/components/sidemenu-container.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/ticket.css') }}">
@endsection()

@section('content')
    <main style="background: url('{{ asset('images/bg3.jpg'); }}')">
        <x-sidemenu-container heading="History"
            borderColor="#222222"
            px="3"
            py="8"
            menuWidth="13"
            >
            <x-slot name="menuLinks">
                <x-sidebar.link href="/dashboard" iconColor="white" icon="home">Home</x-sidebar-link>
                <x-sidebar.link href="/dashboard/profile" iconColor="white" icon="profile">Profile</x-sidebar-link>
                <x-sidebar.link href="/dashboard/history" iconColor="white" icon="history">Histroy</x-sidebar-link>
                <x-sidebar.link href="/dashboard/privacy" iconColor="white" icon="privacy">Privacy</x-sidebar-link>
            </x-slot>
            <div class="flex flex-col gap-10">
                <h2 style="font-size: 22px; font-weight:700">Current Reservtions</h2>

                <div class="flex flex-col gap-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2>Reservation ID: 1</h2>
                        </div>
                    </div>

                    <div class="flex justify-between items-center flex-wrap gap-4">
                        <x-ticket-card
                            movieName="Doctor Strange - Multiverse of maddness"
                            screen="Screen 1"
                            username="Majd Al-Shatti"
                            seat="6"
                            row="10"
                            date="2022/10/2 02:00"
                            price="10,000"
                        />
                        <x-ticket-card
                            movieName="Doctor Strange"
                            screen="Screen 1"
                            username="Majd Al-Shatti"
                            seat="6"
                            row="10"
                            date="2022/10/2 02:00"
                            price="10,000"
                        />
                        <x-ticket-card
                            movieName="Doctor Strange"
                            screen="Screen 1"
                            username="Majd Al-Shatti"
                            seat="6"
                            row="10"
                            date="2022/10/2 02:00"
                            price="10,000"
                        />
                    </div>
                </div>
            </div>
        </x-sidemenu-container>
    </main>
@endsection
