<x-layouts.app>
    
    <!-- Top Fixed Navigation Bar -->
    <header 
        x-data="{ scrolled: false, mobileOpen: false }"
        @scroll.window="scrolled = (window.pageYOffset > 40)"
        :class="scrolled ? 'glass-nav shadow-xs py-3.5 border-b border-[#E8DCCF]/70' : 'bg-transparent py-5'"
        class="fixed top-0 inset-x-0 z-40 transition-all duration-300"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            
            <!-- Brand Logo -->
            <a href="#" class="flex items-center gap-2.5 group">
                <img 
                    src="{{ asset('images/brand-logo.jpg') }}" 
                    alt="April Chiao" 
                    width="28"
                    height="28"
                    class="w-7 h-7 rounded-full object-cover border border-[#C8AA82]/70 group-hover:scale-105 transition duration-300 shadow-2xs shrink-0"
                >
                <div class="flex flex-col">
                    <span class="text-base sm:text-lg font-serif-luxury font-medium tracking-wide text-[#231E1B] group-hover:text-[#B38F60] transition">
                        April Chiao
                    </span>
                    <span class="text-[10px] tracking-widest uppercase text-[#9C8F87] font-light -mt-0.5">
                        Hotel & Travel UGC • @bnb_chiao
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-xs font-medium tracking-widest uppercase text-[#70645D]">
                <a href="#about" class="hover:text-[#231E1B] transition hover:-translate-y-0.5 transform duration-200">About</a>
                <a href="#portfolio" class="hover:text-[#231E1B] transition hover:-translate-y-0.5 transform duration-200">Curated Stays</a>
                <a href="#mediakit" class="hover:text-[#231E1B] transition hover:-translate-y-0.5 transform duration-200">Media Kit</a>
                <a href="#services" class="hover:text-[#231E1B] transition hover:-translate-y-0.5 transform duration-200">Services</a>
                <a href="#contact" class="hover:text-[#231E1B] transition hover:-translate-y-0.5 transform duration-200">Contact</a>
            </nav>

            <!-- Right Actions -->
            <div class="hidden sm:flex items-center gap-3">
                <a 
                    href="https://www.instagram.com/bnb_chiao" 
                    target="_blank" 
                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white/80 border border-[#E8DCCF] text-[#70645D] hover:text-[#231E1B] hover:bg-white text-xs font-medium transition shadow-2xs"
                >
                    <svg class="w-3.5 h-3.5 text-[#C28274]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    <span>Follow IG</span>
                </a>

                <a 
                    href="#contact" 
                    class="px-4 py-2 rounded-full bg-[#231E1B] text-[#FAF6F0] hover:bg-[#3A322E] text-xs font-medium tracking-wider transition shadow-xs cursor-pointer"
                >
                    Work with April
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button 
                @click="mobileOpen = !mobileOpen"
                class="md:hidden p-2 rounded-lg text-[#231E1B] hover:bg-black/5"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Drawer -->
        <div 
            x-show="mobileOpen" 
            x-cloak
            @click.outside="mobileOpen = false"
            class="md:hidden glass-nav border-b border-[#E8DCCF] px-6 py-6 space-y-4 shadow-lg animate-fade-in"
        >
            <a @click="mobileOpen = false" href="#about" class="block text-sm font-medium text-[#231E1B] py-1">About</a>
            <a @click="mobileOpen = false" href="#portfolio" class="block text-sm font-medium text-[#231E1B] py-1">Curated Stays</a>
            <a @click="mobileOpen = false" href="#mediakit" class="block text-sm font-medium text-[#231E1B] py-1">Media Kit</a>
            <a @click="mobileOpen = false" href="#services" class="block text-sm font-medium text-[#231E1B] py-1">Services</a>
            <a @click="mobileOpen = false" href="#contact" class="block text-sm font-medium text-[#B38F60] font-semibold py-1">Inquire for Collaboration</a>
            
            <div class="pt-4 border-t border-[#E8DCCF] flex items-center gap-3">
                <a href="https://www.instagram.com/bnb_chiao" target="_blank" class="text-xs text-[#70645D] flex items-center gap-1.5">
                    <span>Instagram: @bnb_chiao</span>
                </a>
            </div>
        </div>
    </header>


    <!-- HERO SECTION (Refined from Canva Draft) -->
    <section class="relative min-h-[92vh] lg:min-h-screen flex items-center justify-center pt-24 pb-16 px-4 sm:px-6 lg:px-8 overflow-hidden">
        
        <!-- Hero Background Image with Scrim Gradient -->
        <div class="absolute inset-0 z-0">
            <img 
                src="{{ asset('images/hero-suite.png') }}" 
                alt="Luxury Suite Ocean View" 
                class="w-full h-full object-cover object-center"
            >
            <!-- Refined scrim overlay to fix Canva legibility issue -->
            <div class="absolute inset-0 bg-gradient-to-r from-[#181412]/85 via-[#181412]/60 to-[#181412]/30 sm:to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#181412]/90 via-transparent to-[#181412]/40"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left Editorial Text Content -->
            <div class="lg:col-span-8 text-white space-y-6">
                
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/15 backdrop-blur-md border border-white/20 text-[#FAF6F0] text-xs font-medium tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-[#B38F60] animate-pulse"></span>
                    <span>BNB_CHIAO • HOTEL & TRAVEL UGC CREATOR</span>
                </div>

                <!-- Main Name Headline -->
                <div>
                    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-serif-luxury font-normal tracking-tight text-white leading-[1.08]">
                        April Chiao
                    </h1>
                    <p class="text-xl sm:text-2xl lg:text-3xl font-serif-luxury italic text-[#FAF6F0]/90 font-light mt-2">
                        Capturing the Essence of Effortless Luxury
                    </p>
                </div>

                <!-- Media Kit Sub-Header -->
                <div class="text-xs sm:text-sm font-medium tracking-widest text-[#E6C5BA] uppercase flex flex-wrap items-center gap-2 pt-1 border-t border-white/20">
                    <span>HOTEL & TRAVEL UGC CREATOR</span>
                    <span class="text-white/40">|</span>
                    <span>MEDIA KIT 2026</span>
                    <span class="text-white/40">•</span>
                    <span>Based in Taiwan | Available Worldwide</span>
                </div>

                <!-- Bio Card (Canva slide 2 layout with elevated aesthetic) -->
                <div class="glass-dark rounded-2xl p-5 sm:p-6 max-w-2xl flex flex-col sm:flex-row items-center sm:items-start gap-4 sm:gap-5 shadow-xl">
                    <div class="relative shrink-0">
                        <img 
                            src="{{ asset('images/april-avatar.jpg') }}" 
                            alt="April Chiao" 
                            class="w-20 h-20 sm:w-24 sm:h-24 rounded-full object-cover border-2 border-[#C8AA82] shadow-md"
                        >
                        <span class="absolute bottom-1 right-1 w-4 h-4 rounded-full bg-emerald-500 border-2 border-[#181412]"></span>
                    </div>
                    <div class="text-center sm:text-left">
                        <p class="text-xs sm:text-sm text-[#FAF6F0] font-light leading-relaxed">
                            Hey! I'm April Chiao — turning luxury stays and lifestyle products into cinematic stories. I bypass traditional ads to create organic, aesthetic visuals that connect with audiences and get people booking.
                        </p>
                        <p class="text-[11px] text-[#E6C5BA] font-light mt-2">
                            Specializing in boutique design villas, five-star resorts, and slow-living travel aesthetics.
                        </p>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a 
                        href="#contact" 
                        class="px-8 py-3.5 rounded-full bg-[#FAF6F0] text-[#231E1B] hover:bg-[#F8EDE8] text-xs sm:text-sm font-semibold tracking-widest uppercase transition-all duration-300 shadow-lg hover:scale-[1.02] cursor-pointer"
                    >
                        CONTACT APRIL
                    </a>
                    
                    <a 
                        href="#portfolio" 
                        class="px-8 py-3.5 rounded-full bg-transparent hover:bg-white/10 text-white border border-white/60 text-xs sm:text-sm font-semibold tracking-widest uppercase transition duration-300 backdrop-blur-xs cursor-pointer"
                    >
                        EXPLORE THE WORK
                    </a>
                </div>

            </div>

            <!-- Right Floating Stat Pill on Desktop -->
            <div class="hidden lg:flex lg:col-span-4 justify-end">
                <div class="glass-dark rounded-3xl p-6 text-white max-w-xs w-full space-y-4 shadow-2xl border border-white/20">
                    <div class="flex items-center justify-between pb-3 border-b border-white/15">
                        <span class="text-xs uppercase tracking-wider text-[#E6C5BA]">Instagram</span>
                        <span class="text-xs font-semibold px-2 py-0.5 rounded-full bg-[#C28274]/40 text-white">@bnb_chiao</span>
                    </div>
                    <div class="space-y-3 text-xs font-light">
                        <div class="flex justify-between">
                            <span class="text-white/70">Curated Stays Reviewed</span>
                            <span class="font-semibold text-white">120+ Stays</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-white/70">Engagement Rate</span>
                            <span class="font-semibold text-[#E6C5BA]">8.4% (3x Industry Avg)</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-white/70">Top Reel Impressions</span>
                            <span class="font-semibold text-white">520K+ Views</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-white/70">Female Audience</span>
                            <span class="font-semibold text-white">68% (High Intent)</span>
                        </div>
                    </div>
                    <a 
                        href="https://www.instagram.com/bnb_chiao" 
                        target="_blank"
                        class="block text-center py-2.5 rounded-xl bg-white/20 hover:bg-white/30 text-white text-xs font-medium transition"
                    >
                        Visit Instagram Profile ➔
                    </a>
                </div>
            </div>

        </div>

    </section>


    <!-- KEY METRICS & SOCIAL PROOF STRIP -->
    <section class="bg-[#FAF6F0] py-12 border-b border-[#E8DCCF]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                
                <div class="p-4 rounded-2xl bg-white/60 border border-[#E8DCCF]/50 shadow-2xs">
                    <p class="text-3xl sm:text-4xl font-serif-luxury font-medium text-[#231E1B]">68K+</p>
                    <p class="text-xs text-[#70645D] font-light mt-1 tracking-wider uppercase">Engaged Followers</p>
                    <p class="text-[10px] text-[#9C8F87]">Discerning Travelers</p>
                </div>

                <div class="p-4 rounded-2xl bg-white/60 border border-[#E8DCCF]/50 shadow-2xs">
                    <p class="text-3xl sm:text-4xl font-serif-luxury font-medium text-[#B38F60]">8.4%</p>
                    <p class="text-xs text-[#70645D] font-light mt-1 tracking-wider uppercase">Engagement Rate</p>
                    <p class="text-[10px] text-[#9C8F87]">3x Industry Benchmark</p>
                </div>

                <div class="p-4 rounded-2xl bg-white/60 border border-[#E8DCCF]/50 shadow-2xs">
                    <p class="text-3xl sm:text-4xl font-serif-luxury font-medium text-[#231E1B]">120+</p>
                    <p class="text-xs text-[#70645D] font-light mt-1 tracking-wider uppercase">Properties Reviewed</p>
                    <p class="text-[10px] text-[#9C8F87]">Boutique & Luxury Stays</p>
                </div>

                <div class="p-4 rounded-2xl bg-white/60 border border-[#E8DCCF]/50 shadow-2xs">
                    <p class="text-3xl sm:text-4xl font-serif-luxury font-medium text-[#B38F60]">2.5M+</p>
                    <p class="text-xs text-[#70645D] font-light mt-1 tracking-wider uppercase">Monthly Impressions</p>
                    <p class="text-[10px] text-[#9C8F87]">High-Quality Organic Reach</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT SECTION: April Chiao & Story -->
    <section id="about" class="py-20 lg:py-28 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Image Collage -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-[#F3ECE1] aspect-[3/4]">
                    <img 
                        src="{{ asset('images/april-avatar.jpg') }}" 
                        alt="April Chiao" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <span class="text-xs tracking-widest uppercase text-[#E6C5BA]">About April</span>
                        <h3 class="text-2xl font-serif-luxury">April Chiao</h3>
                        <p class="text-xs text-white/80 font-light mt-1">
                            Blending Taiwanese warmth with French slow-living aesthetics to redefine luxury hospitality storytelling.
                        </p>
                    </div>
                </div>

                <!-- Floating Accent Card -->
                <div class="absolute -bottom-6 -right-6 sm:bottom-6 sm:-right-6 glass-card rounded-2xl p-4 sm:p-5 max-w-xs shadow-xl hidden sm:block">
                    <p class="text-xs font-serif-luxury italic text-[#231E1B] leading-snug">
                        "Travel isn't about ticking boxes, but immersing yourself in the light, texture, and soul of every space."
                    </p>
                    <p class="text-[10px] tracking-wider uppercase text-[#B38F60] font-semibold mt-2">— April Chiao</p>
                </div>
            </div>

            <!-- Right Content -->
            <div class="lg:col-span-7 space-y-6">
                <span class="text-xs uppercase tracking-[0.25em] font-semibold text-[#B38F60] bg-[#F8EDE8] px-4 py-1.5 rounded-full border border-[#E6C5BA]/50 inline-block">
                    The Story & Philosophy
                </span>
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif-luxury font-normal text-[#231E1B] tracking-tight leading-tight">
                    More than a review — a visual dialogue on elevated living
                </h2>

                <p class="text-base sm:text-lg text-[#70645D] font-light leading-relaxed">
                    April Chiao is one of Asia's most prominent luxury stay and aesthetic travel content creators. Managing <strong class="text-[#231E1B]">@bnb_chiao</strong> on Instagram and Facebook, she curates exceptional boutique hotels, architectural villas, and secluded retreats across Taiwan and worldwide.
                </p>

                <p class="text-sm sm:text-base text-[#70645D] font-light leading-relaxed">
                    Living alongside her French husband, April brings a unique cross-cultural sensibility that harmonizes modern minimalism with romantic French flair. Bypassing forced advertisements, she turns design nuances, spatial rhythm, and natural sunlight into cinematic short-form Reels that captivate high-spending travel enthusiasts.
                </p>

                <!-- 3 Feature Pillars -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4">
                    <div class="p-4 rounded-xl bg-white border border-[#E8DCCF]">
                        <span class="text-xl">🎬</span>
                        <h4 class="text-sm font-semibold text-[#231E1B] mt-2 mb-1">Cinematic Storytelling</h4>
                        <p class="text-xs text-[#70645D] font-light">Cinema-grade framing, color grading, and evocative sound design.</p>
                    </div>

                    <div class="p-4 rounded-xl bg-white border border-[#E8DCCF]">
                        <span class="text-xl">✨</span>
                        <h4 class="text-sm font-semibold text-[#231E1B] mt-2 mb-1">Organic Conversion</h4>
                        <p class="text-xs text-[#70645D] font-light">Trusted community recommendations that inspire direct room bookings.</p>
                    </div>

                    <div class="p-4 rounded-xl bg-white border border-[#E8DCCF]">
                        <span class="text-xl">💎</span>
                        <h4 class="text-sm font-semibold text-[#231E1B] mt-2 mb-1">UGC Commercial Rights</h4>
                        <p class="text-xs text-[#70645D] font-light">High-resolution photography and video assets licensed for ad campaigns.</p>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="#portfolio" class="inline-flex items-center gap-2 text-xs font-semibold tracking-wider text-[#231E1B] hover:text-[#B38F60] transition cursor-pointer">
                        <span>Explore Featured Stay Reviews</span>
                        <span class="text-sm">➔</span>
                    </a>
                </div>

            </div>

        </div>
    </section>


    <!-- PORTFOLIO / STAYS CATALOG (Interactive Livewire Component) -->
    <livewire:stay-catalog />


    <!-- MEDIA KIT & AUDIENCE INSIGHTS SECTION -->
    <section id="mediakit" class="bg-[#F8EDE8]/50 py-20 lg:py-28 border-y border-[#E8DCCF]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs uppercase tracking-[0.25em] font-semibold text-[#B38F60] bg-white px-4 py-1.5 rounded-full border border-[#E6C5BA]/50 inline-block mb-4">
                    Audience Demographics & Media Kit
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif-luxury font-normal text-[#231E1B] tracking-tight mb-4">
                    Audience Insights & Creator Reach
                </h2>
                <p class="text-base sm:text-lg text-[#70645D] font-light leading-relaxed">
                    A highly engaged audience with genuine passion for boutique hospitality, design stays, and luxury travel experiences.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Card 1: Demographics -->
                <div class="bg-white rounded-2xl p-8 border border-[#E8DCCF] shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-full bg-[#FAF6F0] flex items-center justify-center text-lg mb-4">
                            👥
                        </div>
                        <h3 class="text-xl font-serif-luxury font-medium text-[#231E1B] mb-2">
                            Age & Gender Breakdown
                        </h3>
                        <p class="text-xs text-[#70645D] font-light mb-6">
                            Core demographic comprises 22–40 year old urban professionals, couples, and lifestyle travelers.
                        </p>
                        
                        <div class="space-y-4 text-xs">
                            <div>
                                <div class="flex justify-between font-medium text-[#231E1B] mb-1">
                                    <span>Female Audience</span>
                                    <span class="text-[#B38F60]">68%</span>
                                </div>
                                <div class="w-full h-2 bg-[#FAF6F0] rounded-full overflow-hidden">
                                    <div class="bg-[#C28274] h-full rounded-full" style="width: 68%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between font-medium text-[#231E1B] mb-1">
                                    <span>Male Audience</span>
                                    <span class="text-[#70645D]">32%</span>
                                </div>
                                <div class="w-full h-2 bg-[#FAF6F0] rounded-full overflow-hidden">
                                    <div class="bg-[#B38F60] h-full rounded-full" style="width: 32%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between font-medium text-[#231E1B] mb-1">
                                    <span>Core Age Group (22–38)</span>
                                    <span class="text-[#B38F60]">82%</span>
                                </div>
                                <div class="w-full h-2 bg-[#FAF6F0] rounded-full overflow-hidden">
                                    <div class="bg-[#231E1B] h-full rounded-full" style="width: 82%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-[#FAF6F0] text-[11px] text-[#9C8F87]">
                        Source: Instagram Verified Insights 2026
                    </div>
                </div>

                <!-- Card 2: Geographic & Interest -->
                <div class="bg-white rounded-2xl p-8 border border-[#E8DCCF] shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-full bg-[#FAF6F0] flex items-center justify-center text-lg mb-4">
                            📍
                        </div>
                        <h3 class="text-xl font-serif-luxury font-medium text-[#231E1B] mb-2">
                            Geography & Preferences
                        </h3>
                        <p class="text-xs text-[#70645D] font-light mb-6">
                            Concentrated in major metropolitan hubs, alongside overseas travelers and global design enthusiasts.
                        </p>

                        <ul class="space-y-3 text-xs text-[#70645D]">
                            <li class="flex items-center justify-between pb-2 border-b border-[#F3ECE1]">
                                <span>Metropolitan Urban Hubs</span>
                                <span class="font-semibold text-[#231E1B]">74%</span>
                            </li>
                            <li class="flex items-center justify-between pb-2 border-b border-[#F3ECE1]">
                                <span>International & Regional Travelers</span>
                                <span class="font-semibold text-[#231E1B]">18%</span>
                            </li>
                            <li class="flex items-center justify-between pb-2 border-b border-[#F3ECE1]">
                                <span>Boutique Villa & Luxury Intent</span>
                                <span class="font-semibold text-[#B38F60]">Very High</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>Fine Dining & Lifestyle Spending</span>
                                <span class="font-semibold text-[#B38F60]">High Conversion</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6 pt-4 border-t border-[#FAF6F0] text-[11px] text-[#9C8F87]">
                        Independent decision-makers with high travel budget
                    </div>
                </div>

                <!-- Card 3: Multi-Platform Ecosystem -->
                <div class="bg-white rounded-2xl p-8 border border-[#E8DCCF] shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-full bg-[#FAF6F0] flex items-center justify-center text-lg mb-4">
                            🌐
                        </div>
                        <h3 class="text-xl font-serif-luxury font-medium text-[#231E1B] mb-2">
                            Multi-Platform Ecosystem
                        </h3>
                        <p class="text-xs text-[#70645D] font-light mb-6">
                            Reaching travelers across Instagram, Facebook, and exclusive VIP community groups.
                        </p>

                        <div class="space-y-3 text-xs">
                            <div class="p-3 rounded-xl bg-[#FAF6F0] flex items-center justify-between">
                                <div>
                                    <p class="font-semibold text-[#231E1B]">Instagram @bnb_chiao</p>
                                    <p class="text-[10px] text-[#9C8F87]">Primary channel: Reels & Daily Stories</p>
                                </div>
                                <span class="text-xs font-bold text-[#B38F60]">68K+</span>
                            </div>

                            <div class="p-3 rounded-xl bg-[#FAF6F0] flex items-center justify-between">
                                <div>
                                    <p class="font-semibold text-[#231E1B]">Facebook April Chiao</p>
                                    <p class="text-[10px] text-[#9C8F87]">In-depth articles & travel guides</p>
                                </div>
                                <span class="text-xs font-bold text-[#B38F60]">32K+</span>
                            </div>

                            <div class="p-3 rounded-xl bg-[#FAF6F0] flex items-center justify-between">
                                <div>
                                    <p class="font-semibold text-[#231E1B]">VIP Travel Community</p>
                                    <p class="text-[10px] text-[#9C8F87]">Exclusive curated deals & secret stays</p>
                                </div>
                                <span class="text-xs font-bold text-[#B38F60]">Active</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-[#FAF6F0] text-[11px] text-[#9C8F87]">
                        Cross-channel marketing & syndicated reach
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- SERVICES & COLLABORATION FORMATS -->
    <section id="services" class="py-20 lg:py-28 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-[#B38F60] bg-[#F8EDE8] px-4 py-1.5 rounded-full border border-[#E6C5BA]/50 inline-block mb-4">
                Services & Collaboration Packages
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif-luxury font-normal text-[#231E1B] tracking-tight mb-4">
                Tailored Partnership Formats
            </h2>
            <p class="text-base sm:text-lg text-[#70645D] font-light leading-relaxed">
                Customized campaigns designed to meet brand marketing objectives while delivering authentic visual allure.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Service 1 -->
            <div class="bg-white rounded-2xl p-6 border border-[#E8DCCF] hover:border-[#B38F60] hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <span class="text-xs font-mono text-[#B38F60] font-semibold">01</span>
                    <h3 class="text-lg font-serif-luxury font-medium text-[#231E1B] mt-2 mb-2 group-hover:text-[#B38F60] transition">
                        Hotel & Stay Experience Feature
                    </h3>
                    <p class="text-xs text-[#70645D] font-light leading-relaxed mb-4">
                        In-person stay review featuring 1 cinema-grade 4K Instagram Reel, real-time Story coverage, and curated still photography.
                    </p>
                </div>
                <div class="pt-4 border-t border-[#F3ECE1]">
                    <span class="text-[11px] text-[#B38F60] font-semibold">Best for: Luxury Hotels, Villas, Resorts</span>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="bg-white rounded-2xl p-6 border border-[#E8DCCF] hover:border-[#B38F60] hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <span class="text-xs font-mono text-[#B38F60] font-semibold">02</span>
                    <h3 class="text-lg font-serif-luxury font-medium text-[#231E1B] mt-2 mb-2 group-hover:text-[#B38F60] transition">
                        UGC Creation & Licensing
                    </h3>
                    <p class="text-xs text-[#70645D] font-light leading-relaxed mb-4">
                        Authentic user-generated video content produced specifically for hotel paid ads (Meta / TikTok) and digital marketing channels.
                    </p>
                </div>
                <div class="pt-4 border-t border-[#F3ECE1]">
                    <span class="text-[11px] text-[#B38F60] font-semibold">Best for: Performance Ads & Official Assets</span>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="bg-white rounded-2xl p-6 border border-[#E8DCCF] hover:border-[#B38F60] hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <span class="text-xs font-mono text-[#B38F60] font-semibold">03</span>
                    <h3 class="text-lg font-serif-luxury font-medium text-[#231E1B] mt-2 mb-2 group-hover:text-[#B38F60] transition">
                        Brand Placement & Lifestyle
                    </h3>
                    <p class="text-xs text-[#70645D] font-light leading-relaxed mb-4">
                        Natural integration of luxury lifestyle, beauty, fashion, luggage, and beverage brands into picturesque travel environments.
                    </p>
                </div>
                <div class="pt-4 border-t border-[#F3ECE1]">
                    <span class="text-[11px] text-[#B38F60] font-semibold">Best for: Fashion, Beauty, Travel Essentials</span>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="bg-white rounded-2xl p-6 border border-[#E8DCCF] hover:border-[#B38F60] hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <span class="text-xs font-mono text-[#B38F60] font-semibold">04</span>
                    <h3 class="text-lg font-serif-luxury font-medium text-[#231E1B] mt-2 mb-2 group-hover:text-[#B38F60] transition">
                        Exclusive Audience Campaigns
                    </h3>
                    <p class="text-xs text-[#70645D] font-light leading-relaxed mb-4">
                        Limited-time promotional packages and exclusive booking deals promoted across community channels for instant booking surges.
                    </p>
                </div>
                <div class="pt-4 border-t border-[#F3ECE1]">
                    <span class="text-[11px] text-[#B38F60] font-semibold">Best for: Off-Season Boosts & Launches</span>
                </div>
            </div>

        </div>

    </section>


    <!-- INSTAGRAM LIVE FEED / CURATED VISUALS -->
    <section class="bg-[#FAF6F0] py-16 px-4 sm:px-6 lg:px-8 border-t border-[#E8DCCF]">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-8">
                <div>
                    <span class="text-xs uppercase tracking-widest text-[#B38F60] font-semibold">Visual Journal</span>
                    <h3 class="text-2xl sm:text-3xl font-serif-luxury font-medium text-[#231E1B]">
                        Follow on Instagram @bnb_chiao
                    </h3>
                </div>
                <a 
                    href="https://www.instagram.com/bnb_chiao" 
                    target="_blank" 
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-[#E8DCCF] text-xs font-semibold text-[#231E1B] hover:bg-[#FAF6F0] hover:border-[#B38F60] transition shadow-2xs"
                >
                    <span>View Profile on Instagram</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <!-- 6-Photo Aesthetic Grid from Canva Media -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
                
                <a href="https://www.instagram.com/bnb_chiao" target="_blank" class="group relative aspect-square rounded-2xl overflow-hidden bg-[#F3ECE1] shadow-2xs">
                    <img src="{{ asset('images/stays/stay-2-luxury-pool.jpg') }}" alt="Pool Stay" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-xs font-medium">
                        <span>#PoolVilla</span>
                    </div>
                </a>

                <a href="https://www.instagram.com/bnb_chiao" target="_blank" class="group relative aspect-square rounded-2xl overflow-hidden bg-[#F3ECE1] shadow-2xs">
                    <img src="{{ asset('images/stays/stay-4-ocean-balcony.jpg') }}" alt="Ocean View" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-xs font-medium">
                        <span>#OceanSuite</span>
                    </div>
                </a>

                <a href="https://www.instagram.com/bnb_chiao" target="_blank" class="group relative aspect-square rounded-2xl overflow-hidden bg-[#F3ECE1] shadow-2xs">
                    <img src="{{ asset('images/stays/stay-3-aesthetic-bedroom.jpg') }}" alt="Aesthetic Bedroom" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-xs font-medium">
                        <span>#QuietLuxury</span>
                    </div>
                </a>

                <a href="https://www.instagram.com/bnb_chiao" target="_blank" class="group relative aspect-square rounded-2xl overflow-hidden bg-[#F3ECE1] shadow-2xs">
                    <img src="{{ asset('images/stays/stay-1-hotel-interior.jpg') }}" alt="Hotel Suite" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-xs font-medium">
                        <span>#HotelLiving</span>
                    </div>
                </a>

                <a href="https://www.instagram.com/bnb_chiao" target="_blank" class="group relative aspect-square rounded-2xl overflow-hidden bg-[#F3ECE1] shadow-2xs">
                    <img src="{{ asset('images/stays/stay-5-tropical-resort.jpg') }}" alt="Tropical Resort" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-xs font-medium">
                        <span>#TropicalVibes</span>
                    </div>
                </a>

                <a href="https://www.instagram.com/bnb_chiao" target="_blank" class="group relative aspect-square rounded-2xl overflow-hidden bg-[#F3ECE1] shadow-2xs">
                    <img src="{{ asset('images/stays/stay-6-luxury-lounge.jpg') }}" alt="Luxury Lounge" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-xs font-medium">
                        <span>#SkylineLounge</span>
                    </div>
                </a>

            </div>

        </div>
    </section>


    <!-- INTERACTIVE CONTACT FORM COMPONENT (Livewire Component) -->
    <livewire:contact-form />


    <!-- FOOTER -->
    <footer class="bg-[#181412] text-[#FAF6F0] pt-16 pb-12 px-4 sm:px-6 lg:px-8 border-t border-[#3A322E]">
        <div class="max-w-7xl mx-auto">
            
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-white/10">
                
                <!-- Col 1: Brand Info -->
                <div class="md:col-span-5 space-y-4">
                    <div class="flex items-center gap-3">
                        <img 
                            src="{{ asset('images/april-avatar.jpg') }}" 
                            alt="April Chiao" 
                            class="w-10 h-10 rounded-full object-cover border border-[#B38F60]"
                        >
                        <div>
                            <p class="text-lg font-serif-luxury font-medium text-white">April Chiao</p>
                            <p class="text-xs text-[#E6C5BA] font-light">Hotel & Travel UGC Creator</p>
                        </div>
                    </div>
                    <p class="text-xs text-white/70 font-light leading-relaxed max-w-sm">
                        Capturing the Essence of Effortless Luxury. Blending cinematic visual aesthetics and organic storytelling to elevate luxury hospitality properties worldwide.
                    </p>
                </div>

                <!-- Col 2: Navigation -->
                <div class="md:col-span-3 space-y-3 text-xs font-light text-white/80">
                    <p class="text-xs uppercase tracking-widest text-[#E6C5BA] font-semibold mb-3">Navigation</p>
                    <p><a href="#about" class="hover:text-white transition">About April</a></p>
                    <p><a href="#portfolio" class="hover:text-white transition">Curated Stays</a></p>
                    <p><a href="#mediakit" class="hover:text-white transition">Media Kit</a></p>
                    <p><a href="#services" class="hover:text-white transition">Services & Rates</a></p>
                    <p><a href="#contact" class="hover:text-white transition">Contact & Booking</a></p>
                </div>

                <!-- Col 3: Direct Contact -->
                <div class="md:col-span-4 space-y-3 text-xs font-light text-white/80">
                    <p class="text-xs uppercase tracking-widest text-[#E6C5BA] font-semibold mb-3">Get in Touch</p>
                    <p class="flex items-center gap-2">
                        <span class="text-[#E6C5BA]">Email:</span>
                        <a href="mailto:bnb.chiao@gmail.com" class="hover:text-white underline">bnb.chiao@gmail.com</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="text-[#E6C5BA]">Instagram:</span>
                        <a href="https://www.instagram.com/bnb_chiao" target="_blank" class="hover:text-white underline">@bnb_chiao</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="text-[#E6C5BA]">Facebook:</span>
                        <a href="https://www.facebook.com/bnb.chiao" target="_blank" class="hover:text-white underline">April Chiao</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="text-[#E6C5BA]">Base:</span>
                        <span>Taiwan • Available Worldwide</span>
                    </p>
                </div>

            </div>

            <!-- Copyright & Back to Top -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-white/50 font-light">
                <p>© {{ date('Y') }} April Chiao (@bnb_chiao). All rights reserved. Built with Laravel, Livewire & Tailwind CSS.</p>
                
                <a href="#" class="inline-flex items-center gap-1 hover:text-white transition">
                    <span>Back to top</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                </a>
            </div>

        </div>
    </footer>

</x-layouts.app>
