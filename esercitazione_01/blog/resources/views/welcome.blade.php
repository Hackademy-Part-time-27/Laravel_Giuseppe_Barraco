<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <nav style="display: flex; flex: warp; justify-content: space-between;">
            <div style="display: flex; flex: warp;">
                <a href="http://127.0.0.1:8000/">Homepage</a>
            </div>
            <div style="display: flex; flex: warp;">
                <a href="http://127.0.0.1:8000/contatti">Contatti</a>
            </div>
            <div  style="display: flex; flex: warp;">
                <a href="http://127.0.0.1:8000/chi-sono">Chi Sono</a>
            </div>
        </nav>
        <div style="display: flex; justify-content: center">
            <h1>Benvenuto</h1>
        </div>
    </body>
</html>
