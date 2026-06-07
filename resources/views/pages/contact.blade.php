@extends('layouts.app')

@section('title', 'Contact - Inquire Now')

@section('content')

@if(request()->has('submitted') && request()->query('submitted') == 'true')
<section class="bg-gold py-12 text-center shadow-inner block w-full relative z-20">
    <div class="max-w-4xl mx-auto px-4">
        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-6 text-gold">
            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-navy mb-4">Thank you!</h2>
        <p class="text-lg text-navy/80 font-medium">We've received your inquiry and will reach out to you within 24 hours.</p>
        <a href="{{ route('home') }}" class="mt-8 inline-block px-8 py-3 bg-navy text-gold font-bold uppercase tracking-wider rounded hover:bg-gray-900 transition w-full md:w-auto">Return to Home</a>
    </div>
</section>
@endif

<section class="py-12 md:py-20 bg-cream min-h-[calc(100vh-200px)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col lg:flex-row gap-0 bg-white rounded-xl overflow-hidden shadow-xl border border-gray-100">
            
            <!-- Top / Left Side: Info -->
            <div class="w-full lg:w-5/12 bg-navy text-white px-6 py-10 md:p-12 flex flex-col justify-between relative overflow-hidden">
                <!-- Decorative pattern -->
                <div class="absolute top-0 right-0 -mr-20 -mt-20 opacity-10">
                    <svg width="300" height="300" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="90" stroke="#B5882A" stroke-width="20"/>
                        <circle cx="100" cy="100" r="50" stroke="#B5882A" stroke-width="20"/>
                    </svg>
                </div>
                
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6 text-gold">Start Your Property Journey</h2>
                    <p class="text-gray-300 mb-10 text-sm md:text-base">Fill out this form and expect a callback within 24 hours to discuss your precise requirements.</p>
                    
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-gold/20 flex items-center justify-center mr-4 shrink-0">
                                <svg class="w-5 h-5 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-xs text-gray-400 font-medium uppercase tracking-wider mb-1">Phone</h4>
                                <p class="font-medium text-base md:text-lg text-gold"><a href="tel:+917424845316">+91 74248 45316</a></p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-gold/20 flex items-center justify-center mr-4 shrink-0">
                                <svg class="w-5 h-5 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div class="break-words w-full">
                                <h4 class="text-xs text-gray-400 font-medium uppercase tracking-wider mb-1">Email</h4>
                                <p class="font-medium text-base md:text-lg break-words"><a href="mailto:kumawatrohit228@gmail.com">kumawatrohit228@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-gold/20 flex items-center justify-center mr-4 shrink-0">
                                <svg class="w-5 h-5 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div class="break-words w-full">
                                <h4 class="text-xs text-gray-400 font-medium uppercase tracking-wider mb-1">Office Address</h4>
                                <p class="font-medium text-sm md:text-base leading-snug break-words">
                                    Riyasat Tower, Near Kirti Heights,<br>
                                    Behind Iskcon Temple, Kharbas Circle,<br>
                                    Vill. Sukhiya, Teh. Sanganer,<br>
                                    Jaipur – 302020
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-gold/20 flex items-center justify-center mr-4 shrink-0">
                                <svg class="w-5 h-5 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div class="break-words w-full">
                                <h4 class="text-xs text-gray-400 font-medium uppercase tracking-wider mb-1">Credentials</h4>
                                <p class="font-medium text-sm md:text-base leading-snug break-words">
                                    <abbr title="Real Estate Regulatory Authority Registration">RERA</abbr> Reg. No.: RAJ/A/2025/16444<br>
                                    Associated with Gokul Kripa
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative z-10 mt-12 pt-6 border-t border-gray-700">
                    <p class="text-sm text-gray-400">Mon–Sat: 7:00 AM – 7:00 PM IST</p>
                    <p class="text-xs text-gold font-medium mt-1">24×7 support available for clients</p>
                </div>
            </div>
            
            <!-- Bottom / Right Side: Form -->
            <div class="w-full lg:w-7/12 p-8 md:p-12">
                <form action="{{ route('inquire.store') }}" method="POST" class="space-y-6" x-data="{ submitting: false }" @submit="submitting = true">
                    @csrf
                    
                    <!-- Honeypot -->
                    <input type="text" name="website" class="hidden" tabindex="-1" autocomplete="off">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-bold text-navy uppercase tracking-wider mb-2">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required 
                                class="w-full bg-gray-50 border @error('name') border-red-500 @else border-gray-200 @enderror rounded px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition">
                            @error('name')
                                <p class="text-red-600 text-sm mt-1 block">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-bold text-navy uppercase tracking-wider mb-2">Mobile Number <span class="text-red-500">*</span></label>
                            <div class="flex">
                                <span class="inline-flex items-center px-4 rounded-l border border-r-0 border-gray-200 bg-gray-100 text-gray-500 sm:text-sm">
                                    +91
                                </span>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required pattern="[6-9][0-9]{9}" title="10-digit mobile number starting with 6-9"
                                    class="flex-1 min-w-0 block w-full bg-gray-50 border @error('phone') border-red-500 @else border-gray-200 @enderror rounded-none rounded-r px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition">
                            </div>
                            @error('phone')
                                <p class="text-red-600 text-sm mt-1 block">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="md:col-span-2">
                            <label for="email" class="block text-sm font-bold text-navy uppercase tracking-wider mb-2">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                                class="w-full bg-gray-50 border @error('email') border-red-500 @else border-gray-200 @enderror rounded px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition">
                            @error('email')
                                <p class="text-red-600 text-sm mt-1 block">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-bold text-navy uppercase tracking-wider mb-2">City of Interest <span class="text-red-500">*</span></label>
                            <div class="relative overflow-hidden w-full">
                                <select id="city" name="city" required 
                                    class="w-full bg-gray-50 border @error('city') border-red-500 @else border-gray-200 @enderror rounded px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition appearance-none">
                                    <option value="" disabled {{ old('city') ? '' : 'selected' }}>Select City</option>
                                    @foreach(['Jaipur', 'Kota', 'Ajmer', 'Mumbai', 'Other'] as $city)
                                        <option value="{{ $city }}" {{ old('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                            @error('city')
                                <p class="text-red-600 text-sm mt-1 block">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Property Type -->
                        <div>
                            <label for="property_type" class="block text-sm font-bold text-navy uppercase tracking-wider mb-2">Property Type <span class="text-red-500">*</span></label>
                            <div class="relative overflow-hidden w-full">
                                <select id="property_type" name="property_type" required 
                                    class="w-full bg-gray-50 border @error('property_type') border-red-500 @else border-gray-200 @enderror rounded px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition appearance-none">
                                    <option value="" disabled {{ old('property_type') ? '' : 'selected' }}>Select Type</option>
                                    @foreach(['Plot', 'Villa', 'Commercial Space'] as $type)
                                        <option value="{{ $type }}" {{ old('property_type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                            @error('property_type')
                                <p class="text-red-600 text-sm mt-1 block">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Budget -->
                        <div class="md:col-span-2">
                            <label for="budget_range" class="block text-sm font-bold text-navy uppercase tracking-wider mb-2">Budget Range <span class="text-red-500">*</span></label>
                            <div class="relative overflow-hidden w-full">
                                <select id="budget_range" name="budget_range" required 
                                    class="w-full bg-gray-50 border @error('budget_range') border-red-500 @else border-gray-200 @enderror rounded px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition appearance-none">
                                    <option value="" disabled {{ old('budget_range') ? '' : 'selected' }}>Select Budget</option>
                                    @foreach(['Under 30L', '30L-60L', '60L-1Cr', '1Cr-2Cr', 'Above 2Cr'] as $budget)
                                        <option value="{{ $budget }}" {{ old('budget_range') == $budget ? 'selected' : '' }}>{{ $budget }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                            @error('budget_range')
                                <p class="text-red-600 text-sm mt-1 block">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div class="md:col-span-2">
                            <label for="message" class="block text-sm font-bold text-navy uppercase tracking-wider mb-2">Message / Requirement <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="5" required minlength="20" placeholder="Please describe your requirement in detail (min 20 characters)..."
                                class="w-full bg-gray-50 border @error('message') border-red-500 @else border-gray-200 @enderror rounded px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition resize-none">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 text-sm mt-1 block">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" x-bind:disabled="submitting" x-text="submitting ? 'Submitting...' : 'Submit Inquiry'"
                            class="w-full md:w-auto bg-gold hover:bg-yellow-600 text-navy font-bold py-4 px-8 rounded transition disabled:opacity-70 disabled:cursor-not-allowed uppercase tracking-wider shadow-lg hover:shadow-xl text-lg">
                            Submit Inquiry
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</section>

@endsection
