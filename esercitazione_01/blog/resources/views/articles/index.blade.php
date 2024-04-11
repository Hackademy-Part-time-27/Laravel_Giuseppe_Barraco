<x-layout title="Articoli">
    <div class="row">
        <div class="col-md-6">
            <h1>Articoli</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('articles.create') }}" class="btn btn-success">Crea articolo</a>
        </div>
    </div>

    <x-successo />

    <div class="mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titolo</th>
                    <th>Categoria</th>
                    <th>Visibile</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td class="text-end">
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-secondary">modifica</a>
                    <form class="d-inline ms-2" action="{{ route('articles.destroy', $article) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</x-layout>