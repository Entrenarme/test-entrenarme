<!DOCTYPE html>
<html lang="es">

    <head>

        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Preguntas</title>

        <meta name="robots" content="noindex">

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.min.js"></script>
        <script src="{{ elixir('js/main.js')}}"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="{{ elixir('css/app.css') }}" rel='stylesheet' type='text/css'>

    </head>

    <body ng-app="main">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-offset-3 col-md-6">
                    <div class="pane">
                        <div class="header">
                            <h1>Buscador de preguntas</h1>
                        </div>
                        <div class="bodi">
                            <div ui-view></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
