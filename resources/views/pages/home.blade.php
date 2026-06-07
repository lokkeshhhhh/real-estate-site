@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Section 1: Hero -->
<section class="relative bg-navy overflow-hidden">
    <!-- SVG Pattern Background -->
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="hero-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M0 40L40 0H20L0 20M40 40V20L20 40" fill="none" stroke="#B5882A" stroke-width="1"/>
                </pattern>
            </defs>
            <rect x="0" y="0" width="100%" height="100%" fill="url(#hero-pattern)"/>
        </svg>
    </div>
    
    <!-- Unsplash Image Overlay -->
    <div class="absolute inset-0 bg-cover bg-center opacity-30 mix-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1477587458883-47145ed94245?w=1600&q=80&fit=crop');"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-navy via-transparent to-navy/50"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 md:py-48 flex flex-col items-center text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20 mb-6">
            @if(file_exists(public_path('uploads/gokul_kripa_logo.png')))
                <img src="{{ asset('uploads/gokul_kripa_logo.png') }}" alt="Gokul Kripa" class="h-5 object-contain">
            @else
                <svg class="w-5 h-5 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            @endif
            <span class="text-cream text-sm font-bold uppercase tracking-wider">Associated with Gokul Kripa</span>
        </div>
        <h1 class="text-4xl md:text-6xl text-white font-serif font-bold mb-6 max-w-4xl leading-tight">
            Your Trusted Guide to Buying Property Across India's Best Markets
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-2xl mb-10 font-sans">
            From JDA-approved plots in Jaipur to prime addresses in Navi Mumbai — Rohit Kumawat helps you find, verify, and close the right property.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 mb-16">
            <a href="{{ route('portfolio') }}" class="px-8 py-3 border-2 border-gold text-gold font-bold uppercase tracking-wider rounded hover:bg-gold hover:text-navy transition">
                Browse Portfolio
            </a>
            <a href="{{ route('contact') }}" class="px-8 py-3 bg-gold border-2 border-gold text-navy font-bold uppercase tracking-wider rounded hover:bg-yellow-600 hover:border-yellow-600 transition">
                Inquire Now
            </a>
        </div>

        <!-- Trust Badges -->
        <div class="flex flex-wrap justify-center gap-8 md:gap-16 text-cream opacity-80 text-sm font-mono tracking-wide">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                30+ Deals Closed
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <abbr title="Real Estate Regulatory Authority Registration">RERA</abbr> Reg. No. RAJ/A/2025/16444
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Serving Jaipur · Kota · Ajmer · Mumbai
            </div>
        </div>
    </div>
</section>

<!-- Section 2: What We Help You With -->
<section class="py-24 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-navy font-bold mb-4">What We Help You With</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition text-center group">
                <div class="w-24 h-24 mx-auto mb-6 text-navy group-hover:text-gold transition">
                    <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="40" y="80" width="120" height="90" stroke="currentColor" stroke-width="8" stroke-linejoin="round"/>
                        <path d="M20 90L100 30L180 90" stroke="currentColor" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="85" y="130" width="30" height="40" stroke="currentColor" stroke-width="8" stroke-linejoin="round"/>
                        <circle cx="140" cy="140" r="30" fill="white" stroke="#B5882A" stroke-width="8"/>
                        <path d="M160 160L190 190" stroke="#B5882A" stroke-width="8" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Find the Right Property</h3>
                <p class="text-gray-600 mb-6 line-clamp-2">We curate properties that precisely match your budget, lifestyle, and investment goals.</p>
                <a href="{{ route('process') }}" class="text-gold font-bold uppercase text-sm hover:underline tracking-wider">Learn More &rarr;</a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition text-center group">
                <div class="w-24 h-24 mx-auto mb-6 text-navy group-hover:text-gold transition">
                    <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="50" y="30" width="100" height="140" rx="4" stroke="currentColor" stroke-width="8" stroke-linejoin="round"/>
                        <path d="M70 70H130M70 100H130" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
                        <circle cx="130" cy="140" r="25" fill="#B5882A"/>
                        <circle cx="130" cy="140" r="20" fill="white"/>
                        <path d="M125 155L115 180L130 170L145 180L135 155" fill="#B5882A"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Navigate Legalities</h3>
                <p class="text-gray-600 mb-6 line-clamp-2">Complete title verification, RERA checks, and hassle-free registration guidance.</p>
                <a href="{{ route('legalities') }}" class="text-gold font-bold uppercase text-sm hover:underline tracking-wider">Learn More &rarr;</a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition text-center group">
                <div class="w-24 h-24 mx-auto mb-6 text-navy group-hover:text-gold transition">
                    <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40 120L80 80L120 120" stroke="currentColor" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M160 120L120 80" stroke="currentColor" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="70" y="70" width="60" height="60" transform="rotate(45 70 70)" stroke="#B5882A" stroke-width="8" fill="white"/>
                        <path d="M60 140H20M180 140H140" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-navy mb-3">Close with Confidence</h3>
                <p class="text-gray-600 mb-6 line-clamp-2">Transparent pricing and secure transactions backed by our agency’s reputation.</p>
                <a href="{{ route('about') }}" class="text-gold font-bold uppercase text-sm hover:underline tracking-wider">Learn More &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Cities We Cover -->
