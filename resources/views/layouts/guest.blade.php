<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('images/library_icon.ico') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="body-bg h-screen bg-slate-600" style="font-family: 'Lato', sans-serif;">
        <nav class="bg-green-600 h-24 w-full border-b-8 border-yellow-500">
             <a href="/"><img src="{{ asset('images/Logo.png') }}" alt="Library Logo" class="inline-block w-80 px-4 py-6 md:w-96 md:p-4"></a> 
        </nav>
        <div class="pt-10 md:pt-16 pb-6 px-2 md:px-0 font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body> 
</html>
