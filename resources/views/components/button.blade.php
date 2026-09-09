@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
])

@php
    $baseStyles = 'inline-flex items-center justify-center font-medium transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-zinc-950 disabled:opacity-50 disabled:cursor-not-allowed group cursor-pointer';

    $sizeStyles = match ($size) {
        'sm' => 'px-3.5 py-1.5 text-xs rounded-lg gap-1.5',
        'lg' => 'px-7 py-3.5 text-base rounded-full gap-2.5 shadow-sm',
        default => 'px-5 py-2.5 text-sm rounded-full gap-2 shadow-sm',
    };

    $variantStyles = match ($variant) {
        'secondary' => 'bg-zinc-100 text-zinc-900 hover:bg-zinc-200/80 border border-zinc-200',
        'outline' => 'bg-transparent text-zinc-800 hover:text-black border border-zinc-300 hover:border-zinc-900 hover:bg-zinc-50',
        'ghost' => 'bg-transparent text-zinc-600 hover:text-zinc-950 hover:bg-zinc-100/80',
        'danger' => 'bg-rose-600 text-white hover:bg-rose-700',
        'dark' => 'bg-black text-white hover:bg-zinc-800',
        default => 'bg-zinc-950 text-white hover:bg-zinc-800 hover:shadow-md transition-shadow',
    };

    $classes = "{$baseStyles} {$sizeStyles} {$variantStyles}";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
