<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-straight/css/uicons-thin-straight.css'>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config("app.name") }}</title>
    
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
        
        <main>
            <hero-component></hero-component>
            <service-component></service-component>
            <brand-component></brand-component>
            <book-component csrf_token="{{ @csrf_token() }}"></book-component>
        </main>

        @include('partials.footer')
    </div>
</body>

<script src="https://kit.fontawesome.com/0f25473561.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</html>