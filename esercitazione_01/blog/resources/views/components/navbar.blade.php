<!--<nav class="navbar">
            <div style="display: flex; flex: wrap;">
                <a href="{{ route ('homepage') }}">Homepage</a>
            </div>
            <div style="display: flex; flex: wrap;">
                <a href="{{ route ('articoli') }}">Articoli</a>
            </div>
            <div style="display: flex; flex: wrap ;">
                <a href="{{ route ('contatti') }}">Contatti</a>
            </div>
            <div  style="display: flex; flex: wrap ;">
                <a href="{{ route ('chi-sono') }}">Chi Sono</a>
            </div>
        </nav>-->

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('homepage') }}">
        <!--<img class="me-2" src="{{ asset('img/logo.svg') }}" alt="{{ config('app.name') }}">-->
        <strong>{{ config('app.name') }}</strong>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('homepage') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articoli') }}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('chi-sono') }}">Chi Sono</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contatti') }}">Contatti</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @auth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->email }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{ route('account.index') }}">Gestione Account</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('articles.index') }}">Gestione Articoli</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('categories.index') }}">Gestione Categorie</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Esci</button>
                  </form>
                </li>
              </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/register">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Accedi</a>
          </li>
        @endauth
      </ul>
      </div>
    </div>
  </nav>