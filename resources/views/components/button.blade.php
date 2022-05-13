@props([
    'type' => 'button',
    'href' => '#',
    'px' => '18',
    'py' => '12',
    'fontSize' => '16',
    'style' => 'background-btn',
    'fontWeight' => '400',
    'textTransform' => 'none',
    'radius' => '0'
])

@if($type == 'button' || $type == 'submit')
    <button
        type="{{$type}}"
        style="
            font-size: {{$fontSize}}px;
            font-weight: {{$fontWeight}};
            padding: {{$py}}px {{$px}}px;
            text-transform: {{$textTransform}};
            border-radius: {{$radius}}px;
        "
        class="default-btn {{$style}}"
    >
    {{$slot}}
    </button>
@elseif($type == 'link')
    <a
        href="{{$href}}"
        style="
            font-size: {{$fontSize}}px;
            font-weight: {{$fontWeight}};
            padding: {{$py}}px {{$px}}px;
            text-transform: {{$textTransform}};
            border-radius: {{$radius}}px;
        "
        class="{{$style}} default-btn"
    >
    {{$slot}}
    </a>
@endif
