<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Stage 3</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>


        {{------------------------------------------------------- HEADER -------------------------------------------------------}}
        <x-header></x-header>


        {{------------------------------------------------------- HEADER -------------------------------------------------------}}


        {{------------------------------------------------------- CONTENT -------------------------------------------------------}}
        @yield('main')
        {{------------------------------------------------------- CONTENT -------------------------------------------------------}}

        {{------------------------------------------------------- FOOTER -------------------------------------------------------}}
        <x-footer></x-footer>
        {{------------------------------------------------------- FOOTER -------------------------------------------------------}}

        <script>
            $('#myAlert').on('closed.bs.alert', function () {
                close.bs.alert
            })
        </script>

    </body>

</html>
