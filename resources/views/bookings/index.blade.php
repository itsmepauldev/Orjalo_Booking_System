<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-violet-800 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-violet-50 min-h-screen text-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <!-- Success Message -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg shadow">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Bookings Table -->
            <div class="overflow-x-auto bg-white p-6 rounded-2xl shadow-lg border border-violet-100">
                <table class="min-w-full text-left text-sm text-gray-700">
                    <thead>
                        <tr class="text-violet-700 border-b border-violet-200">
                            <th class="px-4 py-3 font-semibold">Title</th>
                            <th class="px-4 py-3 font-semibold">Description</th>
                            <th class="px-4 py-3 font-semibold">Date</th>
                            <th class="px-4 py-3 font-semibold">Time</th>
                            <th class="px-4 py-3 font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
                            <tr class="border-b border-violet-100 hover:bg-violet-50 transition">
                                <td class="px-4 py-3">{{ $booking->title }}</td>
                                <td class="px-4 py-3">{{ $booking->description }}</td>
                                <td class="px-4 py-3">{{ $booking->date }}</td>
                                <td class="px-4 py-3">{{ $booking->time }}</td>
                                <td class="px-4 py-3 flex flex-wrap gap-2">
                                    <a href="{{ route('bookings.edit', $booking->id) }}"
                                        class="bg-yellow-400 text-black px-3 py-1 rounded-lg hover:bg-yellow-500 transition">
                                        Edit
                                    </a>
                                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this booking?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-6 text-center text-violet-400">No bookings found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>