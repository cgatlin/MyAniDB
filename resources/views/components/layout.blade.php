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
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        
    </head>

    <body class="bg-black text-white">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/anime/winter">Winter</a></li>
                <li><a href="/anime/spring">Spring</a></li>
                <li><a href="/anime/summer">Summer</a></li>
                <li><a href="/anime/fall">Fall</a></li>
            </ul>
        </nav>
        {{ $slot }}
    </body>

</html>