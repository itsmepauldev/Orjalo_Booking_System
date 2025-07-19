<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-violet-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-violet-50 min-h-screen p-6">
        <div class="w-full h-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Total Users Card -->
                <div class="bg-violet-100 shadow-md rounded-2xl p-6 border border-violet-200">
                    <h3 class="text-lg font-bold text-violet-700 mb-2">Total Users</h3>
                    <p class="text-3xl text-violet-900 font-bold">{{ $totalUsers }}</p>
                </div>

                <!-- Total Bookings Card -->
                <div class="bg-violet-100 shadow-md rounded-2xl p-6 border border-violet-200">
                    <h3 class="text-lg font-bold text-violet-700 mb-2">Total Bookings</h3>
                    <p class="text-3xl text-violet-900 font-bold">{{ $totalBookings }}</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>