<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Orjalo's Booking</title>

    <!-- Use the latest Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-violet-50 text-gray-800 min-h-screen flex items-center justify-center">

    <div class="text-center p-8 bg-white shadow-lg rounded-2xl border border-violet-100 max-w-md w-full">
        <h1 class="text-3xl font-bold text-violet-700 mb-4">
            Welcome to the Orjalo's Booking System
        </h1>

        <p class="mb-6 text-gray-600">Please choose an option below to continue.</p>

        <div class="flex justify-center space-x-4">
            <a href="{{ route('register') }}"
                class="bg-violet-600 text-white px-5 py-2 rounded hover:bg-violet-700 transition">
                Register
            </a>
            <a href="{{ route('login') }}"
                class="bg-white border border-violet-600 text-violet-700 px-5 py-2 rounded hover:bg-violet-100 transition">
                Login
            </a>
        </div>
    </div>

</body>

</html>