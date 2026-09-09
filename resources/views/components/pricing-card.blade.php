@props([
    'name',
    'price',
    'duration' => 'per vehicle',
    'description',
    'features' => [],
    'isPopular' => false,
    'ctaText' => 'Book This Package',
    'ctaHref' => '#contact',
])

<div class="relative z-20 flex flex-col justify-between rounded-3xl p-8 transition-all duration-300 hover:-translate-y-1.5 {{ $isPopular ? 'border-2 border-zinc-950 bg-white shadow-2xl ring-1 ring-zinc-950/10' : 'border border-zinc-200/80 bg-white hover:border-zinc-300 shadow-xs hover:shadow-lg' }}">
    
    @if ($isPopular)
        <!-- Most Popular Ribbon -->
        <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full bg-zinc-950 text-white text-[10px] font-bold uppercase tracking-widest shadow-md">
            ★ Most Popular Package ★
        </div>
    @endif

    <div>
        <!-- Tier Header -->
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-xl font-bold text-zinc-950 tracking-tight font-['Space_Grotesk',sans-serif]">{{ $name }}</h3>
            <span class="text-xs uppercase px-2.5 py-1 rounded-md {{ $isPopular ? 'bg-zinc-950 text-white font-semibold' : 'bg-zinc-100 text-zinc-600 font-medium' }}">
                {{ $duration }}
            </span>
        </div>

        <p class="text-xs text-zinc-500 mb-6 leading-relaxed">
            {{ $description }}
        </p>

        <!-- Price Display -->
        <div class="flex items-baseline gap-2 mb-8 pb-6 border-b border-zinc-200">
            <span class="text-4xl sm:text-5xl font-extrabold text-zinc-950 tracking-tight font-['Space_Grotesk',sans-serif]">₱{{ $price }}</span>
            <span class="text-xs text-zinc-500 font-medium uppercase tracking-wider">PHP Net</span>
        </div>

        <!-- Included Features Checklist -->
        <div class="space-y-3.5 mb-8">
            <span class="text-xs font-bold uppercase tracking-wider text-zinc-700 block mb-2">Package Inclusions:</span>
            @foreach ($features as $feature)
                <div class="flex items-start gap-3 text-sm text-zinc-700">
                    <div class="mt-0.5 w-4 h-4 rounded-full flex items-center justify-center shrink-0 {{ $isPopular ? 'bg-zinc-950 text-white' : 'bg-zinc-100 text-zinc-900' }}">
                        <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <span>{{ $feature }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Subscribe / Booking Button -->
    <div class="pt-4 border-t border-zinc-100">
        <x-button 
            href="{{ $ctaHref }}" 
            variant="{{ $isPopular ? 'primary' : 'outline' }}" 
            size="lg" 
            class="w-full justify-center">
            <span>{{ $ctaText }}</span>
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </x-button>
    </div>
</div>
