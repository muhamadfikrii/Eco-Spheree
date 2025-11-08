@props(['active', 'section' => null])

@php
$isActive = ($active ?? false);
@endphp

<a 
    {{ $attributes->merge([
        'class' => "inline-flex items-center px-5 py-2 rounded-lg font-Inter font-bold leading-5 transition duration-150 ease-in-out " . 
                   ($isActive ? 'bg-gray-700 text-emerald-900' : 'text-white hover:text-white hover:bg-gray-700')
    ]) }}
    x-bind:class="{
        'text-emerald-900': scrolled && !{{ $isActive ? 'true' : 'false' }},
        'text-white': !scrolled && !{{ $isActive ? 'true' : 'false' }}
    }"
    @if($section)
        @click="
            if(location.pathname==='{{ url()->current() }}'){
                $event.preventDefault();
                document.getElementById('{{ $section }}')?.scrollIntoView({behavior:'smooth'});
            }
        "
    @endif
>
    {{ $slot }}
</a>
