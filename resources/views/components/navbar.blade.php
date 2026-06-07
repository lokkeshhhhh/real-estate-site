<nav x-data="{ open: false }" class="bg-navy border-b border-gray-800 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                    <x-logo variant="light" class="h-8 w-auto" />
                </a>
            </div>
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a href="{{ route('home') }}" class="text-cream hover:text-gold transition font-medium text-sm uppercase tracking-wider">Home</a>
                <a href="{{ route('portfolio') }}" class="text-cream hover:text-gold transition font-medium text-sm uppercase tracking-wider">Portfolio</a>
                <a href="{{ route('process') }}" class="text-cream hover:text-gold transition font-medium text-sm uppercase tracking-wider">Process</a>
                <a href="{{ route('legalities') }}" class="text-cream hover:text-gold transition font-medium text-sm uppercase tracking-wider">Legalities</a>
                <a href="{{ route('locations') }}" class="text-cream hover:text-gold transition font-medium text-sm uppercase tracking-wider">Locations</a>
                <a href="{{ route('about') }}" class="text-cream hover:text-gold transition font-medium text-sm uppercase tracking-wider">About</a>
                <a href="{{ route('contact') }}" class="bg-gold hover:bg-yellow-600 text-navy font-bold py-2 px-5 rounded transition text-sm uppercase tracking-wider">Get in Touch</a>
            </div>
            
            <div class="flex items-center md:hidden">
                <button @click="open = !open" type="button" class="text-gold hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" style="display: none;" class="md:hidden bg-navy pb-4 pt-2 border-t border-gray-800">
        <div class="px-2 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 text-cream hover:bg-gray-800 rounded font-medium">Home</a>
            <a href="{{ route('portfolio') }}" class="block px-3 py-2 text-cream hover:bg-gray-800 rounded font-medium">Portfolio</a>
            <a href="{{ route('process') }}" class="block px-3 py-2 text-cream hover:bg-gray-800 rounded font-medium">Process</a>
            <a href="{{ route('legalities') }}" class="block px-3 py-2 text-cream hover:bg-gray-800 rounded font-medium">Legalities</a>
            <a href="{{ route('locations') }}" class="block px-3 py-2 text-cream hover:bg-gray-800 rounded font-medium">Locations</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-cream hover:bg-gray-800 rounded font-medium">About</a>
            <a href="{{ route('contact') }}" class="block mt-4 px-3 py-2 bg-gold text-navy font-bold rounded text-center mx-2">Get in Touch</a>
        </div>
    </div>
</nav>
