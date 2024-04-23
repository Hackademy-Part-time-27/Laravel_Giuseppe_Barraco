<x-layout title="Modifica Articolo">
    <a href="{{ route('articles.index') }}">indietro</a>
    <h1>Modifica Articolo</h1>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('articles.update', $article) }}" class="mt-5" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $article->title) }}">
                @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                            <label for="categories">Categoria</label>
                            @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input"
                                    @checked($article->categories->contains($category->id))
                                    name="categories[]"
                                    type="checkbox" value="{{ $category->id }}">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $category->name }}
                                </label>
                            </div>
                            @endforeach
                            @error('categories') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                        </div>
            <div class="col-12">
                <label for="body">Corpo</label>
                <textarea name="body" id="body" class="form-control" rows="15">{{ old('body', $article->body) }}</textarea>
                @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </div>
    </form>
</x-layout>