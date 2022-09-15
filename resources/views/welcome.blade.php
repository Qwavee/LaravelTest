<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
        <script defer src="{{ mix('js/app.js') }}"></script>
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
        <v-app app>
            <layout-component></layout-component>
        </v-app>
        </div>
    </body>
</html>
