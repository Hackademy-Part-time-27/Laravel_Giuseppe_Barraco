<x-layout>
    <h1 class="titolo">Articoli</h1>

    <div class="articoli">
        @if($articles)
            @foreach($articles as $index => $article)
                @if($article['visible'])
                    <x-card 
                    :category="$article['category']"
                    :title="$article['title']"
                    :description="$article['description']"
                    :index="$index"
                    :route="route('article', $index)"
                    />
                @endif
            @endforeach
        @else
        <p>Nessun articolo disponibile</p>
        @endif
    </div>    
    </x-layout>