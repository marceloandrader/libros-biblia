<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Libros de la Biblia :: Iglesia Alianza El Batán</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/master.css">
</head>
<body>
    <div class="container">
        @yield('content')
        <div class="footer">
            <div class="row">
                <div class="col-md-12">Desarrollado por <a href="http://about.me/marceloandrade" target="_blank">Marcelo Andrade</a> para la exposición Museo de la Biblia por parte de Iglesia Alianza El Batán (Quito - Ecuador)</div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js"></script>
    <script type="text/javascript" src="scripts/app.js"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-6353164-3']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>
</html>
