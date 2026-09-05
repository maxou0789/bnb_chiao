<div 
    id="portfolio" 
    class="py-20 lg:py-28 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full select-none overflow-hidden"
    x-data="{
        activeIndex: 0,
        selectedStay: null,
        isDragging: false,
        dragStartX: 0,
        dragCurrentX: 0,
        dragOffset: 0,
        hasDragged: false,
        activeCategory: @entangle('activeCategory').live,
        stays: {{ json_encode($stays) }},
        categories: {
            'all': 'ALL WORK',
            'villa': 'BOUTIQUE VILLAS',
            'resort': 'LUXURY RESORTS',
            'ocean': 'OCEAN & NATURE'
        },
        get filteredStays() {
            if (this.activeCategory === 'all') return this.stays;
            return this.stays.filter(s => s.category === this.activeCategory);
        },
        next() {
            if (this.filteredStays.length === 0) return;
            this.activeIndex = (this.activeIndex + 1) % this.filteredStays.length;
        },
        prev() {
            if (this.filteredStays.length === 0) return;
            this.activeIndex = (this.activeIndex - 1 + this.filteredStays.length) % this.filteredStays.length;
        },
        goTo(index) {
            this.activeIndex = index;
        },
        startDrag(e) {
            this.isDragging = true;
            this.hasDragged = false;
            this.dragStartX = e.clientX ?? (e.touches && e.touches[0] ? e.touches[0].clientX : 0);
            this.dragCurrentX = this.dragStartX;
            this.dragOffset = 0;
        },
        onDrag(e) {
            if (!this.isDragging) return;
            this.dragCurrentX = e.clientX ?? (e.touches && e.touches[0] ? e.touches[0].clientX : 0);
            this.dragOffset = this.dragCurrentX - this.dragStartX;
            if (Math.abs(this.dragOffset) > 8) {
                this.hasDragged = true;
            }
        },
        endDrag() {
            if (!this.isDragging) return;
            this.isDragging = false;
            const threshold = 45;
            if (this.dragOffset < -threshold) {
                this.next();
            } else if (this.dragOffset > threshold) {
                this.prev();
            }
            this.dragOffset = 0;
            setTimeout(() => { this.hasDragged = false; }, 60);
        },
        getCardTransform(index) {
            const count = this.filteredStays.length;
            if (count === 0) return '';
            let diff = index - this.activeIndex;
            while (diff > count / 2) diff -= count;
            while (diff < -count / 2) diff += count;

            if (Math.abs(diff) > 2) {
                return 'transform: translateX(' + (diff > 0 ? '160%' : '-160%') + ') scale(0.6); opacity: 0; pointer-events: none; z-index: 0;';
            }

            const liveShift = this.isDragging ? (this.dragOffset / 320) * 74 : 0;
            const translateX = (diff * 74) + liveShift;
            const scale = diff === 0 ? 1.05 : (Math.abs(diff) === 1 ? 0.88 : 0.72);
            const opacity = diff === 0 ? 1 : (Math.abs(diff) === 1 ? 0.75 : 0.35);
            const zIndex = 30 - Math.abs(diff) * 10;
            const filter = diff === 0 ? 'none' : 'brightness(0.75) contrast(0.95)';
            const transition = this.isDragging ? 'transition: transform 0.05s ease-out;' : 'transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);';

            return 'transform: translateX(' + translateX + '%) scale(' + scale + '); opacity: ' + opacity + '; z-index: ' + zIndex + '; filter: ' + filter + '; ' + transition;
        },
        getRelativeDiff(index) {
            const count = this.filteredStays.length;
            if (count === 0) return 0;
            let diff = index - this.activeIndex;
            while (diff > count / 2) diff -= count;
            while (diff < -count / 2) diff += count;
            return diff;
        },
        handleCardClick(stay, index) {
            if (this.hasDragged) return;
            if (this.getRelativeDiff(index) === 0) {
                this.selectedStay = stay;
            } else {
                this.goTo(index);
            }
        }
    }"
    @keydown.arrow-left.window="prev()"
    @keydown.arrow-right.window="next()"
    @pointerup.window="endDrag()"
    @pointercancel.window="endDrag()"
    x-init="$watch('activeCategory', () => activeIndex = 0)"
