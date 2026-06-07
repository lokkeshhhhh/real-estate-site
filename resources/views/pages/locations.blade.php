@extends('layouts.app')

@section('title', 'Locations We Serve')

@section('content')

<!-- Header -->
<section class="bg-navy py-20 text-center text-white border-b border-gray-800">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">Localities We Know Best</h1>
        <p class="text-lg text-gray-400">Deep market knowledge across Rajasthan's major cities and Mumbai's prime real estate.</p>
    </div>
</section>

<div class="w-full">
    <!-- Jaipur Banner -->
    <section id="jaipur" class="relative w-full py-24 min-h-[500px] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1477587458883-47145ed94245?w=1600&q=80');"></div>
        <div class="absolute inset-0 bg-navy/80"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="flex flex-col md:flex-row gap-12 items-start justify-between">
                <div>
                    <h2 class="text-5xl md:text-6xl font-serif font-bold text-white mb-4">Jaipur</h2>
                    
                    <div class="bg-black/30 backdrop-blur-sm px-6 py-4 rounded border border-white/10 inline-block mb-6">
                        <span class="block text-xs uppercase tracking-widest text-gold mb-1">Avg. Property Price</span>
                        <span class="text-xl md:text-2xl font-bold font-mono text-cream">₹4,500 - ₹8,000 / sqft</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                            <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            JDA
                        </span>
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                            <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            RERA
                        </span>
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                            <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            RHB
                        </span>
                    </div>
                </div>

                <div class="bg-black/30 backdrop-blur-sm p-6 rounded border border-white/10 w-full md:w-[400px]">
                    <span class="block text-xs uppercase tracking-widest text-gold mb-4">Prime Localities</span>
                    <ul class="text-lg md:text-xl font-bold font-sans space-y-3 text-cream">
                        @foreach(['Malviya Nagar', 'Jagatpura', 'Vaishali Nagar', 'Mansarovar', 'Tonk Road', 'Ajmer Road'] as $loc)
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gold shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            {{ $loc }}
                        </li>
                        @endforeach
                        <li class="text-sm font-normal text-gray-400 mt-3 italic flex items-center gap-3">
                             <span class="w-5"></span> …and selected other localities
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8">
                <a href="{{ route('portfolio') }}" class="inline-block px-8 py-3 bg-gold text-navy font-bold uppercase tracking-wider rounded hover:bg-yellow-600 transition shadow-lg text-sm md:text-base">View Properties in Jaipur</a>
            </div>
        </div>
    </section>

    <!-- Kota Banner -->
    <section id="kota" class="relative w-full py-24 min-h-[500px] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center">
            <img src="https://images.unsplash.com/photo-1567157577867-05ccb1388e66?w=1600&q=80&fit=crop&auto=format" 
                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1524492412937-b28074a47d70?w=1600&q=80&fit=crop&auto=format';" 
                 class="absolute inset-0 w-full h-full object-cover" alt="Kota">
        </div>
        <div class="absolute inset-0 bg-navy/80"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex flex-col md:flex-row-reverse gap-12 items-start justify-between">
            <div class="text-left md:text-right flex flex-col md:items-end">
                <h2 class="text-5xl md:text-6xl font-serif font-bold text-white mb-4">Kota</h2>
                
                <div class="bg-black/30 backdrop-blur-sm px-6 py-4 rounded border border-white/10 inline-block mb-6 text-left">
                    <span class="block text-xs uppercase tracking-widest text-gold mb-1">Avg. Property Price</span>
                    <span class="text-xl md:text-2xl font-bold font-mono text-cream">₹3,000 - ₹6,000 / sqft</span>
                </div>

                <div class="flex flex-wrap gap-3 md:justify-end">
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                        <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        UIT KOTA
                    </span>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                        <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        RERA
                    </span>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                        <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        RHB
                    </span>
                </div>
            </div>

            <div class="bg-black/30 backdrop-blur-sm p-6 rounded border border-white/10 w-full md:w-[400px]">
                <span class="block text-xs uppercase tracking-widest text-gold mb-4 text-left">Prime Localities</span>
                <ul class="text-lg md:text-xl font-bold font-sans space-y-3 text-cream text-left">
                    @foreach(['Vigyan Nagar', 'Rangbari', 'Talwandi', 'Kunadi', 'Dadabari'] as $loc)
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-gold shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        {{ $loc }}
                    </li>
                    @endforeach
                    <li class="text-sm font-normal text-gray-400 mt-3 italic flex items-center gap-3">
                         <span class="w-5"></span> …and selected other localities
                    </li>
                </ul>
            </div>
            
            <div class="mt-8 md:hidden">
                <a href="{{ route('portfolio') }}" class="inline-block px-8 py-3 bg-gold text-navy font-bold uppercase tracking-wider rounded hover:bg-yellow-600 transition shadow-lg text-sm md:text-base">View Properties in Kota</a>
            </div>
        </div>
        <div class="absolute bottom-12 right-4 sm:right-6 lg:right-8 hidden md:block z-10">
            <a href="{{ route('portfolio') }}" class="inline-block px-8 py-3 bg-gold text-navy font-bold uppercase tracking-wider rounded hover:bg-yellow-600 transition shadow-lg text-sm md:text-base">View Properties in Kota</a>
        </div>
    </section>

    <!-- Ajmer Banner -->
    <section id="ajmer" class="relative w-full py-24 min-h-[500px] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1580587771525-78b9dba3b914?w=1600&q=80');"></div>
        <div class="absolute inset-0 bg-navy/80"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="flex flex-col md:flex-row gap-12 items-start justify-between">
                <div>
                    <h2 class="text-5xl md:text-6xl font-serif font-bold text-white mb-4">Ajmer</h2>
                    
                    <div class="bg-black/30 backdrop-blur-sm px-6 py-4 rounded border border-white/10 inline-block mb-6">
                        <span class="block text-xs uppercase tracking-widest text-gold mb-1">Avg. Property Price</span>
                        <span class="text-xl md:text-2xl font-bold font-mono text-cream">₹2,500 - ₹5,000 / sqft</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                            <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            ADA
                        </span>
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                            <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            RERA
                        </span>
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                            <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            RHB
                        </span>
                    </div>
                </div>

                <div class="bg-black/30 backdrop-blur-sm p-6 rounded border border-white/10 w-full md:w-[400px]">
                    <span class="block text-xs uppercase tracking-widest text-gold mb-4">Prime Localities</span>
                    <ul class="text-lg md:text-xl font-bold font-sans space-y-3 text-cream">
                        @foreach(['Makarwali', 'Vaishali Nagar', 'Kishangarh', 'Pushkar Road', 'Panchsheel Nagar'] as $loc)
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gold shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            {{ $loc }}
                        </li>
                        @endforeach
                        <li class="text-sm font-normal text-gray-400 mt-3 italic flex items-center gap-3">
                             <span class="w-5"></span> …and selected other localities
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8">
                <a href="{{ route('portfolio') }}" class="inline-block px-8 py-3 bg-gold text-navy font-bold uppercase tracking-wider rounded hover:bg-yellow-600 transition shadow-lg text-sm md:text-base">View Properties in Ajmer</a>
            </div>
        </div>
    </section>

    <!-- Mumbai Banner -->
    <section id="mumbai" class="relative w-full py-24 min-h-[500px] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1529253355930-ddbe423a2ac7?w=1600&q=80');"></div>
        <div class="absolute inset-0 bg-navy/80"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex flex-col md:flex-row-reverse gap-12 items-start justify-between">
            <div class="text-left md:text-right flex flex-col md:items-end">
                <h2 class="text-5xl md:text-6xl font-serif font-bold text-white mb-4">Mumbai</h2>
                
                <div class="bg-black/30 backdrop-blur-sm px-6 py-4 rounded border border-white/10 inline-block mb-6 text-left">
                    <span class="block text-xs uppercase tracking-widest text-gold mb-1">Avg. Property Price</span>
                    <span class="text-xl md:text-2xl font-bold font-mono text-cream">₹8,000 - ₹20,000 / sqft</span>
                </div>

                <div class="flex flex-wrap gap-3 md:justify-end">
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                        <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        MahaRERA
                    </span>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                        <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        CIDCO
                    </span>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-bold uppercase tracking-wider text-cream">
                        <svg class="w-3 h-3 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        BMC
                    </span>
                </div>
            </div>

            <div class="bg-black/30 backdrop-blur-sm p-6 rounded border border-white/10 w-full md:w-[400px]">
                <span class="block text-xs uppercase tracking-widest text-gold mb-4 text-left">Prime Localities</span>
                <ul class="text-lg md:text-xl font-bold font-sans space-y-3 text-cream text-left">
                    @foreach(['Thane', 'Navi Mumbai', 'Mira Road', 'Andheri', 'Borivali'] as $loc)
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-gold shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        {{ $loc }}
                    </li>
                    @endforeach
                    <li class="text-sm font-normal text-gray-400 mt-3 italic flex items-center gap-3">
                         <span class="w-5"></span> …and selected other localities
                    </li>
                </ul>
            </div>
            
            <div class="mt-8 md:hidden">
                <a href="{{ route('portfolio') }}" class="inline-block px-8 py-3 bg-gold text-navy font-bold uppercase tracking-wider rounded hover:bg-yellow-600 transition shadow-lg text-sm md:text-base">View Properties in Mumbai</a>
            </div>
        </div>
        <div class="absolute bottom-12 right-4 sm:right-6 lg:right-8 hidden md:block z-10">
            <a href="{{ route('portfolio') }}" class="inline-block px-8 py-3 bg-gold text-navy font-bold uppercase tracking-wider rounded hover:bg-yellow-600 transition shadow-lg text-sm md:text-base">View Properties in Mumbai</a>
        </div>
    </section>
</div>

@endsection
