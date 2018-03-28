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
        <section class="hero">
            <div class="content">
                @yield("content")
            </div>
        </section>
        <section id="entrevistas">
            @yield("entrevistas")
        </section>
        <footer class="footer">Tu vieja</footer>
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>
