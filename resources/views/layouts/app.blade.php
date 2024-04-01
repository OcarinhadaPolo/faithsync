<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Nome da Sua Aplicação') }}</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        @vite('resources/css/app.css', 'resources/js/app.js')
    </head>
    <body>
    
        @if(Request::is('/'))
            @include('layouts.navbar')
        @endif
        @if(Request::is('dashboard'))
            @include('layouts.navbar-auth')
        @endif
        <main>
            @yield('content')
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

        
    </body>
</html>