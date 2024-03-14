<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articolo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar">
        <div style="display: flex; flex: wrap;">
                <a href="{{ route ('homepage') }}">Homepage</a>
        </div>
        <div style="display: flex; flex: wrap;">
                <a href="{{ route ('articoli') }}">Articoli</a>
        </div>
        <div style="display: flex; flex: wrap;">
                <a href="{{ route ('contatti') }}">Contatti</a>
        </div>
        <div  style="display: flex; flex: wrap;">
                <a href="{{ route ('chi-sono') }}">Chi Sono</a>
        </div>
    </nav>
    
    <h1 class="titolo">{{ $article['title'] }}</h1>
    <div class="categoria">{{ $article['category'] }}</div>
    <div class="descrizione">{{ $article['description'] }}</div>
    <div><a href="{{ route ('articoli') }}">Torna indietro <-</a>

  
</body>
</html>