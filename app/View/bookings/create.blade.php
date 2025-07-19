<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-white leading-tight">
            {{ __('Add Booking') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-900 min-h-screen text-white">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 p-6 rounded shadow-md">
                <form method="POST" action="{{ route('bookings.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-white">Title</label>
                        <input id="title" name="title" type="text" required
                            class="w-full mt-1 rounded bg-gray-700 border border-gray-600 text-white">
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-white">Description</label>
                        <textarea id="description" name="description" required rows="3"
                            class="w-full mt-1 rounded bg-gray-700 border border-gray-600 text-white"></textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-white">Date</label>
                        <input id="date" name="date" type="date" required
                            class="w-full mt-1 rounded bg-gray-700 border border-gray-600 text-white">
                        <x-input-error :messages="$errors->get('date')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <label for="time" class="block text-sm font-medium text-white">Time</label>
                        <input id="time" name="time" type="time" required
                            class="w-full mt-1 rounded bg-gray-700 border border-gray-600 text-white">
                        <x-input-error :messages="$errors->get('time')" class="mt-2" />
                    </div>

                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                        Save Booking
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>