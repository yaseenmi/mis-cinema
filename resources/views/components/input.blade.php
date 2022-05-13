@props([
    'disabled' => false,
    'name',
    'text',
    'width' => '100%',
    'style',
    'type' => 'text'
    ])

<input
    {{ $disabled ? 'disabled' : '' }}
    name="{{$name}}"
    type="{{$type}}"
    class="{{ $style }} form-input"
    style="width: {{$width}};"
    placeholder="{{$text}}"
>
