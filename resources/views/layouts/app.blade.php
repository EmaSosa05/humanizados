<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ config("app.name", "Humanizados") }}</title>
        
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>

        @include("inc.navbar")
<<<<<<< HEAD

        @yield("content")
        
        @yield("interviews")

        @include("inc.footer")

=======
        <section class="hero">
            <div class="content">
                @yield("content")
            </div>
        </section>
        <section id="entrevistas">
            @yield("entrevistas")
        </section>
        <footer class="footer">Tu vieja</footer>
>>>>>>> c3a7e79f2514d3608c2e403209a0c23585b8658d
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>
