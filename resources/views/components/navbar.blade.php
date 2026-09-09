<header class="sticky top-0 z-50 w-full border-b border-zinc-200/80 bg-white/85 backdrop-blur-xl transition-all duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo & Name -->
            <a href="#home" class="flex items-center gap-3 group">
                <div class="relative w-11 h-11 rounded-xl overflow-hidden border border-zinc-200 bg-white p-0.5 shadow-sm group-hover:border-zinc-900 transition-colors">
                    <img src="{{ asset('images/studio5.jpg') }}" alt="Studio5 Logo" class="w-full h-full object-cover rounded-lg" />
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-1.5">
                        <span class="text-xl font-bold tracking-tight text-zinc-950 font-['Space_Grotesk',sans-serif]">STUDIO<span class="text-zinc-400">5</span></span>
                        <span class="text-[9px] px-1.5 py-0.5 rounded bg-zinc-100 text-zinc-800 font-bold border border-zinc-200 tracking-widest uppercase">AUTO</span>
                    </div>
                    <span class="text-[10px] tracking-wider text-zinc-500 font-medium uppercase -mt-0.5">Detailing & Ceramic Coating</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-sm font-medium text-zinc-600 hover:text-black transition-colors">Home</a>
                <a href="#features" class="text-sm font-medium text-zinc-600 hover:text-black transition-colors">Features</a>
                <a href="#showcase" class="text-sm font-medium text-zinc-600 hover:text-black transition-colors">Showcase</a>
                <a href="#pricing" class="text-sm font-medium text-zinc-600 hover:text-black transition-colors">Pricing</a>
                <a href="#testimonials" class="text-sm font-medium text-zinc-600 hover:text-black transition-colors">Testimonials</a>
                <a href="#contact" class="text-sm font-medium text-zinc-600 hover:text-black transition-colors">Contact</a>
            </nav>

            <!-- Action Buttons (Desktop) -->
            <div class="hidden md:flex items-center gap-3">
                <x-button href="#contact" variant="ghost" size="sm">
                    Sign In
                </x-button>
                <x-button href="#pricing" variant="primary" size="sm">
                    <span>Get Started</span>
                    <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </x-button>
            </div>

            <!-- Mobile Hamburger Menu Button -->
            <div class="flex md:hidden">
                <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-zinc-700 hover:text-black hover:bg-zinc-100 focus:outline-none focus:ring-2 focus:ring-zinc-950" aria-label="Toggle navigation menu">
                    <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Dropdown Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-b border-zinc-200 bg-white/98 px-4 pt-2 pb-6 space-y-3 backdrop-blur-2xl">
        <div class="flex flex-col space-y-2 pt-2">
            <a href="#home" class="mobile-nav-link px-3 py-2 rounded-md text-base font-medium text-zinc-800 hover:bg-zinc-100 hover:text-black">Home</a>
            <a href="#features" class="mobile-nav-link px-3 py-2 rounded-md text-base font-medium text-zinc-800 hover:bg-zinc-100 hover:text-black">Features</a>
            <a href="#showcase" class="mobile-nav-link px-3 py-2 rounded-md text-base font-medium text-zinc-800 hover:bg-zinc-100 hover:text-black">Showcase</a>
            <a href="#pricing" class="mobile-nav-link px-3 py-2 rounded-md text-base font-medium text-zinc-800 hover:bg-zinc-100 hover:text-black">Pricing</a>
            <a href="#testimonials" class="mobile-nav-link px-3 py-2 rounded-md text-base font-medium text-zinc-800 hover:bg-zinc-100 hover:text-black">Testimonials</a>
            <a href="#contact" class="mobile-nav-link px-3 py-2 rounded-md text-base font-medium text-zinc-800 hover:bg-zinc-100 hover:text-black">Contact</a>
        </div>
        <div class="pt-4 border-t border-zinc-200 flex flex-col gap-2.5">
            <x-button href="#contact" variant="outline" size="md" class="w-full justify-center">
                Sign In
            </x-button>
            <x-button href="#pricing" variant="primary" size="md" class="w-full justify-center">
                Get Started
            </x-button>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');

        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });
        }
    });
</script>
