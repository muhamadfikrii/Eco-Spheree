@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center bg-gray-700 px-5 py-2 rounded-lg font-Inter font-bold leading-5 text-white focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center font-Inter font-bold leading-5 text-gray-500 px-5 py-2 rounded-lg hover:text-white hover:bg-gray-700 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
