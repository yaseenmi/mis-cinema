@props([
    'width' => '31',
    'height' => '20',
    'thin' => '2',
    'id' => 'burger',
    'color' => 'var(--white-color)'
])

<div
    class="burger"
    style="
        width: {{$width}}px;
        height: {{$height}}px;
    "
    id="{{$id}}"
    >
    <div style="height: {{$thin}}px; background-color: {{$color}}"></div>
    <div style="height: {{$thin}}px; background-color: {{$color}}"></div>
    <div style="height: {{$thin}}px; background-color: {{$color}}"></div>
</div>
