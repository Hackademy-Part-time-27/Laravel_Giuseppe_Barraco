<x-layout>
    <div class="titolo">
        <h1>Contatti</h1>
    </div>

    <x-successo/>

    <x-errore/>

    <form action="{{ route('contatti.send') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="message">Messaggio</label>
                        <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Invia</button>
                    </div>
                </div>
            </form>
</x-layout>