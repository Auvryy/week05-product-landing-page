@extends('layouts.app')

@section('title', 'Studio5 Auto Detailing & Ceramic Coating — Scaffolding Stage')

@section('content')
<main class="relative min-h-screen flex flex-col items-center justify-center p-6 bg-radial-[at_top] from-slate-900 via-slate-950 to-black text-slate-100">
    <!-- Ambient Glow Background -->
    <div class="pointer-events-none absolute -top-40 left-1/2 -translate-x-1/2 w-[700px] h-[500px] bg-rose-600/15 blur-[140px] rounded-full"></div>
    <div class="pointer-events-none absolute bottom-0 right-10 w-[400px] h-[400px] bg-emerald-500/10 blur-[120px] rounded-full"></div>

    <div class="relative z-10 max-w-3xl w-full text-center space-y-8">
        <!-- Logo and Brand Badge -->
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-slate-800 bg-slate-900/80 backdrop-blur shadow-xl">
            <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-xs uppercase tracking-widest font-semibold text-slate-300">Phase 1: Environment & Project Scaffolding Active</span>
        </div>

        <!-- Studio5 Brand Display -->
        <div class="flex flex-col items-center justify-center space-y-4">
            <div class="p-2 rounded-2xl bg-gradient-to-b from-slate-700 to-slate-900 shadow-2xl border border-slate-700/60 group">
                <img src="{{ asset('images/studio5.jpg') }}" alt="Studio5 Auto Detailing Logo" class="w-32 h-32 md:w-40 md:h-40 rounded-xl object-cover shadow-inner group-hover:scale-105 transition-transform duration-300" />
            </div>
            
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight bg-gradient-to-r from-white via-slate-200 to-slate-400 bg-clip-text text-transparent">
                Studio5 Auto Detailing
            </h1>
            <p class="text-lg md:text-xl text-rose-400 font-medium tracking-wide uppercase">
                & Ceramic Coating Services
            </p>
            <p class="max-w-xl mx-auto text-sm md:text-base text-slate-400 leading-relaxed">
                “We go beyond the surface, bringing out the brilliance of your vehicle and restoring it to showroom perfection.”
            </p>
        </div>

        <!-- Technical Stack Verification Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
            <div class="p-4 rounded-xl border border-slate-800 bg-slate-900/60 backdrop-blur">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Framework</span>
                    <span class="px-2 py-0.5 text-[10px] font-bold rounded bg-rose-500/20 text-rose-400">READY</span>
                </div>
                <div class="text-lg font-bold text-white">Laravel {{ app()->version() }}</div>
                <p class="text-xs text-slate-400 mt-1">PHP {{ phpversion() }} server runtime</p>
            </div>

            <div class="p-4 rounded-xl border border-slate-800 bg-slate-900/60 backdrop-blur">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Styling</span>
                    <span class="px-2 py-0.5 text-[10px] font-bold rounded bg-emerald-500/20 text-emerald-400">ACTIVE</span>
                </div>
                <div class="text-lg font-bold text-white">Tailwind CSS v4</div>
                <p class="text-xs text-slate-400 mt-1">Responsive utility classes & Grid</p>
            </div>

            <div class="p-4 rounded-xl border border-slate-800 bg-slate-900/60 backdrop-blur">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Bundler</span>
                    <span class="px-2 py-0.5 text-[10px] font-bold rounded bg-amber-500/20 text-amber-400">COMPILED</span>
                </div>
                <div class="text-lg font-bold text-white">Vite 8 + HMR</div>
                <p class="text-xs text-slate-400 mt-1">Fast asset pipeline with live refresh</p>
            </div>
        </div>

        <!-- Scaffolding Checklist / Architecture Roadmap -->
        <div class="p-6 rounded-2xl border border-slate-800 bg-slate-900/40 backdrop-blur text-left space-y-4">
            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-300 flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Component Architecture Checklist (ITST 302 Week 5)
            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-xs text-slate-400">
                <div class="flex items-center gap-2 p-2 rounded bg-slate-950/60 border border-slate-800/80">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 1. Navbar
                </div>
                <div class="flex items-center gap-2 p-2 rounded bg-slate-950/60 border border-slate-800/80">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 2. Hero Section
                </div>
                <div class="flex items-center gap-2 p-2 rounded bg-slate-950/60 border border-slate-800/80">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 3. 6 Features
                </div>
                <div class="flex items-center gap-2 p-2 rounded bg-slate-950/60 border border-slate-800/80">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 4. Showcase
                </div>
                <div class="flex items-center gap-2 p-2 rounded bg-slate-950/60 border border-slate-800/80">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 5. 3 Pricing Plans
                </div>
                <div class="flex items-center gap-2 p-2 rounded bg-slate-950/60 border border-slate-800/80">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 6. Testimonials
                </div>
                <div class="flex items-center gap-2 p-2 rounded bg-slate-950/60 border border-slate-800/80">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 7. CTA Section
                </div>
                <div class="flex items-center gap-2 p-2 rounded bg-slate-950/60 border border-slate-800/80">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 8. Footer
                </div>
            </div>
        </div>

        <!-- Footer status -->
        <p class="text-xs text-slate-400">
            Initial scaffold ready for GitHub push &bull; Ready for Blade Component development
        </p>
    </div>
</main>
@endsection
