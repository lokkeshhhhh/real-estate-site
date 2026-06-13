@extends('layouts.app')

@section('title', 'Nestora | About')

@section('favicon')
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='40' r='15' fill='none' stroke='%23B5882A' stroke-width='8'/><path d='M25 80c0-15 15-20 25-20s25 5 25 20' fill='none' stroke='%23B5882A' stroke-width='8'/></svg>">
@endsection

@section('content')

<!-- Hero Section -->
<section class="bg-cream py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <div class="relative w-full max-w-md mx-auto aspect-[4/5] rounded-xl overflow-hidden shadow-2xl border-4 border-white">
                    @if(file_exists(public_path('uploads/rohit_photo.jpg')))
                        <img src="{{ asset('uploads/rohit_photo.jpg') }}" alt="Rohit Kumawat" class="w-full h-full object-cover">
                    @else
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=800&q=80" alt="Rohit Kumawat" class="w-full h-full object-cover">
                    @endif
                </div>
            </div>
            <div class="md:w-1/2 flex flex-col justify-center border-l-4 border-gold pl-6 md:pl-10">
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-navy mb-2">Rohit Kumawat</h1>
                <p class="text-xl text-gold font-medium uppercase tracking-widest mb-6">Senior Real Estate Advisor</p>
                
                <p class="text-gray-600 mb-6 text-lg">
                    With over 2 years of dedicated experience in the Rajasthan real estate market, I specialize in helping families and investors navigate the complexities of property buying.
                </p>
                <div class="inline-flex items-center gap-3 bg-white px-6 py-3 rounded shadow-sm border border-gray-100 self-start">
                    @if(file_exists(public_path('uploads/gokul_kripa_logo.png')))
                        <img src="{{ asset('uploads/gokul_kripa_logo.png') }}" alt="Gokul Kripa" class="h-6 object-contain">
                    @else
                        <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    @endif
                    <span class="text-navy font-bold uppercase tracking-wider text-sm">Associated with Gokul Kripa</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Personal Story -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-serif font-bold text-navy mb-8">My Approach to Real Estate</h2>
        <div class="space-y-6 text-gray-600 leading-relaxed text-lg text-left md:text-center">
            <p>
                [PLACEHOLDER STORY] Every property journey is unique. When I started in real estate, I noticed a significant gap between what buyers needed and what the market provided—clarity and comfort. My goal has always been to bridge that gap. 
            </p>
            <p>
                Whether it's finding the perfect residential flat for a first-time homebuyer in Jaipur, scouting high-yield commercial spaces in Kota, or securing luxury apartments in Mumbai, I prioritize understanding the client's core lifestyle and financial needs before suggesting a single property.
            </p>
            <p>
                A transaction isn't just a signature on a Sale Deed; it's a life milestone. That's why I insist on absolute transparency, rigorous legal checks, and maintaining a relationship long after the keys are handed over.
            </p>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="py-16 bg-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl md:text-5xl font-mono text-gold font-bold mb-2">30+</div>
                <div class="text-sm uppercase tracking-widest text-gray-400">Deals Closed</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-mono text-gold font-bold mb-2">3</div>
                <div class="text-sm uppercase tracking-widest text-gray-400">Cities Served</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-mono text-gold font-bold mb-2">2+</div>
                <div class="text-sm uppercase tracking-widest text-gray-400">Years Exp.</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-mono text-gold font-bold mb-2">100%</div>
                <div class="text-sm uppercase tracking-widest text-gray-400">RERA Compliant</div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-20 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-serif font-bold text-navy mb-4">Core Values</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Value 1 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 text-center">
                <div class="w-20 h-20 mx-auto mb-6 text-navy">
                    <!-- Transparency (Eye) -->
                    <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 100C20 100 60 40 100 40C140 40 180 100 180 100C180 100 140 160 100 160C60 160 20 100 20 100Z" stroke="currentColor" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="100" cy="100" r="30" stroke="#B5882A" stroke-width="8"/>
                        <circle cx="100" cy="100" r="10" fill="#B5882A"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Transparency</h3>
                <p class="text-gray-600">Open communication about costs, legalities, and timelines. No surprises.</p>
            </div>

            <!-- Value 2 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 text-center">
                <div class="w-20 h-20 mx-auto mb-6 text-navy">
                    <!-- Expertise (Graduation Cap) -->
                    <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 90L100 50L180 90L100 130L20 90Z" stroke="currentColor" stroke-width="8" stroke-linejoin="round"/>
                        <path d="M50 105V140C50 155 100 170 100 170C100 170 150 155 150 140V105" stroke="#B5882A" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M180 90V130" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Expertise</h3>
                <p class="text-gray-600">Deep market knowledge and rigorous legal due diligence on every deal.</p>
            </div>

            <!-- Value 3 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 text-center">
                <div class="w-20 h-20 mx-auto mb-6 text-navy">
                    <!-- Client First (Person + Star) -->
                    <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="70" r="30" stroke="currentColor" stroke-width="8"/>
                        <path d="M40 170C40 136.863 66.8629 110 100 110C133.137 110 160 136.863 160 170" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
                        <path d="M150 50L160 70L180 75L165 90L170 110L150 100L130 110L135 90L120 75L140 70L150 50Z" fill="#B5882A"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Client-First</h3>
                <p class="text-gray-600">Prioritizing your requirements, budget, and peace of mind above all else.</p>
            </div>
        </div>
    </div>
