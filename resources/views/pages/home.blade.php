@extends('layouts.app')

@section('title', 'Studio5 Auto Detailing & Ceramic Coating | Showroom Perfection')

@section('content')
    <!-- Global Scroll-Driven 3D McLaren Traveler (Non-Interactive, Locked to Scroll, Zero-Clipping Canvas) -->
    <div id="mclaren-traveler-container" class="fixed top-0 left-0 z-10 pointer-events-none transition-opacity duration-500 will-change-transform opacity-0 select-none overflow-visible">
        <model-viewer
            id="mclaren-traveler"
            src="{{ asset('models/mclaren.glb') }}"
            alt="3D McLaren Sports Car Model"
            interaction-prompt="none"
            camera-orbit="90deg 76deg 102%"
            bounds="tight"
            field-of-view="auto"
            shadow-intensity="1.5"
            shadow-softness="0.8"
            exposure="1.05"
            loading="eager"
            class="w-full h-full pointer-events-none"
            style="width: 100%; height: 100%; outline: none; background: transparent; pointer-events: none; overflow: visible;">
        </model-viewer>
    </div>

    <!-- 1. Navigation Bar Component -->
    <x-navbar />

    <main class="flex-grow">
        <!-- 2. Hero Section Component (Station 1: Centered directly above "Surface Perfection", Side View) -->
        <x-hero />

        <!-- 3. Features Section (Station 2: Six Pillars with Top Portrait View) -->
        <section id="features" class="relative py-24 bg-white border-t border-zinc-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
                
                <div class="text-center max-w-3xl mx-auto space-y-3 mb-6 relative z-20">
                    <span class="text-xs font-bold uppercase tracking-[0.25em] text-zinc-500 font-mono">Master Craftsmanship</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-zinc-950 tracking-tight font-['Space_Grotesk',sans-serif]">
                        Six Pillars of Studio5 Protection
                    </h2>
                    <p class="text-zinc-600 text-sm sm:text-base leading-relaxed font-normal">
                        Every vehicle entering our studio receives surgical attention to detail, utilizing world-class ceramic nano-compounds and precision optical measurement.
                    </p>
                </div>

                <!-- Station 2 Anchor: Hood-Only Peek (Tucked right above the 6-box grid; only front hood & headlights peek out while body/rear is covered by cards) -->
                <div class="relative w-full max-w-xl mx-auto flex items-center justify-center pointer-events-none select-none mt-36 sm:mt-40 -mb-24 sm:-mb-28">
                    <div id="car-anchor-features" class="w-full h-[120px] sm:h-[140px] pointer-events-none select-none">
                        <!-- Spatial anchor positioned so center of car is right behind the top border of the cards -->
                    </div>
                </div>

                <!-- 6 Features Grid (z-20 solid white cards covering car body and rear) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 relative z-20 pt-4">
                    
                    <!-- Feature 1: 9H Nano-Ceramic Coating -->
                    <x-feature-card 
                        title="9H Diamond Nano-Ceramic" 
                        description="Permanent molecular bonding creates an ultra-dense, glass-like quartz matrix shielding against acid rain, UV oxidation, bird droppings, and light scratches."
                        badge="Flagship">
                        <x-slot:icon>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </x-slot:icon>
                    </x-feature-card>

                    <!-- Feature 2: Multi-Stage Paint Correction -->
                    <x-feature-card 
                        title="Multi-Stage Paint Correction" 
                        description="Specialized rotary and dual-action micro-abrasion compounds safely eliminate 90%+ of swirls, scratches, spider webbing, and factory orange peel."
                        badge="Restoration">
                        <x-slot:icon>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </x-slot:icon>
                    </x-feature-card>

                    <!-- Feature 3: Deep Interior Steam & Sanitization -->
                    <x-feature-card 
                        title="Deep Interior Steam & Sanitization" 
                        description="High-temperature pressurized dry steam lifts stubborn soil, kills 99.9% of bacteria, followed by matte pH-neutral leather conditioning and UV feeding."
                        badge="Hygiene">
                        <x-slot:icon>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </x-slot:icon>
                    </x-feature-card>

                    <!-- Feature 4: Hydrophobic Glass Shield -->
                    <x-feature-card 
                        title="Hydrophobic Glass Shield" 
                        description="Fluoropolymer repellent coating applied to all glass panes causes rainwater to bead and fly off effortlessly at highway speeds without wiper drag."
                        badge="Safety">
                        <x-slot:icon>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                        </x-slot:icon>
                    </x-feature-card>

                    <!-- Feature 5: Wheel Face & Caliper Armor -->
                    <x-feature-card 
                        title="Wheel & Brake Caliper Armor" 
                        description="Withstands extreme brake rotor temperatures up to 1200°F, repelling corrosive carbon-metallic brake dust and making wheel cleanups effortless."
                        badge="Thermal">
                        <x-slot:icon>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </x-slot:icon>
                    </x-feature-card>

                    <!-- Feature 6: Infrared Shortwave Curing -->
                    <x-feature-card 
                        title="Infrared Shortwave Curing" 
                        description="Shortwave infrared heat lamps penetrate through the ceramic substrate to bake each coat from the inside out, delivering maximum surface hardness."
                        badge="Precision">
                        <x-slot:icon>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </x-slot:icon>
                    </x-feature-card>

                </div>
            </div>
        </section>

        <!-- 4. Product Showcase Component (Station 3: Front View of Car Looking at Us) -->
        <x-car-showcase />

        <!-- 5. Pricing Section -->
        <section id="pricing" class="relative py-24 bg-white border-t border-zinc-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 space-y-16">
                
                <div class="text-center max-w-3xl mx-auto space-y-3">
                    <span class="text-xs font-bold uppercase tracking-[0.25em] text-zinc-500 font-mono">Transparent Investment</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-zinc-950 tracking-tight font-['Space_Grotesk',sans-serif]">
                        Tailored Ceramic Packages
                    </h2>
                    <p class="text-zinc-600 text-sm sm:text-base leading-relaxed font-normal">
                        Every package includes thorough vehicle decontamination, clay bar treatment, and surface preparation before application.
                    </p>
                </div>

                <!-- 3 Pricing Cards Grid (z-20 solid white cards) -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch relative z-20">
                    
                    <!-- Tier 1: Starter -->
                    <x-pricing-card 
                        name="Essential Care"
                        price="3,500"
                        duration="Single Session"
                        description="Ideal for seasonal maintenance, paint enhancement, and short-term paint slickness."
                        :features="[
                            'Full Exterior Snow Foam Decon Wash',
                            'Chemical Iron & Tar Fallout Removal',
                            'Clay Bar Mechanical Decontamination',
                            'Single-Stage Gloss Finishing Polish',
                            '6-Month Polymer Hydrophobic Sealant',
                            'Basic Interior Vacuum & Wipe-down'
                        ]"
                        ctaText="Book Essential Care"
                        ctaHref="#contact"
                    />

                    <!-- Tier 2: Professional (Most Popular) -->
                    <x-pricing-card 
                        name="Ceramic Pro 9H"
                        price="12,500"
                        duration="3-Year Protection"
                        :isPopular="true"
                        description="Our premier multi-year package designed to eliminate moderate swirl marks and establish true 9H ceramic defense."
                        :features="[
                            'Everything in Essential Care included',
                            'Two-Stage Precision Paint Correction (Swirl Removal)',
                            'Dual-Coat 9H Nano-Ceramic Body Coating',
                            'Hydrophobic Glass Treatment on All Windows',
                            'Ceramic Face Protection on Exterior Alloy Wheels',
                            'Deep Interior Steam & Antibacterial Sanitization',
                            '3-Year Studio5 Written Warranty & Guarantee'
                        ]"
                        ctaText="Select Ceramic Pro 9H"
                        ctaHref="#contact"
                    />

                    <!-- Tier 3: Enterprise / VIP -->
                    <x-pricing-card 
                        name="Showroom Diamond"
                        price="24,500"
                        duration="5-Year / Lifetime"
                        description="The ultimate concours-grade package offering zero-compromise protection for exotics, luxury sedans, and collectors."
                        :features="[
                            'Multi-Stage Showroom Paint Correction (98%+ Defect Removal)',
                            'Triple-Layer 9H Diamond Matrix Ceramic Application',
                            'Infrared Shortwave Lamp Curing for Hardest Crystallization',
                            'Full Wheel Offs: Caliper & Inner Barrel Ceramic Coating',
                            'Full Leather, Fabric & Trim Ceramic Hydro-Shield',
                            'Self-Healing Door Cup & Luggage Edge PPF Film',
                            'Free Bi-Annual Maintenance Inspection & Top-Coat'
                        ]"
                        ctaText="Reserve Diamond VIP"
                        ctaHref="#contact"
                    />

                </div>
            </div>
        </section>

        <!-- Station 4: Sandwiched Between Pricing Packages and Testimonials (Side View: Looking to the RIGHT) -->
        <section class="relative py-12 sm:py-16 bg-gradient-to-b from-white via-zinc-50/80 to-zinc-50/80 border-t border-zinc-200/80 overflow-hidden text-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
                <div class="text-center mb-3">
                    <span class="text-xs font-mono font-bold tracking-wider text-zinc-800 uppercase block">McLAREN 720S // SIDE PROJECTION (RIGHT FACING)</span>
                    <span class="text-[11px] text-zinc-500 font-mono">Aerodynamic Profile &bull; 9H Quartz Shield Sandwiched Spec</span>
                </div>
                <!-- Sandwiched 3D McLaren Anchor (Refined Scale) -->
                <div id="car-anchor-pricing-testimonials" class="relative w-full max-w-4xl mx-auto h-[220px] sm:h-[260px] md:h-[300px] flex items-center justify-center pointer-events-none select-none">
                    <!-- Spatial anchor reserved for 3D McLaren looking to the RIGHT -->
                </div>
            </div>
        </section>

        <!-- 6. Testimonials Section -->
        <section id="testimonials" class="relative py-24 bg-zinc-50/70 border-t border-zinc-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 space-y-16">
                
                <div class="text-center max-w-3xl mx-auto space-y-3">
                    <span class="text-xs font-bold uppercase tracking-[0.25em] text-zinc-500 font-mono">Real Customer Feedback</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-zinc-950 tracking-tight font-['Space_Grotesk',sans-serif]">
                        Words from Motorists We Protect
                    </h2>
                    <p class="text-zinc-600 text-sm sm:text-base leading-relaxed font-normal">
                        Read verified reviews from local car owners, performance drivers, and daily commuters who trusted Studio5 with their vehicles.
                    </p>
                </div>

                <!-- 3 Testimonials Grid (z-20 solid white cards) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 relative z-20">
                    
                    <x-testimonial-card 
                        name="Mark Ryan Mendoza"
                        position="BMW M3 Competition Owner"
                        review="The swirl marks and spiderwebbing on my black metallic paint were completely gone. Under direct sunlight, the optical clarity is stunning. Rain water literally flies off the hood without wipers."
                        stars="5"
                        serviceUsed="Ceramic Pro 9H"
                    />

                    <x-testimonial-card 
                        name="Sarah Katherine Lim"
                        position="Porsche Macan GTS Driver"
                        review="Studio5 transformed my SUV. The interior steam treatment restored the factory matte leather feel, and the ceramic coating made highway bug splatters wash off with a simple rinse."
                        stars="5"
                        serviceUsed="Showroom Diamond"
                    />

                    <x-testimonial-card 
                        name="Coach Dan Bautista"
                        position="Civic Type R (FL5) Enthusiast"
                        review="Hands down the best detailing studio in our community. Their infrared curing process gave the paint an unbelievable candy-gloss reflection. Worth every single peso!"
                        stars="5"
                        serviceUsed="Ceramic Pro 9H"
                    />

                </div>
            </div>
        </section>

        <!-- 7. Call-to-Action & Footer Section (Station 5: Looking to the LEFT: 90deg) -->
        <section class="relative py-24 bg-zinc-950 text-white overflow-hidden">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-center space-y-8">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-zinc-800 bg-zinc-900 text-xs font-semibold text-zinc-300">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                    <span>Studio5 Reservation &bull; Limited Monthly Slots</span>
                </div>

                <h2 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight leading-tight font-['Space_Grotesk',sans-serif]">
                    Ready to Restore Your Vehicle to <br class="hidden sm:inline" />
                    <span class="text-zinc-400">Showroom Perfection?</span>
                </h2>

                <p class="text-base sm:text-lg text-zinc-400 max-w-2xl mx-auto leading-relaxed font-normal">
                    Book your free in-person paint thickness inspection or reserve your ceramic coating slot today. Experience the difference of aerospace-grade nanotechnology.
                </p>

                <!-- Station 5 Anchor: Footer (Car rotates to look to the LEFT: 90deg, Refined Flat Scale) -->
                <div id="car-anchor-footer" class="relative w-full max-w-3xl mx-auto h-[200px] sm:h-[240px] md:h-[280px] flex items-center justify-center pointer-events-none select-none my-3">
                    <!-- Spatial anchor reserved for 3D McLaren looking to the LEFT -->
                </div>
                <div class="text-center -mt-2 mb-4">
                    <span class="text-xs font-mono font-bold tracking-wider text-zinc-400 uppercase block">McLAREN 720S // FINAL INSPECTION (LEFT FACING)</span>
                    <span class="text-[11px] text-zinc-500 font-mono">Full Molecular Crystallization Completed &bull; Ready for Release</span>
                </div>

                <!-- CTA Actions matching prompt -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2">
                    <x-button href="tel:09000000000" variant="outline" size="lg" class="w-full sm:w-auto text-white border-zinc-700 hover:bg-zinc-900 hover:border-white">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>Call (0900) 000 0000 (Direct Booking)</span>
                    </x-button>

                    <x-button href="#pricing" variant="secondary" size="lg" class="w-full sm:w-auto bg-white text-zinc-950 hover:bg-zinc-200">
                        <span>Register Inspection Slot</span>
                    </x-button>

                    <x-button href="#contact" variant="ghost" size="lg" class="w-full sm:w-auto text-zinc-400 hover:text-white hover:bg-zinc-900">
                        <span>Contact Service Advisor</span>
                    </x-button>
                </div>

                <!-- Guarantee Seal -->
                <div class="pt-6 flex flex-wrap items-center justify-center gap-6 text-xs text-zinc-400 font-mono">
                    <div class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>100% Satisfaction Guarantee</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Written Warranty Certificate</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- 8. Footer Component -->
    <x-footer />

    <!-- Pure Scroll-Driven 5-Station 3D McLaren Engine (Snappy Docking, Zero-Clipping, Precise Facing Directions) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('mclaren-traveler-container');
            const viewer = document.getElementById('mclaren-traveler');

            // 5 Station Anchors
            const a0 = document.getElementById('car-anchor-hero');
            const a1 = document.getElementById('car-anchor-features');
            const a2 = document.getElementById('car-anchor-showcase');
            const a3 = document.getElementById('car-anchor-pricing-testimonials');
            const a4 = document.getElementById('car-anchor-footer');

            if (!container || !viewer || !a0 || !a1 || !a2 || !a3 || !a4) return;

            // Wait until 3D model loads
            viewer.addEventListener('load', () => {
                container.classList.remove('opacity-0');
                container.classList.add('opacity-100');
                update5StationTrajectory();
            });

            // Snappy Hermite Quintic S-Curve: Docks stably at each station, snaps swiftly between them
            function snappyEase(t) {
                // Deadzone at ends (0-20% and 80-100%) so car stays nicely parked while reading
                if (t <= 0.20) return 0;
                if (t >= 0.80) return 1;
                const u = (t - 0.20) / 0.60;
                // Quintic smoothstep for smooth start/stop and fast middle transition
                return u * u * u * (u * (u * 6 - 15) + 10);
            }

            function lerp(a, b, t) {
                return (1 - t) * a + t * b;
            }

            // Shortest angle rotation helper
            function lerpAngle(start, end, t) {
                let diff = (end - start) % 360;
                if (diff < -180) diff += 360;
                if (diff > 180) diff -= 360;
                return start + diff * t;
            }

            function update5StationTrajectory() {
                const scrollY = window.scrollY;
                const viewH = window.innerHeight;
                const currentDocY = scrollY + viewH / 2;

                const r0 = a0.getBoundingClientRect();
                const r1 = a1.getBoundingClientRect();
                const r2 = a2.getBoundingClientRect();
                const r3 = a3.getBoundingClientRect();
                const r4 = a4.getBoundingClientRect();

                // Compute center (X, Y) milestones of all 5 anchors in screen and doc space
                const c0 = { x: r0.left + r0.width / 2, y: r0.top + r0.height / 2, docY: r0.top + scrollY + r0.height / 2, w: r0.width, h: r0.height };
                const c1 = { x: r1.left + r1.width / 2, y: r1.top + r1.height / 2, docY: r1.top + scrollY + r1.height / 2, w: r1.width, h: r1.height };
                const c2 = { x: r2.left + r2.width / 2, y: r2.top + r2.height / 2, docY: r2.top + scrollY + r2.height / 2, w: r2.width, h: r2.height };
                const c3 = { x: r3.left + r3.width / 2, y: r3.top + r3.height / 2, docY: r3.top + scrollY + r3.height / 2, w: r3.width, h: r3.height };
                const c4 = { x: r4.left + r4.width / 2, y: r4.top + r4.height / 2, docY: r4.top + scrollY + r4.height / 2, w: r4.width, h: r4.height };

                let currentCenterX = c0.x;
                let currentCenterY = c0.y;
                let currentW = c0.w;
                let currentH = c0.h;

                let theta = 90; // Default Hero: Side view (looking left)
                let phi = 76;   // Dynamic side tiltness restored per user request
                const radius = 102; // Guarantees complete bounding sphere fits inside canvas at all 360deg rotation angles with ZERO clipping

                if (currentDocY <= c0.docY) {
                    // At or before Hero: Side View (looking left, dynamic tilt)
                    currentCenterX = c0.x;
                    currentCenterY = c0.y;
                    currentW = c0.w;
                    currentH = c0.h;
                    theta = 90;
                    phi = 76;

                } else if (currentDocY <= c1.docY) {
                    // STAGE 1: Hero -> Six Pillars
                    // Orbit: 90deg (Tilted Side) -> 180deg (Portrait orientation), Phi: 76deg -> 12deg (Top-Down Portrait)
                    const rawP = Math.max(0, Math.min(1, (currentDocY - c0.docY) / (c1.docY - c0.docY)));
                    const p = snappyEase(rawP);

                    currentCenterX = lerp(c0.x, c1.x, p);
                    currentCenterY = lerp(c0.y, c1.y, p);
                    currentW = lerp(c0.w, c1.w, p);
                    currentH = lerp(c0.h, c1.h, p);

                    theta = lerp(90, 180, p);
                    phi = lerp(76, 12, p);

                } else if (currentDocY <= c2.docY) {
                    // STAGE 2: Six Pillars -> Showcase
                    // Orbit: 180deg (Top Portrait) -> 0deg (Front View looking at us!), Phi: 12deg -> 82deg (Eye-level Front)
                    const rawP = Math.max(0, Math.min(1, (currentDocY - c1.docY) / (c2.docY - c1.docY)));
                    const p = snappyEase(rawP);

                    currentCenterX = lerp(c1.x, c2.x, p);
                    currentCenterY = lerp(c1.y, c2.y, p);
                    currentW = lerp(c1.w, c2.w, p);
                    currentH = lerp(c1.h, c2.h, p);

                    theta = lerpAngle(180, 0, p);
                    phi = lerp(12, 82, p);

                } else if (currentDocY <= c3.docY) {
                    // STAGE 3: Showcase -> Sandwiched between Pricing & Reviews
                    // Required: First looking to the RIGHT! (-90deg is looking right, dynamic tilt phi 76deg)
                    const rawP = Math.max(0, Math.min(1, (currentDocY - c2.docY) / (c3.docY - c2.docY)));
                    const p = snappyEase(rawP);

                    currentCenterX = lerp(c2.x, c3.x, p);
                    currentCenterY = lerp(c2.y, c3.y, p);
                    currentW = lerp(c2.w, c3.w, p);
                    currentH = lerp(c2.h, c3.h, p);

                    // Shortest continuous rotation from 0deg (Front) to -90deg (Looking to the RIGHT, tilted side view)
                    theta = lerpAngle(0, -90, p);
                    phi = lerp(82, 76, p);

                } else if (currentDocY <= c4.docY) {
                    // STAGE 4: Sandwiched -> Footer
                    // Required: Rotate from looking to the RIGHT (-90deg) to looking to the LEFT (90deg)!
                    const rawP = Math.max(0, Math.min(1, (currentDocY - c3.docY) / (c4.docY - c3.docY)));
                    const p = snappyEase(rawP);

                    currentCenterX = lerp(c3.x, c4.x, p);
                    currentCenterY = lerp(c3.y, c4.y, p);
                    currentW = lerp(c3.w, c4.w, p);
                    currentH = lerp(c3.h, c4.h, p);

                    // Continuous rotation across from -90deg (Looking right) to 90deg (Looking left, tilted side view)
                    theta = lerpAngle(-90, 90, p);
                    phi = 76;

                } else {
                    // At or beyond Footer: Looking to the LEFT (90deg, tilted side view)
                    currentCenterX = c4.x;
                    currentCenterY = c4.y;
                    currentW = c4.w;
                    currentH = c4.h;
                    theta = 90;
                    phi = 76;
                }

                // Generous square stage centered exactly at (currentCenterX, currentCenterY)
                // Refined scale (~30% smaller, sleek and proportionate without clipping)
                const baseDim = Math.max(currentW, currentH);
                const stageDim = Math.min(window.innerWidth * 0.90, Math.max(baseDim * 0.88, 460));
                container.style.width = Math.round(stageDim) + 'px';
                container.style.height = Math.round(stageDim) + 'px';
                container.style.transform = `translate3d(${Math.round(currentCenterX - stageDim / 2)}px, ${Math.round(currentCenterY - stageDim / 2)}px, 0)`;

                // Update Camera Orbit smoothly
                viewer.cameraOrbit = `${theta.toFixed(1)}deg ${phi.toFixed(1)}deg ${radius}%`;
            }

            // High frequency scroll loop with requestAnimationFrame
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        update5StationTrajectory();
                        ticking = false;
                    });
                    ticking = true;
                }
            }, { passive: true });

            window.addEventListener('resize', () => {
                update5StationTrajectory();
            });

            // Initial triggers
            setTimeout(update5StationTrajectory, 100);
            setTimeout(update5StationTrajectory, 400);
        });
    </script>
@endsection