>
    <!-- Section Header (Matching Mockup) -->
    <div class="max-w-4xl mx-auto mb-10 sm:mb-14 text-center md:text-left">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-[#8C7A6B] block mb-2">
            PORTFOLIO
        </span>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif-luxury font-normal text-[#231E1B] tracking-tight leading-tight max-w-2xl">
            Transforming brand visions into powerful visual narratives.
        </h2>
    </div>

    <!-- 3D COVERFLOW STAGE (Draggable Container) -->
    <div 
        class="relative w-full max-w-6xl mx-auto h-[480px] sm:h-[540px] md:h-[580px] flex items-center justify-center my-4 overflow-visible touch-pan-y"
        :class="isDragging ? 'cursor-grabbing' : 'cursor-grab'"
        @pointerdown="startDrag($event)"
        @pointermove="onDrag($event)"
        @pointerup="endDrag()"
    >
        
        <!-- Navigation Arrow Left -->
        <button 
            @click.stop="prev()"
            class="absolute left-2 sm:left-12 lg:left-24 z-40 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/90 hover:bg-white text-[#231E1B] shadow-xl border border-[#E8DCCF]/80 flex items-center justify-center hover:scale-105 active:scale-95 transition-all duration-300 cursor-pointer"
            aria-label="Previous Stay"
        >
            <svg class="w-5 h-5 text-[#231E1B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <!-- Navigation Arrow Right -->
        <button 
            @click.stop="next()"
            class="absolute right-2 sm:right-12 lg:right-24 z-40 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/90 hover:bg-white text-[#231E1B] shadow-xl border border-[#E8DCCF]/80 flex items-center justify-center hover:scale-105 active:scale-95 transition-all duration-300 cursor-pointer"
            aria-label="Next Stay"
        >
            <svg class="w-5 h-5 text-[#231E1B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Cards Container -->
        <div class="relative w-full h-full flex items-center justify-center pointer-events-none">
            <template x-for="(stay, index) in filteredStays" :key="stay.id">
                <div 
                    class="absolute w-[240px] sm:w-[280px] md:w-[320px] aspect-[9/16] rounded-3xl overflow-hidden shadow-2xl transition-all duration-500 ease-out group bg-[#181412] border border-white/15 pointer-events-auto select-none"
                    :style="getCardTransform(index)"
                    @click="handleCardClick(stay, index)"
                >
                    <!-- Background Image (draggable disabled to prevent browser ghost drag) -->
                    <img 
                        :src="'/' + stay.image.replace(/^\//, '')" 
                        :alt="stay.title" 
                        draggable="false"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out pointer-events-none select-none"
                        loading="lazy"
                    >

                    <!-- Top Counter Badge (e.g. 01 / 06) -->
                    <div class="absolute top-4 right-4 z-20 pointer-events-none">
                        <span 
                            class="px-3 py-1 rounded-full bg-black/40 backdrop-blur-md border border-white/20 text-white font-mono text-[11px] tracking-widest uppercase shadow-md"
                            x-text="String(index + 1).padStart(2, '0') + ' / ' + String(filteredStays.length).padStart(2, '0')"
                        ></span>
                    </div>

                    <!-- Bottom Scrim Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#181412]/95 via-[#181412]/40 to-transparent pointer-events-none"></div>

                    <!-- Card Content Details -->
                    <div class="absolute inset-x-0 bottom-0 p-5 sm:p-6 z-20 text-white flex flex-col justify-end">
                        <div class="space-y-1">
                            <!-- Category / Type -->
                            <p class="text-[11px] font-semibold tracking-widest uppercase text-[#E6C5BA]" x-text="stay.category_label || 'REELS'"></p>
                            
                            <!-- Title -->
                            <h3 class="text-lg sm:text-xl font-serif-luxury font-medium leading-snug group-hover:text-[#FAF6F0] transition text-white" x-text="stay.title"></h3>
                            
                            <!-- Tagline / Subtitle -->
                            <p class="text-xs text-white/80 font-light italic line-clamp-1" x-text="stay.subtitle"></p>
                        </div>

                        <!-- Read Review Trigger Hint (on Center Active Card) -->
                        <div 
                            class="mt-3 pt-3 border-t border-white/15 flex items-center justify-between text-[11px] text-[#FAF6F0]/90 font-medium"
                            x-show="getRelativeDiff(index) === 0"
                        >
                            <span>Explore Details</span>
                            <span class="text-xs">➔</span>
                        </div>
                    </div>
                </div>
            </template>
        </div>

    </div>

    <!-- CAROUSEL COUNTER (e.g. 1 OF 6 ·) -->
    <div class="text-center mt-6 mb-8">
        <p 
            class="text-xs font-mono tracking-widest text-[#70645D] uppercase"
            x-text="(filteredStays.length > 0 ? (activeIndex + 1) : 0) + ' OF ' + filteredStays.length + ' ·'"
        ></p>
    </div>

    <!-- BOTTOM CATEGORY FILTER PILLS (Matching Mockup) -->
    <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 max-w-4xl mx-auto pt-2 pb-6">
        <template x-for="(label, key) in categories" :key="key">
            <button 
                @click="activeCategory = key; activeIndex = 0;"
                :class="activeCategory === key ? 'bg-[#231E1B] text-[#FAF6F0] shadow-md shadow-[#231E1B]/20 scale-[1.03]' : 'bg-white/80 hover:bg-[#F8EDE8] text-[#70645D] hover:text-[#231E1B] border border-[#E8DCCF]/80'"
                class="px-5 sm:px-6 py-2.5 rounded-full text-xs font-semibold tracking-wider uppercase transition-all duration-300 cursor-pointer"
                x-text="label"
            ></button>
        </template>
    </div>

    <!-- Quick View Detail Modal -->
    <template x-if="selectedStay">
        <div 
            class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/60 backdrop-blur-sm transition-opacity"
            @keydown.escape.window="selectedStay = null"
        >
            <!-- Modal Box -->
            <div 
                class="bg-white rounded-3xl max-w-3xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-[#E8DCCF] relative animate-fade-in"
                @click.outside="selectedStay = null"
            >
                <!-- Close Button -->
                <button 
                    @click="selectedStay = null" 
                    class="absolute top-4 right-4 z-20 w-9 h-9 rounded-full bg-black/50 hover:bg-black text-white flex items-center justify-center text-sm transition cursor-pointer"
                >
                    ✕
                </button>

                <!-- Modal Image Gallery -->
                <div class="relative aspect-[16/9] w-full bg-[#F3ECE1]">
                    <img 
                        :src="'/' + selectedStay.image.replace(/^\//, '')" 
                        :alt="selectedStay.title" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <span class="text-xs uppercase tracking-wider px-3 py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/30 mb-2 inline-block" x-text="selectedStay.category_label"></span>
                        <h3 class="text-2xl sm:text-3xl font-serif-luxury font-medium" x-text="selectedStay.title"></h3>
                        <p class="text-xs sm:text-sm text-white/80 font-light flex items-center gap-1.5 mt-1">
                            <svg class="w-3.5 h-3.5 text-[#E6C5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span x-text="selectedStay.location"></span>
                            <span class="mx-2 text-white/40">•</span>
                            <span>Rating <span x-text="selectedStay.rating"></span></span>
                            <span class="mx-2 text-white/40">•</span>
                            <span x-text="selectedStay.views_count"></span>
                        </p>
                    </div>
                </div>

                <!-- Modal Body -->
                <div class="p-6 sm:p-8 space-y-6 bg-white">
                    
                    <!-- Highlights -->
                    <div>
                        <h4 class="text-xs uppercase tracking-widest text-[#B38F60] font-semibold mb-3">Key Highlights</h4>
                        <div class="flex flex-wrap gap-2">
                            <template x-for="hl in (selectedStay.highlights || [])" :key="hl">
                                <span class="text-xs px-3.5 py-1.5 rounded-full bg-[#FAF6F0] text-[#231E1B] border border-[#E8DCCF] font-medium" x-text="'✦ ' + hl"></span>
                            </template>
                        </div>
                    </div>

                    <!-- Story & Review -->
                    <div>
                        <h4 class="text-xs uppercase tracking-widest text-[#B38F60] font-semibold mb-2">April's Experience & Notes</h4>
                        <p class="text-sm sm:text-base text-[#70645D] font-light leading-relaxed" x-text="selectedStay.description"></p>
                    </div>

                    <!-- Actions -->
                    <div class="pt-6 border-t border-[#F3ECE1] flex flex-col sm:flex-row items-center justify-between gap-4">
                        <a 
                            :href="selectedStay.instagram_url" 
                            target="_blank"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#231E1B] text-[#FAF6F0] text-xs font-semibold tracking-wider hover:bg-[#3A322E] transition shadow-md"
                        >
                            <span>Watch Full Reel on Instagram</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>

                        <button 
                            @click="selectedStay = null; document.getElementById('contact').scrollIntoView({behavior: 'smooth'})"
                            class="w-full sm:w-auto text-xs font-semibold text-[#B38F60] hover:text-[#937145] transition text-center cursor-pointer"
                        >
                            Inquire for Similar Campaign ➔
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </template>

</div>