</section>

<!-- Business Card Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" x-data="{ previewOpen: false }">
        <h2 class="text-3xl font-serif font-bold text-navy mb-10">Digital Business Card</h2>
        
        @if(file_exists(public_path('uploads/business_card_front.jpg')))
            <!-- 3D Flip Card -->
            <div class="group perspective-1000 w-full max-w-lg mx-auto cursor-pointer" @click="previewOpen = true">
                <div class="relative preserve-3d group-hover:rotate-y-180 transition-transform duration-700 ease-in-out w-full aspect-[1.75/1] shadow-2xl hover:shadow-[0_20px_50px_rgba(0,0,0,0.3)] rounded-xl">
                    <!-- Front -->
                    <div class="absolute inset-0 backface-hidden w-full h-full">
                        <img src="{{ asset('uploads/business_card_front.jpg') }}" alt="Business Card Front" class="w-full h-full object-cover rounded-xl border border-gray-100">
                    </div>
                    <!-- Back -->
                    <div class="absolute inset-0 backface-hidden rotate-y-180 w-full h-full">
                        <img src="{{ asset('uploads/business_card_back.jpg') }}" alt="Business Card Back" class="w-full h-full object-cover rounded-xl border border-gray-100">
                    </div>
                </div>
                <p class="text-sm text-gray-400 mt-6 italic flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg>
                    Hover to flip • Click to preview
                </p>
            </div>
            
            <!-- Preview Modal -->
            <div x-show="previewOpen" style="display: none;" x-transition.opacity class="fixed inset-0 z-50 flex items-center justify-center p-4 md:p-8 bg-black/90 backdrop-blur-sm" @click="previewOpen = false">
                <div class="relative flex flex-col lg:flex-row gap-8 max-w-[1200px] w-full items-center justify-center" @click.stop>
                    <button @click="previewOpen = false" class="absolute -top-12 lg:-top-8 right-0 lg:-right-8 text-white hover:text-gold transition focus:outline-none">
                        <svg class="w-10 h-10 drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                    <img src="{{ asset('uploads/business_card_front.jpg') }}" alt="Card Front" class="w-full max-w-lg lg:max-w-[550px] rounded shadow-2xl border border-white/20">
                    <img src="{{ asset('uploads/business_card_back.jpg') }}" alt="Card Back" class="w-full max-w-lg lg:max-w-[550px] rounded shadow-2xl border border-white/20">
                </div>
            </div>
        @else
            <div class="w-full max-w-2xl mx-auto aspect-[16/9] bg-[#F7F4EF] rounded-xl flex items-center justify-center border-2 border-dashed border-gold/30">
                <p class="text-xl font-serif text-gold font-bold uppercase tracking-widest px-4">Digital Business Card Coming Soon</p>
            </div>
        @endif
    </div>
</section>

@endsection
