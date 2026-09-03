<div id="contact" class="py-20 lg:py-28 px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto w-full">
    <div class="bg-[#FAF6F0] rounded-3xl border border-[#E8DCCF] p-8 sm:p-12 lg:p-16 shadow-xl relative overflow-hidden">
        
        <!-- Ambient Decorative Glow -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#F8EDE8] rounded-full blur-3xl opacity-80 pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-[#F3ECE1] rounded-full blur-3xl opacity-70 pointer-events-none"></div>

        <div class="relative z-10">
            
            <!-- Header -->
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs uppercase tracking-[0.25em] font-semibold text-[#B38F60] bg-white/80 px-4 py-1.5 rounded-full border border-[#E6C5BA]/50 inline-block mb-4 shadow-2xs">
                    Collaborate with April
                </span>
                <h2 class="text-3xl sm:text-4xl font-serif-luxury font-medium text-[#231E1B] tracking-tight mb-4">
                    Book a Stay Review or Partnership
                </h2>
                <p class="text-sm sm:text-base text-[#70645D] font-light leading-relaxed">
                    Whether you are an independent boutique villa, a five-star luxury hotel, or a design & lifestyle brand seeking organic UGC, fill out the inquiry form below and our team will get in touch within 1–2 business days.
                </p>
                <div class="mt-4 flex items-center justify-center gap-2 text-xs text-[#9C8F87]">
                    <span>Official Email:</span>
                    <a href="mailto:bnb.chiao@gmail.com" class="font-medium text-[#B38F60] hover:underline">bnb.chiao@gmail.com</a>
                </div>
            </div>

            @if($isSubmitted)
                <!-- Success Message Card -->
                <div class="bg-white/90 backdrop-blur-md rounded-2xl p-8 sm:p-10 border border-[#E6C5BA] text-center max-w-lg mx-auto shadow-lg animate-fade-in">
                    <div class="w-16 h-16 bg-[#F8EDE8] text-[#B38F60] rounded-full flex items-center justify-center mx-auto mb-5 text-2xl shadow-inner border border-[#E6C5BA]">
                        ✓
                    </div>
                    <h3 class="text-2xl font-serif-luxury font-medium text-[#231E1B] mb-2">
                        Thank You for Reaching Out!
                    </h3>
                    <p class="text-xs sm:text-sm text-[#70645D] font-light leading-relaxed mb-6">
                        We have successfully received your collaboration inquiry. April and the team will review availability and get back to you via email shortly.
                    </p>
                    <button 
                        wire:click="resetForm" 
                        class="px-6 py-2.5 rounded-full bg-[#231E1B] text-[#FAF6F0] text-xs font-semibold tracking-wider hover:bg-[#3A322E] transition shadow-xs cursor-pointer"
                    >
                        Send Another Inquiry
                    </button>
                </div>
            @else
                <!-- Form -->
                <form wire:submit="submit" class="space-y-6 max-w-3xl mx-auto">
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-[#70645D] font-semibold mb-2">
                                Your Name / Contact Person <span class="text-[#C47A62]">*</span>
                            </label>
                            <input 
                                type="text" 
                                wire:model="name"
                                placeholder="e.g. Sarah Jenkins"
                                class="w-full bg-white border border-[#E8DCCF] rounded-xl px-4 py-3 text-sm text-[#231E1B] placeholder-[#B5A8A0] focus:outline-none focus:border-[#B38F60] focus:ring-1 focus:ring-[#B38F60] transition shadow-2xs"
                            >
                            @error('name') <p class="text-[11px] text-[#C47A62] mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Brand Name -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-[#70645D] font-semibold mb-2">
                                Brand / Hotel / Company Name <span class="text-[#C47A62]">*</span>
                            </label>
                            <input 
                                type="text" 
                                wire:model="brand_name"
                                placeholder="e.g. Azure Cliffside Resort"
                                class="w-full bg-white border border-[#E8DCCF] rounded-xl px-4 py-3 text-sm text-[#231E1B] placeholder-[#B5A8A0] focus:outline-none focus:border-[#B38F60] focus:ring-1 focus:ring-[#B38F60] transition shadow-2xs"
                            >
                            @error('brand_name') <p class="text-[11px] text-[#C47A62] mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-[#70645D] font-semibold mb-2">
                                Business Email Address <span class="text-[#C47A62]">*</span>
                            </label>
                            <input 
                                type="email" 
                                wire:model="email"
                                placeholder="contact@yourbrand.com"
                                class="w-full bg-white border border-[#E8DCCF] rounded-xl px-4 py-3 text-sm text-[#231E1B] placeholder-[#B5A8A0] focus:outline-none focus:border-[#B38F60] focus:ring-1 focus:ring-[#B38F60] transition shadow-2xs"
                            >
                            @error('email') <p class="text-[11px] text-[#C47A62] mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Phone / Instant Messenger -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-[#70645D] font-semibold mb-2">
                                Phone Number / WhatsApp / LINE (Optional)
                            </label>
                            <input 
                                type="text" 
                                wire:model="phone"
                                placeholder="+1 (555) 019-2834 or LINE ID"
                                class="w-full bg-white border border-[#E8DCCF] rounded-xl px-4 py-3 text-sm text-[#231E1B] placeholder-[#B5A8A0] focus:outline-none focus:border-[#B38F60] focus:ring-1 focus:ring-[#B38F60] transition shadow-2xs"
                            >
                            @error('phone') <p class="text-[11px] text-[#C47A62] mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <!-- Project Type -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-[#70645D] font-semibold mb-2">
                                Collaboration Type <span class="text-[#C47A62]">*</span>
                            </label>
                            <select 
                                wire:model="project_type"
                                class="w-full bg-white border border-[#E8DCCF] rounded-xl px-4 py-3 text-sm text-[#231E1B] focus:outline-none focus:border-[#B38F60] focus:ring-1 focus:ring-[#B38F60] transition shadow-2xs"
                            >
                                <option value="hotel_review">🏨 Hotel / Stay Experience Review</option>
                                <option value="ugc_creation">🎥 High-End UGC Video & Stills</option>
                                <option value="brand_ambassador">✨ Brand Ambassadorship & Placement</option>
                                <option value="group_deal">🛍️ Exclusive Curated Audience Campaign</option>
                                <option value="other">💬 Custom Project / Other</option>
                            </select>
                        </div>

                        <!-- Budget Range -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-[#70645D] font-semibold mb-2">
                                Estimated Budget
                            </label>
                            <select 
                                wire:model="budget_range"
                                class="w-full bg-white border border-[#E8DCCF] rounded-xl px-4 py-3 text-sm text-[#231E1B] focus:outline-none focus:border-[#B38F60] focus:ring-1 focus:ring-[#B38F60] transition shadow-2xs"
                            >
                                <option value="usd_1k_2k">$1,000 - $2,000 USD</option>
                                <option value="usd_2k_5k">$2,000 - $5,000 USD</option>
                                <option value="usd_5k_plus">$5,000+ USD</option>
                                <option value="to_discuss">Flexible / To Be Discussed</option>
                            </select>
                        </div>

                        <!-- Timeline -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-[#70645D] font-semibold mb-2">
                                Target Timeline / Dates
                            </label>
                            <input 
                                type="text" 
                                wire:model="timeline"
                                placeholder="e.g. Q4 2026 or Next Month"
                                class="w-full bg-white border border-[#E8DCCF] rounded-xl px-4 py-3 text-sm text-[#231E1B] placeholder-[#B5A8A0] focus:outline-none focus:border-[#B38F60] focus:ring-1 focus:ring-[#B38F60] transition shadow-2xs"
                            >
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-xs uppercase tracking-wider text-[#70645D] font-semibold mb-2">
                            Project Details & Vision <span class="text-[#C47A62]">*</span>
                        </label>
                        <textarea 
                            wire:model="message"
                            rows="4"
                            placeholder="Tell us about your property or brand, key deliverables expected, desired timeframe, or specific aesthetic requirements..."
                            class="w-full bg-white border border-[#E8DCCF] rounded-xl px-4 py-3 text-sm text-[#231E1B] placeholder-[#B5A8A0] focus:outline-none focus:border-[#B38F60] focus:ring-1 focus:ring-[#B38F60] transition shadow-2xs"
                        ></textarea>
                        @error('message') <p class="text-[11px] text-[#C47A62] mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center pt-2">
                        <button 
                            type="submit" 
                            wire:loading.attr="disabled"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 rounded-full bg-[#231E1B] text-[#FAF6F0] text-xs sm:text-sm font-semibold tracking-widest uppercase hover:bg-[#3A322E] hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 shadow-lg shadow-[#231E1B]/20 cursor-pointer disabled:opacity-50"
                        >
                            <span wire:loading.remove>Send Collaboration Inquiry</span>
                            <span wire:loading class="inline-flex items-center gap-2">
                                <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                                </svg>
                                Sending...
                            </span>
                        </button>
                    </div>

                </form>
            @endif

        </div>
    </div>
</div>
