<x-layout>
    
    <h1 class="titolo">{{ $article['title'] }}</h1>
    <div class="categoria">{{ $article['category'] }}</div>
    <div class="descrizione">{{ $article['description'] }}</div>
    <div><a href="{{ route ('articoli') }}">Torna indietro <-</a>

</x-layout>