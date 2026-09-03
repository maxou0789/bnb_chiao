<div id="portfolio" class="py-20 lg:py-28 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
    
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-14">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-[#B38F60] bg-[#F8EDE8] px-4 py-1.5 rounded-full border border-[#E6C5BA]/50 inline-block mb-4">
            Curated Stays & Destinations
        </span>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif-luxury font-normal text-[#231E1B] tracking-tight mb-4">
            Curated Stays & Architectural Escapes
        </h2>
        <p class="text-base sm:text-lg text-[#70645D] font-light leading-relaxed">
            Through April's discerning aesthetic lens, experience authentic luxury stays, private pool villas, and five-star master suites brought to life through cinematic short-form storytelling.
        </p>
    </div>

    <!-- Controls: Category Pills & Search -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-5 mb-12 pb-6 border-b border-[#E8DCCF]/60">
        
        <!-- Category Filters -->
        <div class="flex flex-wrap items-center justify-center md:justify-start gap-2 sm:gap-3 w-full md:w-auto">
            @foreach($categories as $key => $label)
                <button 
                    wire:click="setCategory('{{ $key }}')"
                    class="px-5 py-2.5 rounded-full text-xs sm:text-sm tracking-wide transition-all duration-300 font-medium cursor-pointer {{ $activeCategory === $key ? 'bg-[#231E1B] text-[#FAF6F0] shadow-md shadow-[#231E1B]/15 scale-[1.02]' : 'bg-[#FDF8F6] text-[#70645D] hover:bg-[#F8EDE8] hover:text-[#231E1B] border border-[#E8DCCF]/70' }}"
                >
                    {{ $label }}
                </button>
            @endforeach
        </div>

        <!-- Live Search -->
        <div class="relative w-full md:w-72">
            <input 
                type="text" 
                wire:model.live.debounce.300ms="search"
                placeholder="Search stays, location, style..." 
                class="w-full bg-[#FCFAF7] border border-[#E8DCCF] rounded-full py-2.5 pl-10 pr-4 text-xs sm:text-sm text-[#231E1B] placeholder-[#9C8F87] focus:outline-none focus:border-[#B38F60] focus:ring-1 focus:ring-[#B38F60] transition"
            >
            <svg class="w-4 h-4 text-[#9C8F87] absolute left-3.5 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            @if($search)
                <button wire:click="$set('search', '')" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-xs text-[#9C8F87] hover:text-[#231E1B]">✕</button>
            @endif
        </div>
    </div>

    <!-- Cards Grid -->
    @if($stays->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($stays as $stay)
                <div class="group bg-white rounded-2xl overflow-hidden border border-[#E8DCCF]/70 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-500 flex flex-col justify-between">
                    
                    <!-- Image Container -->
                    <div class="relative aspect-[4/3] overflow-hidden bg-[#F3ECE1]">
                        <img 
                            src="{{ asset($stay->image) }}" 
                            alt="{{ $stay->title }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <!-- Top Badges Overlay -->
                        <div class="absolute inset-x-3 top-3 flex items-center justify-between pointer-events-none">
                            <span class="text-[11px] font-medium tracking-wider uppercase px-3 py-1 rounded-full bg-[#FAF6F0]/90 backdrop-blur-md text-[#231E1B] border border-white/60 shadow-xs">
                                {{ $stay->category_label }}
                            </span>
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-full bg-[#231E1B]/80 backdrop-blur-md text-[#FAF6F0] flex items-center gap-1 shadow-xs">
                                <span>★</span> {{ $stay->rating }}
                            </span>
                        </div>

                        <!-- Views Counter Badge -->
                        <div class="absolute bottom-3 left-3 pointer-events-none">
                            <span class="text-[10px] tracking-wider px-2.5 py-0.5 rounded-full bg-black/60 backdrop-blur-md text-white font-light flex items-center gap-1">
                                <svg class="w-3 h-3 text-[#E6C5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                {{ $stay->views_count }}
                            </span>
                        </div>
                    </div>

                    <!-- Content Details -->
                    <div class="p-6 flex-1 flex flex-col justify-between bg-white">
                        <div>
                            <!-- Location -->
                            <div class="flex items-center gap-1.5 text-xs text-[#B38F60] font-medium mb-2">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>{{ $stay->location }}</span>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl font-serif-luxury font-medium text-[#231E1B] mb-1.5 group-hover:text-[#B38F60] transition-colors line-clamp-1">
                                {{ $stay->title }}
                            </h3>
                            <p class="text-xs text-[#9C8F87] font-light mb-4 italic line-clamp-1">
                                {{ $stay->subtitle }}
                            </p>

                            <!-- Highlights Tags -->
                            <div class="flex flex-wrap gap-1.5 mb-5">
                                @if(is_array($stay->highlights))
                                    @foreach(array_slice($stay->highlights, 0, 3) as $tag)
                                        <span class="text-[11px] px-2.5 py-0.5 rounded-md bg-[#FAF6F0] text-[#70645D] border border-[#E8DCCF]/60">
                                            #{{ $tag }}
                                        </span>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <!-- Action Button -->
                        <div class="pt-4 border-t border-[#F3ECE1] flex items-center justify-between">
                            <button 
                                wire:click="selectStay({{ $stay->id }})"
                                class="inline-flex items-center gap-1.5 text-xs font-semibold tracking-wider text-[#231E1B] hover:text-[#B38F60] transition cursor-pointer"
                            >
                                <span>Read Review</span>
                                <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>

                            <a 
                                href="{{ $stay->instagram_url }}" 
                                target="_blank" 
                                class="text-xs text-[#9C8F87] hover:text-[#B38F60] flex items-center gap-1 transition"
                                title="View on Instagram"
                            >
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                                <span>Reel</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-16 bg-white/60 rounded-2xl border border-[#E8DCCF] max-w-md mx-auto">
            <p class="text-[#70645D] text-sm">No stays found matching your search criteria.</p>
            <button wire:click="setCategory('all'); $set('search', '')" class="mt-4 text-xs font-semibold text-[#B38F60] underline">
                Reset all filters
            </button>
        </div>
    @endif

    <!-- Quick View Detail Modal -->
    @if($selectedStay)
        <div 
            class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/60 backdrop-blur-sm transition-opacity"
            wire:keydown.escape="closeModal"
        >
            <!-- Modal Box -->
            <div 
                class="bg-white rounded-3xl max-w-3xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-[#E8DCCF] relative"
                @click.outside="$wire.closeModal()"
            >
                <!-- Close Button -->
                <button 
                    wire:click="closeModal" 
                    class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-black/50 hover:bg-black text-white flex items-center justify-center text-sm transition cursor-pointer"
                >
                    ✕
                </button>

                <!-- Modal Image Gallery -->
                <div class="relative aspect-[16/9] w-full bg-[#F3ECE1]">
                    <img 
                        src="{{ asset($selectedStay->image) }}" 
                        alt="{{ $selectedStay->title }}" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <span class="text-xs uppercase tracking-wider px-3 py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/30 mb-2 inline-block">
                            {{ $selectedStay->category_label }}
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-serif-luxury font-medium">
                            {{ $selectedStay->title }}
                        </h3>
                        <p class="text-xs sm:text-sm text-white/80 font-light flex items-center gap-1.5 mt-1">
                            <svg class="w-3.5 h-3.5 text-[#E6C5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>{{ $selectedStay->location }}</span>
                            <span class="mx-2 text-white/40">•</span>
                            <span>Rating {{ $selectedStay->rating }}</span>
                            <span class="mx-2 text-white/40">•</span>
                            <span>{{ $selectedStay->views_count }}</span>
                        </p>
                    </div>
                </div>

                <!-- Modal Body -->
                <div class="p-6 sm:p-8 space-y-6 bg-white">
                    
                    <!-- Highlights -->
                    <div>
                        <h4 class="text-xs uppercase tracking-widest text-[#B38F60] font-semibold mb-3">Key Highlights</h4>
                        <div class="flex flex-wrap gap-2">
                            @if(is_array($selectedStay->highlights))
                                @foreach($selectedStay->highlights as $hl)
                                    <span class="text-xs px-3.5 py-1.5 rounded-full bg-[#FAF6F0] text-[#231E1B] border border-[#E8DCCF] font-medium">
                                        ✦ {{ $hl }}
                                    </span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- Story & Review -->
                    <div>
                        <h4 class="text-xs uppercase tracking-widest text-[#B38F60] font-semibold mb-2">April's Experience & Notes</h4>
                        <p class="text-sm sm:text-base text-[#70645D] font-light leading-relaxed">
                            {{ $selectedStay->description }}
                        </p>
                    </div>

                    <!-- Actions -->
                    <div class="pt-6 border-t border-[#F3ECE1] flex flex-col sm:flex-row items-center justify-between gap-4">
                        <a 
                            href="{{ $selectedStay->instagram_url }}" 
                            target="_blank"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#231E1B] text-[#FAF6F0] text-xs font-semibold tracking-wider hover:bg-[#3A322E] transition shadow-md"
                        >
                            <span>Watch Full Reel on Instagram</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>

                        <button 
                            wire:click="closeModal" 
                            onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})"
                            class="w-full sm:w-auto text-xs font-semibold text-[#B38F60] hover:text-[#937145] transition text-center cursor-pointer"
                        >
                            Inquire for Similar Campaign ➔
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
