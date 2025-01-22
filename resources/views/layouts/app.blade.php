<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxStyles
</head>

<body class="font-sans antialiased min-h-screen flex flex-col bg-white dark:bg-zinc-800">
    <!-- Navigation Bar -->
    <livewire:layout.navigation />

    <!-- Page Content -->
    <main class="flex-grow w-full py-6">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="w-full border-t bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <livewire:layout.footer />
    </footer>

    @fluxScripts

    @persist('toast')
        <flux:toast />
    @endpersist
</body>

</html>
