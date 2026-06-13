@extends('layouts.app')

@section('title', 'Nestora | Completed Deals - Portfolio')

@section('favicon')
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><path d='M20 40h60v40H20zM35 40V25h30v15' fill='none' stroke='%23B5882A' stroke-width='8'/></svg>">
@endsection

@section('content')

<!-- Header -->
<section class="bg-navy py-20 text-center text-white border-b border-gray-800">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">Completed Deals</h1>
        <p class="text-lg text-gray-400">A showcase of properties successfully closed across Jaipur, Kota, Mumbai, and more.</p>
    </div>
</section>

<!-- Portfolio Section -->
<section class="py-12 bg-cream min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filters -->
        <div class="flex flex-col md:flex-row justify-between items-center bg-white p-4 rounded-lg shadow-sm border border-gray-100 mb-10 gap-4">
            
            <div class="flex flex-wrap gap-2" id="type-filters">
                <button class="filter-btn active px-4 py-2 text-sm font-bold uppercase tracking-wider rounded border border-gold bg-gold text-navy transition" data-filter="type" data-value="all">All</button>
                <button class="filter-btn px-4 py-2 text-sm font-bold uppercase tracking-wider rounded border border-gray-200 text-gray-500 hover:border-gold hover:text-gold transition" data-filter="type" data-value="Commercial Space">Commercial Space</button>
                <button class="filter-btn px-4 py-2 text-sm font-bold uppercase tracking-wider rounded border border-gray-200 text-gray-500 hover:border-gold hover:text-gold transition" data-filter="type" data-value="Plot">Plot</button>
                <button class="filter-btn px-4 py-2 text-sm font-bold uppercase tracking-wider rounded border border-gray-200 text-gray-500 hover:border-gold hover:text-gold transition" data-filter="type" data-value="Villa">Villa</button>
            </div>
            
            <div class="flex flex-wrap gap-2" id="city-filters">
                <button class="filter-btn active px-4 py-2 text-sm font-bold uppercase tracking-wider rounded bg-navy text-white transition" data-filter="city" data-value="all">All Cities</button>
                <button class="filter-btn px-4 py-2 text-sm font-bold uppercase tracking-wider rounded bg-gray-100 text-navy hover:bg-navy hover:text-white transition" data-filter="city" data-value="Jaipur">Jaipur</button>
                <button class="filter-btn px-4 py-2 text-sm font-bold uppercase tracking-wider rounded bg-gray-100 text-navy hover:bg-navy hover:text-white transition" data-filter="city" data-value="Kota">Kota</button>
                <button class="filter-btn px-4 py-2 text-sm font-bold uppercase tracking-wider rounded bg-gray-100 text-navy hover:bg-navy hover:text-white transition" data-filter="city" data-value="Mumbai">Mumbai</button>
                <button class="filter-btn px-4 py-2 text-sm font-bold uppercase tracking-wider rounded bg-gray-100 text-navy hover:bg-navy hover:text-white transition" data-filter="city" data-value="Ajmer">Ajmer</button>
            </div>
            
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            @foreach($deals as $deal)
            <div class="portfolio-card border border-gray-100 rounded-lg overflow-hidden bg-white shadow-sm hover:shadow-xl hover:border-gold transition duration-300 group transform hover:-translate-y-1" 
                 data-type="{{ $deal['type'] }}" data-city="{{ $deal['city'] }}">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ $deal['image_url'] }}" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1524492412937-b28074a47d70?w=600&q=80&fit=crop&auto=format';" alt="{{ $deal['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" loading="lazy">
                    <div class="absolute top-4 left-4 {{ $deal['type'] == 'Commercial Space' ? 'bg-blue-600' : ($deal['type'] == 'Plot' ? 'bg-green-600' : 'bg-gold') }} text-white text-xs font-bold px-3 py-1 uppercase tracking-wider rounded shadow">
                        {{ $deal['type'] }}
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div class="text-xs font-mono text-gray-500 uppercase tracking-wide">{{ $deal['city'] }}</div>
                        <div class="text-xs font-mono text-gray-500">{{ $deal['completion_year'] }}</div>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-2">{{ $deal['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $deal['description'] }}</p>
                    <div class="pt-4 border-t border-gray-100 flex justify-between items-center text-sm font-medium">
                        <span class="text-navy flex items-center gap-1">
                            <svg class="w-4 h-4 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
                            {{ $deal['area'] ?? $deal['area_sqft'] . ' sqft' }}
                        </span>
                        <span class="text-gold">{{ $deal['deal_value'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- No Results -->
        <div id="no-results" class="hidden text-center py-20 text-gray-500">
            <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <p class="text-lg">No properties found matching your criteria.</p>
        </div>

    </div>
</section>

<!-- Filter Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.portfolio-card');
        const buttons = document.querySelectorAll('.filter-btn');
        const noResults = document.getElementById('no-results');
        
        let currentType = 'all';
        let currentCity = 'all';

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const filterType = btn.getAttribute('data-filter');
                const filterValue = btn.getAttribute('data-value');

                // Update active classes
                document.querySelectorAll(`.filter-btn[data-filter="${filterType}"]`).forEach(b => {
                    if (filterType === 'type') {
                        b.classList.remove('bg-gold', 'text-navy', 'border-gold');
                        b.classList.add('bg-transparent', 'text-gray-500', 'border-gray-200');
                    } else {
                        b.classList.remove('bg-navy', 'text-white');
                        b.classList.add('bg-gray-100', 'text-navy');
                    }
                });

                if (filterType === 'type') {
                    btn.classList.add('bg-gold', 'text-navy', 'border-gold');
                    btn.classList.remove('bg-transparent', 'text-gray-500', 'border-gray-200');
                    currentType = filterValue;
                } else {
                    btn.classList.add('bg-navy', 'text-white');
                    btn.classList.remove('bg-gray-100', 'text-navy');
                    currentCity = filterValue;
                }

                // Filter logic
                let visibleCount = 0;
                cards.forEach(card => {
                    const matchType = currentType === 'all' || card.getAttribute('data-type') === currentType;
                    const matchCity = currentCity === 'all' || card.getAttribute('data-city') === currentCity;
                    
                    if (matchType && matchCity) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (visibleCount === 0) {
                    noResults.classList.remove('hidden');
                } else {
                    noResults.classList.add('hidden');
                }
            });
        });
    });
</script>

@endsection
