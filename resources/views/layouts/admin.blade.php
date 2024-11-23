<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts from Google -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-gray-100">

    <div x-data="{ open: false, dropdownOpen: false }" class="flex">
        <!-- Sidebar -->
        @include('components.admin.sidebar')

        <!-- Main Content -->
        <div :class="{ 'ml-16': open, 'lg:ml-72': true }" class="flex-1 transition-all duration-300">
            <!-- Navbar -->
            @include('components.admin.navbar')

            <!-- Main Dashboard Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

</body>

</html>