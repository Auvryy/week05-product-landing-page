<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Studio5 Auto Detailing & Ceramic Coating | Showroom Perfection')</title>
    <meta name="description" content="Studio5 Auto Detailing & Ceramic Coating - Premium automotive protection, 9H nano-ceramic coating, and bespoke paint restoration.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|orbitron:600,800&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 font-sans antialiased selection:bg-rose-500 selection:text-white">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        @yield('content')
    </div>
</body>
</html>
