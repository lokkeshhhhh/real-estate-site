@extends('layouts.app')

@section('title', 'Legal Essentials for Property Buyers')

@section('content')

<!-- Header -->
<section class="bg-navy py-20 text-center text-white border-b border-gray-800">
    <div class="max-w-4xl mx-auto px-4 flex flex-col items-center">
        <!-- SVG Gavel & Building -->
        <svg class="w-24 h-24 text-gold mb-6" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M140 200V80H200V200H140Z" stroke="currentColor" stroke-width="8" stroke-linejoin="round"/>
            <path d="M160 120H180M160 160H180" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
            <path d="M120 140L40 220" stroke="white" stroke-width="12" stroke-linecap="round"/>
            <rect x="80" y="80" width="80" height="40" transform="rotate(45 80 80)" fill="white" stroke="currentColor" stroke-width="8" stroke-linejoin="round"/>
            <path d="M30 220H210" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
        </svg>
        <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">Legal Essentials for Property Buyers in India</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">Understanding the paperwork and legal compliance required for a safe real estate transaction in Rajasthan and Maharashtra.</p>
    </div>
</section>

<!-- Legal Cards Grid -->
<section class="py-20 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            
            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-gold">
                <h3 class="text-xl font-bold text-navy mb-3">1. RERA Registration</h3>
                <p class="text-gray-600 mb-4">The Real Estate Regulatory Authority (RERA) protects buyers from builder defaults. Before investing in an under-construction project, always verify the RERA registration number on the official RERA Rajasthan or MahaRERA portal. It ensures project funds are escrowed and completion timelines are legally binding.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-gold">
                <h3 class="text-xl font-bold text-navy mb-3">2. Title Deed & Ownership</h3>
                <p class="text-gray-600 mb-4">A title deed is the ultimate proof of ownership. A thorough title search by an advocate should trace the property's ownership chain for the last 30 years to ensure there are no legal disputes, joint ownership conflicts, or forged documents. Red flags include missing original deeds or frequent rapid transfers.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-gold">
                <h3 class="text-xl font-bold text-navy mb-3">3. Encumbrance Certificate (EC)</h3>
                <p class="text-gray-600 mb-4">The EC proves that the property is free from legal or financial liabilities, such as an uncleared mortgage or pending property tax. In Rajasthan, an EC can be obtained from the sub-registrar's office for the required search period (usually 13 to 30 years).</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-gold">
                <h3 class="text-xl font-bold text-navy mb-3">4. Stamp Duty & Registration</h3>
                <p class="text-gray-600 mb-4">Registration makes you the legal owner in government records. In Rajasthan, stamp duty is approximately 6% (often lower for female owners) plus a 1% registration fee. Payment is made via e-stamp through the IGRS Rajasthan portal. <em class="text-sm text-gray-400">*Rates are subject to government revision.</em></p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-gold">
                <h3 class="text-xl font-bold text-navy mb-3">5. Sale Deed vs. Agreement to Sell</h3>
                <p class="text-gray-600 mb-4">An <strong>Agreement to Sell</strong> is a promise to transfer property in the future under specific conditions. It does not make you the owner. The <strong>Sale Deed</strong> is the final document executed during registration that officially transfers the title to your name.</p>
            </div>

            <!-- Card 6 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-gold">
                <h3 class="text-xl font-bold text-navy mb-3">6. Power of Attorney (PoA)</h3>
                <p class="text-gray-600 mb-4">A PoA gives someone the authority to act on behalf of the owner. While common for NRIs, buying property strictly through a General Power of Attorney (GPA) without a registered Sale Deed is legally invalid and highly risky following Supreme Court rulings.</p>
            </div>

            <!-- Card 7 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-gold">
                <h3 class="text-xl font-bold text-navy mb-3">7. No Objection Certificates (NOCs)</h3>
                <p class="text-gray-600 mb-4">Depending on the property type, NOCs are crucial. For a flat, you need a society NOC. For plots, you may require NOCs from the municipality, forest department, or pollution control board to ensure the land isn't reserved for public infrastructure.</p>
            </div>

            <!-- Card 8 -->
            <div class="bg-white p-8 rounded-lg shadow-sm border-l-4 border-gold">
                <h3 class="text-xl font-bold text-navy mb-3">8. Property Tax & Mutation</h3>
                <p class="text-gray-600 mb-4">Mutation (Namdaakhl) is the process of changing the title ownership in the local municipal revenue records. It is mandatory for paying property tax and transferring utility bills. Apply for this at the Jaipur Municipal Corporation or respective local body immediately after registration.</p>
            </div>

        </div>

        <!-- Disclaimer -->
        <div class="bg-gray-100 border border-gray-300 p-6 rounded-lg text-sm text-gray-600 flex items-start gap-4 shadow-inner">
            <svg class="w-6 h-6 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            <p><strong>Disclaimer:</strong> The information provided on this page is for general educational purposes only and does not constitute legal advice. Property laws and tax rates are subject to change. For advice specific to your transaction, please consult a registered property lawyer.</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="bg-gold py-16 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-serif font-bold text-navy mb-6">Still Confused? Let's Walk You Through It.</h2>
        <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-navy text-white font-bold uppercase tracking-wider rounded shadow-lg hover:bg-gray-900 transition hover:-translate-y-1 transform">Contact Us for Clarity</a>
    </div>
</section>

@endsection
