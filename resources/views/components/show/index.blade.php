@props([
    'show',
])

<div 
    x-show="show == '{{ $show }}'"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    {{ $attributes->merge(['class' => 'md:mt-20']) }}
    >
    {{ $slot }}
</div>