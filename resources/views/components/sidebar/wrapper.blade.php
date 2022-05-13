<div class="sidebar">
    <div class="flex flex-col gap-8">
        <div class="sidebar-profile flex items-center gap-4">
            <div class="sidebar-profile-picture">
                <img src="#" alt="">
            </div>
            <div>
                <h2>Majd Al-Shatti</h2>
            </div>
        </div>
        <div class="flex flex-col gap-6">
            <x-sidebar.link href="/" icon="home">Home</x-sidebar-link>
            <x-sidebar.link href="/#movie" icon="movie">Movies</x-sidebar-link>
            <x-sidebar.link href="/about" icon="question-mark">About</x-sidebar-link>

            <div class="flex flex-col gap-12" x-data="{show: false}">
                <div @click="show = !show">
                    <x-sidebar.link icon="gear" >Profile Settings</x-sidebar-link>
                </div>

                <div class="sidebar-dropdown flex flex-col gap-6" x-show="show">
                    <x-sidebar.link href="/dashboard/" icon="home">Profile Home</x-sidebar-link>
                    <x-sidebar.link href="/dashboard/profile" icon="profile">Profile</x-sidebar-link>
                    <x-sidebar.link href="/dashboard/history" icon="history">History</x-sidebar-link>
                    <x-sidebar.link href="/dashboard/privacy" icon="privacy">Privacy</x-sidebar-link>
                </div>
            </div>
        </div>
    </div>
</div>
