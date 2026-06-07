<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
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
<body class="bg-gray-100 h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 md:p-10 rounded-lg shadow-xl border border-gray-200 max-w-md w-full">
        
        <div class="text-center mb-10 flex flex-col items-center">
            <x-logo class="w-32 mb-4" />
            <p class="text-gray-500 font-medium tracking-wide">Associate Dashboard Login</p>
        </div>

        <!-- Session Status -->
        @if(session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                       class="w-full border border-gray-300 rounded px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                       class="w-full border border-gray-300 rounded px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-8">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-gold shadow-sm focus:ring-gold">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <button type="submit" class="w-full bg-navy text-gold font-bold py-3 px-4 rounded hover:bg-gray-900 transition uppercase tracking-wider shadow-lg">
                Log in
            </button>
        </form>
    </div>

</body>
</html>
