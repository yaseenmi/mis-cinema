@extends('components.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/components/sidemenu-container.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/ticket.css') }}">
@endsection()

@section('content')
    <main style="background: url('{{ asset('images/bg3.jpg'); }}')">
        <x-sidemenu-container heading="Profile"
            borderColor="#222222"
            px="3"
            py="8"
            menuWidth="13">
            <x-slot name="menuLinks">
                <x-sidebar.link href="/dashboard" iconColor="white" icon="home">Home</x-sidebar-link>
                <x-sidebar.link href="/dashboard/profile" iconColor="white" icon="profile">Profile</x-sidebar-link>
                <x-sidebar.link href="/dashboard/history" iconColor="white" icon="history">Histroy</x-sidebar-link>
                <x-sidebar.link href="/dashboard/privacy" iconColor="white" icon="privacy">Privacy</x-sidebar-link>
            </x-slot>
            <div>
                <h2 class="text-4xl">Majd Al-Shatti</h2>
                <div class="mt-10">
                    Email:
                    <span class="profile-email">majd@gmail.com</span>
                </div>
                <p class="mt-4" style="color:gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi reiciendis animi ipsam temporibus accusamus rerum vero repudiandae nesciunt, eos accusantium quidem quibusdam dolore, vitae a itaque nostrum dolores, omnis voluptatem?</p>
            </div>
        </x-sidemenu-container>
    </main>
@endsection
