@props (['active' => false, 'section' => null])

@php
    $isActive = filter_var($active, FILTER_VALIDATE_BOOLEAN);
@endphp

<a
    {{ $attributes->merge([
        'class' => 'relative inline-flex items-center px-4 py-2 rounded-lg font-medium text-sm transition-all duration-300 overflow-hidden group'
    ]) }}
    x-bind:class="{
        'text-gray-300 hover:text-white hover:bg-white/5': !scrolled && !{{ $isActive ? 'true' : 'false' }},
        'text-slate-700 hover:bg-slate-100': scrolled && !{{ $isActive ? 'true' : 'false' }},
        'bg-cyan-500/10 text-cyan-400 border border-cyan-500/30': !scrolled && {{ $isActive ? 'true' : 'false' }},
        'bg-cyan-500/10 text-cyan-400 border border-cyan-500/30 shadow-sm': scrolled && {{ $isActive ? 'true' : 'false' }}
    }"
    @if ($section)
        @click="
            if(location.pathname === '{{ url()->current() }}') {
                $event.preventDefault();
                document.getElementById('{{ $section }}')?.scrollIntoView({behavior:'smooth'});
            }
        "
    @endif
>
    {{ $slot }}
    <span
        class="absolute bottom-0 left-0 h-0.5 w-full origin-left scale-x-0 transform bg-cyan-400 transition-transform duration-300 group-hover:scale-x-100"
    ></span>

    <div
        class="absolute inset-0 origin-left scale-x-0 transform rounded-lg bg-gradient-to-r from-cyan-500/20 to-blue-600/20 transition-transform duration-300 group-hover:scale-x-100"
    ></div>
</a>
