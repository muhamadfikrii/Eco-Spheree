@props(['value', 'label'])

<div 
    wire:click="$set('{{ $attributes->wire('model')->value() }}', '{{ $value }}')" 
    class="cursor-pointer border border-green-700/30 rounded-lg px-4 py-3 flex items-center justify-between hover:bg-green-900/20 transition 
    {{ $attributes->wire('model')->value() == $value ? 'bg-green-800/40 border-green-500' : '' }}">
    <span>{{ $label }}</span>
    @if ($attributes->wire('model')->value() == $value)
        <span class="text-green-400 font-bold">✔</span>
    @endif
</div>
