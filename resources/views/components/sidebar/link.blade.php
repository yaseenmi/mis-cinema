@props([
    'icon' => '',
    'iconColor' => 'white',
    'gap' => 'gap-3',
    'href'
])

@isset($href)

    <a class="flex items-center {{$gap}} sidebar-link" href="{{$href}}">
        <x-icon name="{{$icon}}" color="{{$iconColor}}"/>
        {{ $slot }}
    </a>

    @else

    <a class="flex items-center {{$gap}} sidebar-link sidebar-dropdown-toggle">
        <x-icon name="{{$icon}}" color="{{$iconColor}}"/>
        {{ $slot }}
    </a>

    @endisset
