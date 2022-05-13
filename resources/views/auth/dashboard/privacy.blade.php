@extends('components.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/components/sidemenu-container.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/ticket.css') }}">
@endsection()

@section('content')
    <main style="background: url('{{ asset('images/bg3.jpg'); }}')">
        <x-sidemenu-container heading="Privacy"
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
            <div class="text-gray-200">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nesciunt cumque odio voluptatum magni sint recusandae, ullam quibusdam, nisi, dolor necessitatibus excepturi maxime asperiores aliquam id ducimus eaque repellat laudantium.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam asperiores placeat quae cupiditate harum nemo. Rerum optio consectetur corporis obcaecati eos, dolorum velit! Facilis enim maiores, dicta distinctio deleniti amet.
            </div>

            <form action="" class="mt-4">
                <label for="">Email:</label> <br>
                <input type="text" style="width: 40%" class="px-2 py-2 rounded mt-2 focus:border-gray-400 disabled:opacity-40" value="{{ Auth::user()->email}}" disabled>
                <div class="mt-4">
                    <a href=""style="color: var(--prim-color)">Change Email</a>
                </div>
            </form>

            <form action="" class="mt-4">
                <label for="">Password: </label> <br>
                <input type="password" style="width: 40%" class="px-2 py-2 rounded mt-2 focus:border-gray-400 disabled:opacity-40" value="{{ Auth::user()->password }}" disabled>
                <div class="mt-4">
                    <a href="" style="color: var(--prim-color)">Reset Password</a>
                </div>
            </form>

            <div class="mt-4 text-gray-600">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, corporis deserunt! Suscipit animi nisi exercitationem mollitia ad assumenda beatae, ipsam et minima. Numquam ea culpa recusandae accusantium, quaerat sapiente veniam?
            </div>
        </x-sidemenu-container>
    </main>
@endsection()
