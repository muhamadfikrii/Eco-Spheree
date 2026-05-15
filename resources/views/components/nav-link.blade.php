@props(['active', 'section' => null])

@php
 $isActive = ($active ?? false);
@endphp

<a 
    {{ $attributes->merge([
        'class' => "relative inline-flex items-center px-4 py-2 rounded-lg font-Inter font-medium text-md leading-5 transition-all duration-300 overflow-hidden group"
    ]) }}
    x-bind:class="{
        'text-white/90 hover:bg-white/10': !scrolled && !{{ $isActive ? 'true' : 'false' }},
        'text-slate-400 hover:bg-slate-100': scrolled && !{{ $isActive ? 'true' : 'false' }},
        'bg-blue-500/20 text-white border border-blue-400/30': !scrolled && {{ $isActive ? 'true' : 'false' }},
        'bg-blue-500/20 text-white border border-blue-400/30 shadow-sm': scrolled && {{ $isActive ? 'true' : 'false' }}
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
    <!-- Animated underline effect (cyan) -->
    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-[#38bdf8] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
    
    <!-- Animated background effect (blue/cyan gradient) -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#38bdf8]/20 to-[#2563eb]/20 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-lg"></div>
</a>