<section class="bg-navy py-16 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 text-center">
        <h2 class="text-2xl md:text-3xl font-serif font-bold">Cities We Cover</h2>
    </div>
    
    <div class="flex overflow-x-auto pb-8 hide-scrollbar snap-x px-4 sm:px-6 lg:px-8 gap-6 max-w-7xl mx-auto">
        <!-- Jaipur -->
        <div class="shrink-0 w-64 snap-center relative rounded-lg overflow-hidden group">
            <img src="https://images.unsplash.com/photo-1477587458883-47145ed94245?w=400&h=500&fit=crop" alt="Jaipur" loading="lazy" class="w-full h-80 object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4">
                <h3 class="text-xl font-bold font-serif text-gold">Jaipur</h3>
                <p class="text-sm text-gray-300">Pink City — Residential Boom</p>
            </div>
        </div>
        <!-- Kota -->
        <div class="shrink-0 w-64 snap-center relative rounded-lg overflow-hidden group">
            <img src="https://images.unsplash.com/photo-1567157577867-05ccb1388e66?w=800&q=80&fit=crop&auto=format" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1524492412937-b28074a47d70?w=800&q=80&fit=crop&auto=format';" alt="Kota, Rajasthan" loading="lazy" class="w-full h-80 object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4">
                <h3 class="text-xl font-bold font-serif text-gold">Kota</h3>
                <p class="text-sm text-gray-300">Education Hub — High ROI</p>
            </div>
        </div>
        <!-- Mumbai -->
        <div class="shrink-0 w-64 snap-center relative rounded-lg overflow-hidden group">
            <img src="https://images.unsplash.com/photo-1529253355930-ddbe423a2ac7?w=400&h=500&fit=crop" alt="Mumbai" loading="lazy" class="w-full h-80 object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4">
                <h3 class="text-xl font-bold font-serif text-gold">Mumbai</h3>
                <p class="text-sm text-gray-300">Financial Capital — Luxury</p>
            </div>
        </div>
        <!-- Ajmer -->
        <div class="shrink-0 w-64 snap-center relative rounded-lg overflow-hidden group">
            <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?w=400&h=500&fit=crop" alt="Ajmer" loading="lazy" class="w-full h-80 object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4">
                <h3 class="text-xl font-bold font-serif text-gold">Ajmer</h3>
                <p class="text-sm text-gray-300">Heritage City — Growing Hub</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Featured Deals -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-serif text-navy font-bold mb-2">Featured Deals</h2>
                <div class="w-24 h-1 bg-gold"></div>
            </div>
            <a href="{{ route('portfolio') }}" class="hidden sm:inline-block text-gold font-bold uppercase tracking-wider text-sm hover:underline">See Full Portfolio &rarr;</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Deal Card 1 -->
            <div class="border border-gray-100 rounded-lg overflow-hidden hover:shadow-lg hover:border-gold transition duration-300 group">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=600&q=80" alt="Plot" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 bg-navy text-white text-xs font-bold px-3 py-1 uppercase tracking-wider rounded">Sold — 2023</div>
                </div>
                <div class="p-6">
                    <div class="text-xs font-mono text-gold mb-2 uppercase tracking-wide">Plot • Jaipur</div>
                    <h3 class="text-xl font-bold text-navy mb-2">Premium Plot in Jagatpura</h3>
                    <p class="text-gray-600 text-sm">A beautiful 2500 sqft plot closed for a first-time homebuilder.</p>
                </div>
            </div>
            <!-- Deal Card 2 -->
            <div class="border border-gray-100 rounded-lg overflow-hidden hover:shadow-lg hover:border-gold transition duration-300 group">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?w=600&q=80" alt="Villa" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 bg-navy text-white text-xs font-bold px-3 py-1 uppercase tracking-wider rounded">Sold — 2024</div>
                </div>
                <div class="p-6">
                    <div class="text-xs font-mono text-gold mb-2 uppercase tracking-wide">Villa • Ajmer</div>
                    <h3 class="text-xl font-bold text-navy mb-2">Premium Heritage Villa</h3>
                    <p class="text-gray-600 text-sm">Exclusive 4000 sqft property with modern amenities.</p>
                </div>
            </div>
            <!-- Deal Card 3 -->
            <div class="border border-gray-100 rounded-lg overflow-hidden hover:shadow-lg hover:border-gold transition duration-300 group">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80" alt="Office" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4 bg-gold text-navy text-xs font-bold px-3 py-1 uppercase tracking-wider rounded">Leased — 2023</div>
                </div>
                <div class="p-6">
                    <div class="text-xs font-mono text-gold mb-2 uppercase tracking-wide">Commercial • Mumbai</div>
                    <h3 class="text-xl font-bold text-navy mb-2">Prime Office Space, Thane</h3>
                    <p class="text-gray-600 text-sm">Secured a long-term lease for a corporate client in a prime IT park.</p>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center sm:hidden">
            <a href="{{ route('portfolio') }}" class="inline-block text-gold font-bold uppercase tracking-wider text-sm hover:underline">See Full Portfolio &rarr;</a>
        </div>
    </div>
