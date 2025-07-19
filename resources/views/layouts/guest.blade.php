<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Orjalo's Booking</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- If using Vite --}}
</head>

<body class="bg-violet-50 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md mx-auto p-6 bg-white rounded-2xl shadow-xl border border-violet-100">
        {{ $slot }}
    </div>

</body>

</html>