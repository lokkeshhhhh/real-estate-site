<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Real Estate Associate</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: '#B5882A',
                        navy: '#1A1A2E',
                    },
                    fontFamily: {
                        sans: ['"DM Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased bg-gray-50 flex h-screen overflow-hidden text-gray-800">

    <!-- Sidebar -->
    <aside class="w-64 bg-navy text-white flex flex-col">
        <div class="h-20 flex flex-col items-center justify-center border-b border-gray-700 bg-black/20">
            <x-logo variant="light" class="w-24" />
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded bg-gold/20 text-gold font-medium">
                Inquiries
            </a>
            <!-- Form for logout to prevent GET logout which Breeze doesn't allow by default -->
            <form method="POST" action="{{ route('logout') }}" class="mt-8">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 rounded text-gray-300 hover:bg-gray-800 hover:text-white transition">
                    Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col h-screen overflow-y-auto">
        <!-- Top bar -->
        <header class="h-16 bg-white border-b flex items-center justify-between px-8 shrink-0">
            <h1 class="text-xl font-semibold">Welcome, {{ auth()->user()->name }}</h1>
            <div class="text-gray-500">{{ \Carbon\Carbon::now()->format('l, j F Y') }}</div>
        </header>

        <!-- Content -->
        <main class="flex-1 p-8 bg-gray-50">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

</body>
</html>
