@props([
    'title' => null,
    'description' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ? $title.' — au2m8' : 'au2m8 — Web application development' }}</title>
        <meta name="description" content="{{ $description ?? 'au2m8 is a web application development studio in Urdaneta City, Philippines. We design, build, and support custom web systems.' }}">

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-sand-50 font-sans text-ink-900 antialiased">
        <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-100 focus:rounded-full focus:bg-brand-500 focus:px-5 focus:py-2 focus:text-sm focus:font-semibold focus:text-ink-950">
            Skip to content
        </a>

        <x-site.navbar />

        <main id="main">
            {{ $slot }}
        </main>

        <x-site.footer />
    </body>
</html>
