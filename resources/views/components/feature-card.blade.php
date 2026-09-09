@props([
    'title',
    'description',
    'badge' => null,
    'accent' => 'default',
])

<div class="relative z-20 group rounded-2xl border border-zinc-200/80 bg-white p-6 sm:p-8 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-zinc-200/50 hover:border-zinc-300">
    <!-- Top Row: Icon + Optional Badge -->
    <div class="flex items-center justify-between mb-5">
        <div class="w-12 h-12 rounded-xl border border-zinc-200 bg-zinc-50 flex items-center justify-center text-zinc-900 transition-transform duration-300 group-hover:scale-105 group-hover:bg-zinc-900 group-hover:text-white group-hover:border-zinc-900 shadow-xs">
            {{ $icon ?? $slot }}
        </div>
        @if ($badge)
            <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full border border-zinc-200 bg-zinc-50 text-zinc-600">
                {{ $badge }}
            </span>
        @endif
    </div>

    <!-- Title -->
    <h3 class="text-lg sm:text-xl font-bold text-zinc-950 mb-2 font-['Space_Grotesk',sans-serif]">
        {{ $title }}
    </h3>

    <!-- Description -->
    <p class="text-sm text-zinc-600 leading-relaxed font-normal">
        {{ $description }}
    </p>

    <!-- Bottom Indicator -->
    <div class="mt-6 pt-4 border-t border-zinc-100 flex items-center text-xs font-semibold text-zinc-400 group-hover:text-zinc-900 transition-colors">
        <span>Studio5 Standard</span>
        <svg class="w-3.5 h-3.5 ml-1.5 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </div>
</div>
