@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="relative">
    {{-- Trigger --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" class="absolute  mt-2  w-full z-50 overflow-auto max-h-52" style="display: none">
        {{ $slot }}
    </div>

</div>

