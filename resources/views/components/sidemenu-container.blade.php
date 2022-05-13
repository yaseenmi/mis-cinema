@props([
    'heading',
    'borderColor' => '',
    'menuTextColor' => '#dcdcdc',
    'px' => '',
    'py' => '',
    'menuWidth' => '18',
    'minHeight' => '70',
    'menuLinksGap' => '0.9',
    'menuColor' => '',
    'mainColor' => ''
])

<div class="sidemenu-container flex flex-col gap-10">
    @isset($heading)
    <div>
        <h2 class="font-semibold text-3xl py-5">{{ $heading }}</h2>
        <hr style="border:1px solid {{$borderColor}}">
    </div>
    @endisset
    <div class="flex justify-between">
        <div class="left-bar flex flex-col"
             style="
                    width:{{$menuWidth}}%;
                    {{ ($borderColor != '') ? ('border-right:1px solid '.$borderColor) : ''}};
                    gap: {{$menuLinksGap}}rem;
                    background-color:{{$menuColor}};
                    padding: {{$py}}rem {{$px}}rem;"
            >
            {{ $menuLinks }}
        </div>

        <div class="right-main-content" style="
                    width:calc(100% - {{$menuWidth}}%);
                    min-height:calc(100vh - 3.5rem);
                    background-color:{{$mainColor}};
                    padding: {{$py}}rem {{$px}}rem">
            {{ $slot }}
        </div>
    </div>
</div>

