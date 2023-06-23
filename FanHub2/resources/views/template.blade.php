<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>{{ $pageTitle }}</title>
                @vite('resources/css/app.css')
<!--                 <link href="style/cdn.jsdelivr.net_npm_daisyui%403.1.0_dist_full.css" rel="stylesheet" type="text/css" />
                <script src="style/cdn.tailwindcss.com_3.3.2.js"></script> -->

                {{-- Insert icon here --}}
                <link rel="icon" href="{{url("favicon.ico")}}">

                {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}
        </head>
        <body data-theme="light">
                
                <header class="sticky top-0 z-50">
                        @yield("header")
                </header>
                
                <main>
                        @yield("content")
                </main>
                
                <footer>
                        @yield("footer")
                </footer>
                
                <!-- <script src="path/to/your/script.js"></script> -->
        </body>
</html>