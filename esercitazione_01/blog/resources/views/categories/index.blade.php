<x-layout>
    <h1>Elenco Categorie</h1>

    </div>
        <div class="col-lg-6 text-end">
            <a href="{{ route('categories.create') }}" class="btn btn-success">Crea Categoria</a>
        </div>
    </div>

    <x-successo/>

    <table class="table table-bordered mt-5">
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <ul>
                        @foreach($category->articles as $article)
                        <li><a href="{{ route('article', $article) }}" target="_blank">{{ $article->title }}</a></li>
                        @endforeach
                    </ul>
                </td>
                <td class="text-end">
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-secondary btn-sm">modifica</a>
                    <form class="d-inline ms-2" action="{{ route('categories.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>