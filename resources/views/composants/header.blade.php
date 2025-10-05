

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img class="border-primary rounded-circle" src="{{ asset('images/moi.png') }}" alt="Photo">
            <a class="navbar-brand" href="#">Baptiste Wentzler</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('fun') }}">Fun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('cv') }}">Mon CV</a>
                    </li>
                    @if(Route::currentRouteName() == 'cv')
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('pdf') }}"><img src="{{ asset('images/download.webp') }}" class="rounded-circle"></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
