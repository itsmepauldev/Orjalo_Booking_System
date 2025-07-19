<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 text-white">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 p-6 space-y-6">
            <h2 class="text-2xl font-bold mb-6">Booking System</h2>
            <nav class="space-y-2">
                <a href="{{ route('dashboard') }}"
                    class="block py-2 px-4 rounded hover:bg-gray-700 {{ request()->routeIs('dashboard') ? 'bg-gray-700' : '' }}">Dashboard</a>
                <a href="{{ route('bookings.index') }}"
                    class="block py-2 px-4 rounded hover:bg-gray-700 {{ request()->routeIs('bookings.*') ? 'bg-gray-700' : '' }}">Bookings</a>
                <a href="{{ route('users.index') }}"
                    class="block py-2 px-4 rounded hover:bg-gray-700 {{ request()->routeIs('users.*') ? 'bg-gray-700' : '' }}">Users</a>
                <form method="POST" action="{{ route('logout') }}" class="mt-6">
                    @csrf
                    <button class="block w-full text-left py-2 px-4 rounded bg-red-600 hover:bg-red-700">Logout</button>
                </form>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-10">
            @isset($header)
                <h2 class="text-2xl font-semibold mb-6">{{ $header }}</h2>
            @endisset

            {{ $slot }}
        </main>
    </div>
</body>

</html>