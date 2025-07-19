<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-violet-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="py-10 bg-violet-50 min-h-screen text-gray-800">
        <div class="max-w-xl mx-auto px-4 space-y-6 bg-white p-6 rounded-2xl shadow border border-violet-100">

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label class="block mb-1 text-sm font-medium text-violet-700">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}"
                        class="w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-violet-400">
                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 mt-4 text-sm font-medium text-violet-700">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}"
                        class="w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-violet-400">
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <button type="submit"
                        class="bg-violet-600 text-white px-4 py-2 rounded hover:bg-violet-700 transition">
                        Update
                    </button>
                    <a href="{{ route('users.index') }}" class="text-violet-700 hover:underline ml-2">
                        Cancel
                    </a>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>