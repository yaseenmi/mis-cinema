<nav class="flex justify-between items-center">
    <div class="md:flex md:justify-between md:items-center left-nav-container">
        <div>
            <a href="/" class="flex items-center">
                <img src="/images/Cinemacity_Logo.png" alt="Laracasts Logo" width="75">
                <span class="logo-text">
                    <span>Cinema City</span>
                </span>
            </a>

        </div>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/#movies">Movies</a>
        </div>
    </div>

    <div class="md:mt-0 flex items-center">
        @auth
            <div class="nav-dropdown">
                <x-dropdown.dropdown>
                    <x-slot name="trigger">
                        <a href="/dashboard" class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</a>
                    </x-slot>
                </x-dropdown.dropdown>
            </div>
        @else
        <div class="nav-dropdown">
            <a href="{{request()->is('login') ? "/register" : "/login"}}" class="nav-login-btn ml-3 rounded-full font-semibold text-white uppercase py-3 px-5">{{request()->is('login') ? "Register" : "Login"}}</a>
        </div>
        @endauth
        <div class="nav-burger">
            <x-burger width="29" height="18"/>
        </div>
    </div>
</nav>
