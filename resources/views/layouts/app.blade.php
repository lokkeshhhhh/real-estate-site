<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Nestora')</title>
    
    <meta name="description" content="Rohit Kumawat — RERA registered real estate associate. JDA approved plots, villas, and commercial spaces in Jaipur, Kota, Ajmer, and Mumbai. 30+ deals closed.">
    <meta name="keywords" content="JDA approved plots jaipur, buy property jaipur, real estate kota rajasthan, villa jaipur, commercial property rajasthan, Rohit Kumawat nestora">
    <meta property="og:title" content="Nestora — Rohit Kumawat, Real Estate Associate Jaipur">
    <meta property="og:description" content="Trusted RERA-registered associate for JDA approved plots, villas, and commercial spaces across Jaipur, Kota, Ajmer and Mumbai.">
    <meta property="og:site_name" content="Nestora">
    <meta name="robots" content="index, follow">

    <!-- Favicon -->
    @hasSection('favicon')
        @yield('favicon')
    @else
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text x='50%' y='50%' font-family='serif' font-size='65' font-weight='bold' fill='%23B5882A' text-anchor='middle' dy='.35em'>N</text></svg>">
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Mono:wght@400;500&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: '#B5882A',
                        navy: '#1A1A2E',
                        sand: '#E8D5B7',
                        cream: '#F7F4EF',
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'serif'],
                        sans: ['"DM Sans"', 'sans-serif'],
                        mono: ['"DM Mono"', 'monospace'],
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply font-sans text-gray-800 bg-cream;
            }
            h1, h2, h3, h4, h5, h6 {
                @apply font-serif text-navy;
            }
        }
        @layer utilities {
            .perspective-1000 {
                perspective: 1000px;
            }
            .preserve-3d {
                transform-style: preserve-3d;
            }
            .backface-hidden {
                backface-visibility: hidden;
            }
            .rotate-y-180 {
                transform: rotateY(180deg);
            }
            .group:hover .group-hover\:rotate-y-180 {
                transform: rotateY(180deg);
            }
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col">

    <x-navbar />
    
    <x-flash-message />

    <main class="flex-grow">
        @yield('content')
    </main>

    <x-footer />

    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
