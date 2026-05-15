@props(['value', 'label'])

<div 
    wire:click="$set('{{ $attributes->wire('model')->value() }}', '{{ $value }}')" 
border border-cyan-500/30
{{ $attributes->wire('model')->value() == $value ? 'bg-cyan-800/40 border-cyan-400' : '' }}
    <span>{{ $label }}</span>
@if ($attributes->wire('model')->value() == $value)
        <span class="text-cyan-300 font-bold">✔</span>
    @endif
</div>
