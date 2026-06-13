@extends('layouts.app')

@section('title', 'Nestora | Property Buying Process in India')

@section('favicon')
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><path d='M40 30h30m-30 20h30m-30 20h30M25 30h5m-5 20h5m-5 20h5' stroke='%23B5882A' stroke-width='8' stroke-linecap='round'/></svg>">
@endsection

@section('content')

<!-- Header -->
<section class="bg-navy py-20 text-center text-white border-b border-gray-800">
    <div class="max-w-4xl mx-auto px-4 flex flex-col items-center">
        <!-- SVG Header Icon -->
        <svg class="w-24 h-24 text-gold mb-6" fill="none" viewBox="0 0 240 240" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M140 30L200 90V200C200 205.523 195.523 210 190 210H50C44.4772 210 40 205.523 40 200V40C40 34.4772 44.4772 30 50 30H140Z" fill="white" fill-opacity="0.1"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M140 30V90H200"/>
            <!-- House inside document -->
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M80 140L120 100L160 140M100 130V170H140V130"/>
        </svg>
        <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">Understanding the Property Buying Process</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">A transparent, step-by-step guide to buying real estate in India, specifically tailored for Rajasthan and Maharashtra.</p>
    </div>
</section>

<!-- Timeline -->
<section class="py-20 bg-cream">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="relative border-l-4 border-gold ml-3 md:ml-6 space-y-12">
            
            <!-- Step 1 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">1</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Define Your Budget
                </h3>
                <p class="text-gray-600 mb-4">Calculate your exact affordability before searching. This includes checking home loan eligibility, planning your down payment (typically 20%), and reserving funds for stamp duty and registration (approx 6-7% in Rajasthan).</p>
                <div class="bg-sand/30 p-4 rounded border-l-4 border-navy text-sm text-navy">
                    <span class="font-bold">Pro Tip:</span> Always get a loan pre-approval letter from a bank. It strengthens your position when negotiating with builders.
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">2</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    Property Search & Shortlisting
                </h3>
                <p class="text-gray-600 mb-4">We filter properties based on your requirements. We rigorously check builder reputation, RERA registration status, and scout the location for future infrastructure development.</p>
                <div class="bg-sand/30 p-4 rounded border-l-4 border-navy text-sm text-navy">
                    <span class="font-bold">Pro Tip:</span> Never consider an under-construction project that is not registered on the RERA portal.
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">3</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    Site Visit & Evaluation
                </h3>
                <p class="text-gray-600 mb-4">Physical visits to the shortlisted properties. We check the actual construction quality, carpet area versus built-up area, natural lighting, and neighborhood infrastructure like water and road connectivity.</p>
            </div>

            <!-- Step 4 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">4</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Title Verification
                </h3>
                <p class="text-gray-600 mb-4">The most critical step. We ensure a legal expert checks the ownership chain for the last 30 years, obtains an Encumbrance Certificate (EC), and verifies the original title deed.</p>
                <div class="bg-sand/30 p-4 rounded border-l-4 border-navy text-sm text-navy">
                    <span class="font-bold">Pro Tip:</span> Ask for a "Non-Encumbrance Certificate" from the sub-registrar to prove there are no pending loans on the property.
                </div>
            </div>

            <!-- Step 5 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">5</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    Sale Agreement (Agreement to Sell)
                </h3>
                <p class="text-gray-600 mb-4">Once finalized, you pay a token amount and sign an Agreement to Sell. This document outlines the total price, payment schedule, and handover timelines. It must be registered.</p>
            </div>

            <!-- Step 6 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">6</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    Home Loan Processing
                </h3>
                <p class="text-gray-600 mb-4">Submit the Agreement to Sell and legal reports to your bank. The bank conducts its independent technical valuation before issuing a final sanction letter and disbursing funds.</p>
            </div>

            <!-- Step 7 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">7</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    Sale Deed Drafting
                </h3>
                <p class="text-gray-600 mb-4">A registered advocate drafts the final Sale Deed. This is the primary legal document that proves ownership transfer. Both parties must approve the draft before execution.</p>
            </div>

            <!-- Step 8 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">8</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    Registration
                </h3>
                <p class="text-gray-600 mb-4">The Sale Deed is executed at the Sub-Registrar's Office. You pay the Stamp Duty and Registration fees. The buyer, seller, and two witnesses must be physically present.</p>
            </div>

            <!-- Step 9 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">9</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/></svg>
                    Mutation / Namdaakhl
                </h3>
                <p class="text-gray-600 mb-4">Highly important in Rajasthan. After registration, the property must be transferred to your name in the local municipal revenue records for property tax purposes.</p>
            </div>

            <!-- Step 10 -->
            <div class="relative pl-10 md:pl-16">
                <div class="absolute -left-[18px] md:-left-[20px] bg-white border-4 border-gold rounded-full w-10 h-10 flex items-center justify-center font-mono font-bold text-navy top-1">10</div>
                <h3 class="text-2xl font-bold text-navy mb-2 flex items-center gap-3">
                    <svg class="w-6 h-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Possession & Handover
                </h3>
                <p class="text-gray-600 mb-4">You finally receive the keys! We provide a handover checklist to ensure you receive all original documents, society share certificates, and parking allotments.</p>
                <div class="bg-sand/30 p-4 rounded border-l-4 border-navy text-sm text-navy">
                    <span class="font-bold">Pro Tip:</span> Change all locks immediately upon taking physical possession of a resale property.
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Sections -->
<!-- <section class="py-16 bg-white border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-serif font-bold text-navy mb-6">Need a handy reference?</h2>
        <a href="{{ asset('assets/checklist.pdf') }}" target="_blank" class="inline-flex items-center gap-2 px-8 py-3 bg-white border-2 border-gold text-navy font-bold uppercase tracking-wider rounded hover:bg-gold transition shadow-sm">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Download Property Buying Checklist
        </a>
        <p class="text-xs text-gray-400 mt-3">* PDF coming soon</p>
    </div>
</section> -->

<section class="bg-navy py-16 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-serif font-bold text-white mb-6">Have questions about the process?</h2>
        <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-gold text-navy font-bold uppercase tracking-wider rounded shadow hover:bg-yellow-600 transition">Ask Us Directly</a>
    </div>
</section>

@endsection
