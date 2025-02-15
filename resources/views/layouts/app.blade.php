<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Digizen') }}</title>

    <!-- Fonts -->
    <link rel="icon" href="{{ asset('dz-logo-white.png') }}" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxStyles
</head>

<body class="flex flex-col min-h-screen font-sans antialiased bg-white dark:bg-zinc-900">
    <!-- Primary nav bar & it's responsive sidebar -->
    <livewire:layout.primary-navigation />
    <livewire:layout.primary-sidebar />

    <!-- Glowing Blob -->
    <div class="absolute top-1/4 right-1/4 w-96 h-96 dark:lg:bottom-1/4 dark:lg:right-1/4 dark:bottom-3/4 dark:right-1/2 dark:lg:w-96 dark:lg:h-96 dark:h-48 dark:w-48 bg-amber-100 blur-[150px] animate-pulse opacity-40 rounded-full"
        style="pointer-events: none;">
    </div>

    <!-- Main -->
    <main class="flex-grow w-full py-3">
        {{ $slot }}
    </main>

    <!-- Footer -->
    @if (request()->routeIs('contact') || request()->routeIs('pricing') || request()->routeIs('privacy') || request()->routeIs('terms')) 
        <livewire:layout.footer-2 />
    @else
        <livewire:layout.footer />
    @endIf

    @fluxScripts

    @persist('toast')
        <flux:toast />
    @endpersist
</body>

{{-- Wire navigate bug fix for dropdown links --}}
<script>
    document.addEventListener("livewire:navigate", () => {
        const htmlElement = document.documentElement;
        if (htmlElement.hasAttribute("style")) {
            htmlElement.removeAttribute("style");
        }
    });
</script>

</html>
