<x-guest-layout>
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-violet-700">Welcome</h1>
        <p class="text-sm text-gray-500">Login to Orjalo's Booking System</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-green-600" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                class="mt-1 w-full rounded-lg border border-violet-300 p-2 focus:ring-2 focus:ring-violet-500 focus:outline-none text-gray-900">
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="mt-1 w-full rounded-lg border border-violet-300 p-2 focus:ring-2 focus:ring-violet-500 focus:outline-none text-gray-900">
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox" name="remember"
                class="rounded border-gray-300 text-violet-600 shadow-sm focus:ring-violet-500">
            <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between pt-2">
            @if (Route::has('password.request'))
                <a class="text-sm text-violet-600 hover:underline" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif

            <button type="submit"
                class="bg-violet-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-violet-700 transition">
                Log in
            </button>
        </div>
    </form>
</x-guest-layout>