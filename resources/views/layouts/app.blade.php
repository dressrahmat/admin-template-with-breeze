<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('../css/output.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/assets/images/logo.png') }}" type="image/png">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/js/flickity.min.css') }}" media="screen">

    <title>{{ config('app.name', 'Perpustakaan Digital PAHAM') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">

    {{ $slot }}

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="{{ asset('../assets/js/flickity.pkgd.min.js') }}"></script>

    <script src="{{ asset('../assets/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
