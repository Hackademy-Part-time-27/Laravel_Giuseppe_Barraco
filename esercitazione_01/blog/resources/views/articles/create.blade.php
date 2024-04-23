<x-layout>
    <div class="titolo">
        <h1>Crea Articolo</h1>
    </div>

    <x-successo/>

    <x-errore/>

    <div class="mt-5">
                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title">Titolo</label>
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror" maxlength="150" value="{{ old('title') }}">
                            @error('title') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="categories">Categoria</label>
                            @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" name="categories[]" type="checkbox" value="{{ $category->id }}">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $category->name }}
                                </label>
                            </div>
                            @endforeach
                            @error('categories') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="description">Descrizione breve</label>
                            <textarea name="description" id="description"
                                class="form-control @error('description') is-invalid @enderror"
                                rows="5" maxlength="255">{{ old('description') }}</textarea>
                            @error('description') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="image">Immagine</label>
                            <input type="file" name="image" id="image"
                                class="form-control @error('image') is-invalid @enderror">
                            @error('image') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Crea</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>