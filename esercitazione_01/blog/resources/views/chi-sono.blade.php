<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav style="display: flex; flex: wrap; justify-content: space-between;">
        <div style="display: flex; flex: wrap;">
                <a href="http://127.0.0.1:8000/">Homepage</a>
        </div>
        <div style="display: flex; flex: wrap;">
                <a href="http://127.0.0.1:8000/contatti">Contatti</a>
        </div>
        <div  style="display: flex; flex: wrap;">
                <a href="http://127.0.0.1:8000/chi-sono">Chi Sono</a>
        </div>
    </nav>
    <div style="display: grid; justify-content: center">
        <h1>{{ $title }}</h1>
        <div style="display: flex; flex-wrap: wrap; align-items: end">{{ $description }}</div>
    </div>
</body>
</html>