<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-violet-800 leading-tight">
            {{ __('Edit Booking') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-violet-50 min-h-screen text-gray-800">
        <div class="max-w-xl mx-auto px-4">
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-violet-100">

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg mb-6 text-sm">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('bookings.update', $booking->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div>
                        <label class="block text-sm font-medium text-violet-700">Title</label>
                        <input type="text" name="title" value="{{ old('title', $booking->title) }}"
                            class="mt-1 w-full px-4 py-2 rounded-xl border border-gray-300 bg-violet-50 text-gray-900 focus:ring-violet-500 focus:border-violet-500"
                            required>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-violet-700">Description</label>
                        <textarea name="description" rows="4"
                            class="mt-1 w-full px-4 py-2 rounded-xl border border-gray-300 bg-violet-50 text-gray-900 focus:ring-violet-500 focus:border-violet-500"
                            required>{{ old('description', $booking->description) }}</textarea>
                    </div>

                    <!-- Date -->
                    <div>
                        <label class="block text-sm font-medium text-violet-700">Date</label>
                        <input type="date" name="date" value="{{ old('date', $booking->date) }}"
                            class="mt-1 w-full px-4 py-2 rounded-xl border border-gray-300 bg-violet-50 text-gray-900 focus:ring-violet-500 focus:border-violet-500"
                            required>
                    </div>

                    <!-- Time -->
                    <div>
                        <label class="block text-sm font-medium text-violet-700">Time</label>
                        <input type="time" name="time" value="{{ old('time', $booking->time) }}"
                            class="mt-1 w-full px-4 py-2 rounded-xl border border-gray-300 bg-violet-50 text-gray-900 focus:ring-violet-500 focus:border-violet-500"
                            required>
                    </div>

                    <!-- Actions -->
                    <div class="flex justify-between items-center pt-4">
                        <button type="submit"
                            class="bg-violet-600 hover:bg-violet-700 text-white px-5 py-2 rounded-xl shadow">
                            Update Booking
                        </button>
                        <a href="{{ route('bookings.index') }}" class="text-violet-600 hover:underline text-sm">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>