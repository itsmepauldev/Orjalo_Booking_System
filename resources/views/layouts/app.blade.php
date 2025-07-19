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

<body class="font-sans antialiased bg-violet-50 text-gray-800 min-h-screen">
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-violet-950 p-6 text-violet-100 space-y-6 shadow-md">
            <h2 class="text-2xl font-extrabold mb-6 tracking-wide">Orjalo</h2>

            <nav class="space-y-2 text-sm">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}"
                    class="block px-3 py-2 rounded-lg hover:bg-violet-300 {{ request()->routeIs('dashboard') ? 'bg-violet-300 font-semibold' : '' }}">
                    Dashboard
                </a>

                <!-- Add Booking -->
                <a href="{{ route('bookings.create') }}"
                    class="block px-3 py-2 rounded-lg hover:bg-violet-300 {{ request()->routeIs('bookings.create') ? 'bg-violet-300 font-semibold' : '' }}">
                    Add Booking
                </a>

                <!-- Bookings List -->
                <a href="{{ route('bookings.index') }}"
                    class="block px-3 py-2 rounded-lg hover:bg-violet-300 {{ request()->routeIs('bookings.index') ? 'bg-violet-300 font-semibold' : '' }}">
                    Bookings
                </a>

                <!-- Users -->
                <a href="{{ route('users.index') }}"
                    class="block px-3 py-2 rounded-lg hover:bg-violet-300 {{ request()->routeIs('users.*') ? 'bg-violet-300 font-semibold' : '' }}">
                    Users
                </a>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-3 py-2 rounded-lg hover:bg-violet-300">
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6 flex flex-col space-y-6">
            @isset($header)
                <header class="bg-violet-600 text-white shadow p-4 rounded-xl">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold text-lg">Welcome, {{ Auth::user()->name }}</span>

                        <!-- Notification Bell -->
                        <div class="relative">
                            <button id="notifBtn" class="relative focus:outline-none">
                                <!-- Bell Icon -->
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                @if($bookings->count() > 0)
                                    <span
                                        class="absolute -top-1 -right-1 px-1 py-0.5 text-xs font-bold text-white bg-red-600 rounded-full">
                                        {{ $bookings->count() }}
                                    </span>
                                @endif
                            </button>

                            <!-- Notification Dropdown -->
                            <div id="notifDropdown"
                                class="hidden absolute right-0 mt-2 w-72 bg-white text-gray-800 rounded-lg shadow-lg z-50 border border-gray-200 text-sm">
                                <div class="px-4 py-2 font-semibold border-b border-gray-200">Booking Notifications</div>
                                <ul class="max-h-60 overflow-y-auto">
                                    @forelse($bookings as $booking)
                                        <li class="px-4 py-2 hover:bg-violet-100 border-b border-gray-100">
                                            <div class="font-medium">{{ $booking->title }}</div>
                                            <div class="text-gray-500 text-sm">
                                                {{ \Carbon\Carbon::parse($booking->date)->format('F j, Y') }}
                                                at {{ \Carbon\Carbon::parse($booking->time)->format('g:i A') }}
                                            </div>
                                        </li>
                                    @empty
                                        <li class="px-4 py-2 text-gray-500">No bookings yet.</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const notifBtn = document.getElementById('notifBtn');
            const notifDropdown = document.getElementById('notifDropdown');

            notifBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                notifDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', function (e) {
                if (!notifDropdown.contains(e.target)) {
                    notifDropdown.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>