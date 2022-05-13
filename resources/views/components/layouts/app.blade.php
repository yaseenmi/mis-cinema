<!doctype html>

<title>Cinema Reservation</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/components/layouts/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/main/nav.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/main/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/sidebar/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/loader.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/burger.css') }}">

@yield('styles')

<style>
    html{
        scroll-behavior: smooth;
    }
</style>

<body>
    <x-loader id="spinner"/>

    {{-- Top Navigation bar --}}
    <x-main.nav />

    {{-- Side Bar For responsive --}}
    <x-sidebar.wrapper />

    {{-- Main content --}}
    <section>
        @yield('content')
    </section>

    {{-- Footer --}}
    <x-main.footer />

    {{-- Flashing messages into the screen for 4 seconds --}}
    {{-- @include('includes.flash') --}}

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script>
        window.addEventListener('load', function(){
            setTimeout(() => {

            }, 10000);
            document.getElementById("spinner").style.display = "none";
        });
    </script>
    @yield('scripts')


</body>
