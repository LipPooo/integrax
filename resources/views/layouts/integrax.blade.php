<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Integrax Berhad — Powering sustainable infrastructure for Malaysia and beyond. Marine services, infrastructure, and energy solutions.">

    <title>@yield('title', 'Integrax Berhad') — Powering Sustainable Infrastructure</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:300,400,500,600,700,800" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="font-sans overflow-x-hidden">
    @yield('content')
    <x-announcement-notification :announcements="$announcements ?? []" />
</body>
</html>
