@props ([
    'title' => 'MyAniDB',
])


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        
        <!-- Styles / Scripts -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
        <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
        
    </head>

    <body class="bg-black text-white">
        <div class="top-nav">
            <div class="logo">
                <a href="/">MyAniDB</a>
            </div>
            <div class="seasons">
                <a href="/winter/{{ date('Y') }}">Winter - <span>{{ date('Y') }}</span></a>
                <a href="/spring/{{ date('Y') }}">Spring - <span>{{ date('Y') }}</span></a>
                <a href="/summer/{{ date('Y') }}">Summer - <span>{{ date('Y') }}</span></a>
                <a href="/fall/{{ date('Y') }}">Fall - <span>{{ date('Y') }}</span></a>
            </div>

            
        </div>
        <span class="main-content">
        {{ $slot }}
        </span>
    </body>
    <footer>
        <a href="/about">About Us</a>
    </footer>

</html>