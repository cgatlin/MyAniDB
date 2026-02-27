@props ([
    'title' => 'MyAniDB',
])


<!DOCTYPE html>
<html lang="en" data-theme="forest">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        
        <!-- Styles / Scripts -->
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
     
        
    </head>

    <body class="bg-black text-white">
        <x-navbar />
        
        <span class="main-content">
            {{ $slot }}
        </span>
    </body>
    <footer>
        <a href="/about">About Us</a>
    </footer>

</html>