</section>

<!-- Section 5: The Buying Journey -->
<section class="py-24 bg-sand/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-serif text-navy font-bold mb-4">The Buying Journey</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-16">A transparent, step-by-step approach to securing your dream property.</p>
        
        <div class="flex flex-col md:flex-row justify-between items-center relative max-w-5xl mx-auto">
            <!-- Line connector (hidden on mobile) -->
            <div class="hidden md:block absolute top-12 left-0 w-full h-1 bg-gray-300 -z-10"></div>
            
            <!-- Steps -->
            <div class="flex flex-col items-center mb-8 md:mb-0 w-40">
                <div class="w-24 h-24 rounded-full bg-white border-4 border-gold flex items-center justify-center mb-4 text-navy">
                    <!-- Search Icon -->
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h4 class="font-bold text-navy">1. Search</h4>
            </div>
            
            <div class="flex flex-col items-center mb-8 md:mb-0 w-40">
                <div class="w-24 h-24 rounded-full bg-white border-4 border-gold flex items-center justify-center mb-4 text-navy">
                    <!-- Map Pin -->
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h4 class="font-bold text-navy">2. Site Visit</h4>
            </div>

            <div class="flex flex-col items-center mb-8 md:mb-0 w-40">
                <div class="w-24 h-24 rounded-full bg-white border-4 border-gold flex items-center justify-center mb-4 text-navy">
                    <!-- Document -->
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <h4 class="font-bold text-navy">3. Legality</h4>
            </div>

            <div class="flex flex-col items-center mb-8 md:mb-0 w-40">
                <div class="w-24 h-24 rounded-full bg-white border-4 border-gold flex items-center justify-center mb-4 text-navy">
                    <!-- Pen -->
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                </div>
                <h4 class="font-bold text-navy">4. Agreement</h4>
            </div>

            <div class="flex flex-col items-center w-40">
                <div class="w-24 h-24 rounded-full bg-navy border-4 border-gold flex items-center justify-center mb-4 text-white">
                    <!-- Key/Stamp -->
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>
                </div>
                <h4 class="font-bold text-navy">5. Registration</h4>
            </div>
        </div>
        
        <div class="mt-16">
            <a href="{{ route('process') }}" class="px-8 py-3 bg-navy text-gold font-bold uppercase tracking-wider rounded hover:bg-gray-800 transition shadow-lg">
                Understand the Full Process &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Section 6: Why Work With Us -->
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2">
                <!-- SVG Illustration -->
                <svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full max-w-md mx-auto text-navy">
                    <!-- City background -->
                    <rect x="50" y="150" width="80" height="200" fill="#E8D5B7"/>
                    <rect x="140" y="100" width="100" height="250" fill="#E8D5B7"/>
                    <rect x="250" y="180" width="90" height="170" fill="#E8D5B7"/>
                    <!-- Desk/Person -->
                    <circle cx="200" cy="220" r="40" fill="currentColor"/>
                    <path d="M120 350C120 300 160 280 200 280C240 280 280 300 280 350H120Z" fill="currentColor"/>
                    <rect x="40" y="350" width="320" height="20" fill="#B5882A"/>
                    <rect x="60" y="370" width="20" height="30" fill="#B5882A"/>
                    <rect x="320" y="370" width="20" height="30" fill="#B5882A"/>
                </svg>
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-3xl md:text-4xl font-serif text-navy font-bold mb-8">Why Work With Us</h2>
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-gold flex items-center justify-center mt-1 mr-4">
                            <svg class="w-4 h-4 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-lg">Transparent Process</h4>
                            <p class="text-gray-600 mt-1">No hidden fees, no last-minute surprises. We explain every cost upfront.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-gold flex items-center justify-center mt-1 mr-4">
                            <svg class="w-4 h-4 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-lg">RERA-Registered Associate</h4>
                            <p class="text-gray-600 mt-1">Operating fully within the regulatory framework of RERA Rajasthan.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-gold flex items-center justify-center mt-1 mr-4">
                            <svg class="w-4 h-4 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-lg">Company-Backed Credibility</h4>
                            <p class="text-gray-600 mt-1">Working under a reputed agency to ensure your investment is safe.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="shrink-0 w-6 h-6 rounded-full bg-gold flex items-center justify-center mt-1 mr-4">
                            <svg class="w-4 h-4 text-navy" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-lg">End-to-End Support</h4>
                            <p class="text-gray-600 mt-1">From the first site visit to the final handover of keys, we are with you.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Inquiry CTA Banner -->
