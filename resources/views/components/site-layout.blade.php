@props(['title' => 'PawYou'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | {{ config('app.name', 'PawYou') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gradient-to-b from-emerald-50 to-white text-gray-800">
    <div class="min-h-screen flex flex-col">

        {{-- Public site navigation --}}
        <nav class="bg-white border-b border-emerald-100 shadow-sm">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 text-emerald-700 font-bold text-xl">
                        <span>🐾</span> PawYou
                    </a>

                    <div class="hidden sm:flex sm:items-center sm:space-x-6 text-sm font-medium">
                        <a href="{{ route('home') }}" class="pb-1 border-b-2 {{ request()->routeIs('home') ? 'text-emerald-700 border-amber-400' : 'text-gray-600 border-transparent hover:text-emerald-700' }}">Home</a>
                        <a href="{{ route('about') }}" class="pb-1 border-b-2 {{ request()->routeIs('about') ? 'text-emerald-700 border-amber-400' : 'text-gray-600 border-transparent hover:text-emerald-700' }}">About</a>
                        <a href="{{ route('services') }}" class="pb-1 border-b-2 {{ request()->routeIs('services') ? 'text-emerald-700 border-amber-400' : 'text-gray-600 border-transparent hover:text-emerald-700' }}">Services</a>
                        <a href="{{ route('pets.index') }}" class="pb-1 border-b-2 {{ request()->routeIs('pets.*') ? 'text-emerald-700 border-amber-400' : 'text-gray-600 border-transparent hover:text-emerald-700' }}">Pets</a>
                        <a href="{{ route('contact') }}" class="pb-1 border-b-2 {{ request()->routeIs('contact') ? 'text-emerald-700 border-amber-400' : 'text-gray-600 border-transparent hover:text-emerald-700' }}">Contact</a>

                        @auth
                            <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-emerald-700">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-emerald-700">Log in</a>
                            <a href="{{ route('register') }}" class="px-3 py-1.5 rounded-md bg-amber-500 text-emerald-950 font-semibold hover:bg-amber-400 transition">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        {{-- Optional page header (named slot) --}}
        @isset($header)
            <header class="bg-white border-b border-emerald-100">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    {{ $header }}
                </div>
            </header>
        @endisset

        {{-- Main page content (default slot) --}}
        <main class="flex-1 max-w-6xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-10">
            {{ $slot }}
        </main>

        <footer class="bg-white border-t border-emerald-100 text-center text-sm text-gray-500 py-6">
            &copy; {{ date('Y') }} PawYou. Made with care for pets and their people.
        </footer>
    </div>
</body>
</html>
