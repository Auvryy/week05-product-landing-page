@props([
    'name',
    'position',
    'review',
    'photo' => null,
    'stars' => 5,
    'serviceUsed' => '9H Ceramic Coating',
])

<div class="relative z-20 flex flex-col justify-between rounded-2xl border border-zinc-200/80 bg-white p-7 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-zinc-200/50 hover:border-zinc-300 group">
    
    <!-- Rating Stars & Quote Status -->
    <div class="flex items-center justify-between mb-4">
        <div class="flex items-center gap-1 text-amber-500">
            @for ($i = 0; $i < $stars; $i++)
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
            @endfor
        </div>
        <span class="text-[10px] font-mono text-zinc-600 px-2.5 py-0.5 rounded-full bg-zinc-100 border border-zinc-200 font-medium">
            Verified Owner
        </span>
    </div>

    <!-- Review Content -->
    <p class="text-sm text-zinc-600 leading-relaxed italic mb-6">
        “{{ $review }}”
    </p>

    <!-- Client Profile & Vehicle Details -->
    <div class="pt-4 border-t border-zinc-100 flex items-center gap-3.5">
        <div class="relative w-10 h-10 rounded-full overflow-hidden border border-zinc-200 bg-zinc-100 shrink-0">
            @if ($photo)
                <img src="{{ $photo }}" alt="{{ $name }}" class="w-full h-full object-cover" />
            @else
                <div class="w-full h-full flex items-center justify-center bg-zinc-900 text-white font-bold text-xs">
                    {{ substr($name, 0, 1) }}
                </div>
            @endif
        </div>
        <div>
            <h4 class="text-sm font-bold text-zinc-950 group-hover:text-zinc-700 transition-colors">{{ $name }}</h4>
            <div class="flex items-center gap-1.5 text-xs text-zinc-500">
                <span>{{ $position }}</span>
                <span>&bull;</span>
                <span class="text-zinc-900 font-medium">{{ $serviceUsed }}</span>
            </div>
        </div>
    </div>
</div>
