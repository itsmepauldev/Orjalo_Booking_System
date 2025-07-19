<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-violet-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-violet-50 min-h-screen text-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            @if(session('success'))
                <div class="bg-green-100 border border-green-300 text-green-800 p-4 rounded shadow">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto bg-white p-6 rounded-2xl shadow border border-violet-100">
                <table class="min-w-full text-left text-sm">
                    <thead>
                        <tr class="text-violet-700 border-b border-violet-200">
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr class="border-b border-violet-100 hover:bg-violet-100/40">
                                <td class="px-4 py-3">{{ $user->name }}</td>
                                <td class="px-4 py-3">{{ $user->email }}</td>
                                <td class="px-4 py-3 flex gap-2">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="bg-yellow-400 text-black px-3 py-1 rounded hover:bg-yellow-500 transition">
                                        Edit
                                    </a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-4 py-4 text-center text-gray-500">
                                    No users found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>