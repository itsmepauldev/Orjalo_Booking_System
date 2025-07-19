<x-guest-layout>
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-violet-700">Create Account</h1>
        <p class="text-sm text-gray-500">Join Orjalo's Booking System</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input id="name" name="name" type="text" required autofocus autocomplete="name"
                class="mt-1 w-full rounded-lg border border-violet-300 p-2 focus:ring-2 focus:ring-violet-500 focus:outline-none text-gray-900"
                value="{{ old('name') }}">
            <x-input-error :messages="$errors->get('name')" class="mt-1 text-sm text-red-500" />
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input id="email" name="email" type="email" required autocomplete="email"
                class="mt-1 w-full rounded-lg border border-violet-300 p-2 focus:ring-2 focus:ring-violet-500 focus:outline-none text-gray-900"
                value="{{ old('email') }}">
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" name="password" type="password" required autocomplete="new-password"
                class="mt-1 w-full rounded-lg border border-violet-300 p-2 focus:ring-2 focus:ring-violet-500 focus:outline-none text-gray-900">
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-500" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required
                autocomplete="new-password"
                class="mt-1 w-full rounded-lg border border-violet-300 p-2 focus:ring-2 focus:ring-violet-500 focus:outline-none text-gray-900">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-sm text-red-500" />
        </div>

        <!-- Submit -->
        <div class="pt-2 flex justify-between items-center">
            <a href="{{ route('login') }}" class="text-sm text-violet-600 hover:underline">Already have an account?</a>
            <button type="submit"
                class="bg-violet-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-violet-700 transition">
                Register
            </button>
        </div>
    </form>
</x-guest-layout>