<section class="bg-gradient-to-r from-[#B5882A] to-[#D4AF37] py-20 text-center px-4">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-serif font-bold text-navy mb-6">Have a Property in Mind? Let's Talk.</h2>
        <p class="text-lg text-navy/80 mb-10 max-w-2xl mx-auto">Fill out a quick inquiry and we'll get back to you within 24 hours to discuss your requirements.</p>
        <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-navy text-gold font-bold uppercase tracking-wider rounded shadow-xl hover:bg-gray-900 transition hover:-translate-y-1 transform">
            Start Your Inquiry
        </a>
    </div>
</section>

<!-- Section 8: Testimonials -->
<section class="py-24 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-serif text-navy font-bold mb-4">Client Comfort</h2>
            <div class="w-24 h-1 bg-gold mx-auto"></div>
            <p class="text-sm text-gray-400 mt-4 italic">* Illustrative testimonials</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 relative">
                <svg class="absolute top-6 left-6 w-12 h-12 text-sand opacity-30" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <div class="relative z-10 pl-6 pt-6">
                    <p class="text-gray-600 mb-6 font-medium leading-relaxed">"The entire process was incredibly smooth. They helped us identify the perfect 3BHK in Jaipur, negotiated the price, and walked us through the entire legal paperwork without any stress."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&h=100&fit=crop" alt="Client" class="w-12 h-12 rounded-full mr-4 border-2 border-gold">
                        <div>
                            <h4 class="font-bold text-navy text-sm uppercase">Rajesh Kumar</h4>
                            <p class="text-xs text-gray-500">Bought Residential, Jaipur</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 relative">
                <svg class="absolute top-6 left-6 w-12 h-12 text-sand opacity-30" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <div class="relative z-10 pl-6 pt-6">
                    <p class="text-gray-600 mb-6 font-medium leading-relaxed">"As an investor from outside Rajasthan, I needed someone I could trust. Their market knowledge in Kota is unmatched, and they secured an excellent commercial asset for my portfolio."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=100&h=100&fit=crop" alt="Client" class="w-12 h-12 rounded-full mr-4 border-2 border-gold">
                        <div>
                            <h4 class="font-bold text-navy text-sm uppercase">Meera S.</h4>
                            <p class="text-xs text-gray-500">Bought Commercial, Kota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
