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
        <table  id="customers">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Money Used</th>
                    <th>Tickets Reserved</th>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>3</td>

                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>2</td>

                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>6</td>
                  </tr>
                  

                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>1</td>

                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>9</td>

                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>test@gmail.com</td>
                    <td>20000 SP</td>
                    <td>5</td>

                  </tr>
        </table>
    </x-sidemenu-container>
</main>

@endsection
