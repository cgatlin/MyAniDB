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
                <a href="/anime/winter">Winter</a>
                <a href="/anime/spring">Spring</a>
                <a href="/anime/summer">Summer</a>
                <a href="/anime/fall">Fall</a>
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