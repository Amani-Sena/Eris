<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config("app.name") }}</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">

        @guest
            <nav-component :guest="{{ json_encode(Auth::guest()) }}"></nav-component>
        @endguest

        @auth
            <nav-component :guest="{{ json_encode(Auth::guest()) }}" user_name="{{ Auth::user()->name }}" csrf_token="{{ @csrf_token() }}"></nav-component>
        @endauth
        
        <main class="py-4">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>

<script src="https://kit.fontawesome.com/0f25473561.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</html>