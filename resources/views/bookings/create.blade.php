<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-violet-800 leading-tight">
            {{ __('Add Booking') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-violet-50 min-h-screen text-gray-800">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-violet-100">
                <form method="POST" action="{{ route('bookings.store') }}" class="space-y-6">
                    @csrf

                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-violet-700">Title</label>
                        <input id="title" name="title" type="text" required
                            class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-violet-500 focus:border-violet-500 bg-violet-50 text-gray-900">
                        <x-input-error :messages="$errors->get('title')" class="mt-2 text-sm text-red-500" />
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-violet-700">Description</label>
                        <textarea id="description" name="description" rows="4" required
                            class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-violet-500 focus:border-violet-500 bg-violet-50 text-gray-900"></textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2 text-sm text-red-500" />
                    </div>

                    <!-- Date -->
                    <div>
                        <label for="date" class="block text-sm font-medium text-violet-700">Date</label>
                        <input id="date" name="date" type="date" required
                            class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-violet-500 focus:border-violet-500 bg-violet-50 text-gray-900">
                        <x-input-error :messages="$errors->get('date')" class="mt-2 text-sm text-red-500" />
                    </div>

                    <!-- Time -->
                    <div>
                        <label for="time" class="block text-sm font-medium text-violet-700">Time</label>
                        <input id="time" name="time" type="time" required
                            class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-violet-500 focus:border-violet-500 bg-violet-50 text-gray-900">
                        <x-input-error :messages="$errors->get('time')" class="mt-2 text-sm text-red-500" />
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="inline-flex items-center px-6 py-2 bg-violet-600 hover:bg-violet-700 text-white font-semibold rounded-xl shadow">
                            Save Booking
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>