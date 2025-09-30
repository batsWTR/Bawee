@extends('layout')



@section('main')
    <div class="fun">
        <h4>Mes livres</h4>
        <section class="livre d-flex flex-row justify-content-around">
            <div class="d-flex flex-column">
                <img src="{{ asset('images/livre/le_probleme_a_trois_corps.jpg') }}" class="img-fluid">
                <a href="#" target="_blank">Le problème à trois corps</a>
            </div>
            <div class="d-flex flex-column">
                <img src="{{ asset('images/livre/werber.jpg') }}" class="img-fluid">
                <a href="#" target="_blank">L'encyclopédie du savoir relatif et absolue</a>
            </div>

        </section>
        <h4>Mes films</h4>
        <section class="film d-flex flex-row justify-content-around">
            <div class="d-flex flex-column">
                <img src="{{ asset('images/film/h2g2.jpg') }}" class="img-fluid">
                <a href="#" target="_blank">H2G2</a>
            </div>
            <div class="d-flex flex-column">
                <img src="{{ asset('images/film/idiocracy.jpg') }}" class="img-fluid">
                <a href="#" target="_blank">Idiocracy</a>
            </div>
        </section>
        <h4>Mes séries</h4>
        <section class="serie d-flex flex-row justify-content-around">
            <div class="d-flex flex-column">
                <img src="{{ asset('images/serie/dirk.jpg') }}" class="img-fluid">
                <a href="#" target="_blank">Dirk Gently</a>
            </div>
            <div class="d-flex flex-column">
                <img src="{{ asset('images/serie/poi.jpg') }}" class="img-fluid">
                <a href="#" target="_blank">Person Of Interest</a>
            </div>
            <div class="d-flex flex-column">
                <img src="{{ asset('images/serie/kaamelott.jpg') }}" class="img-fluid">
                <a href="#" target="_blank">Kaamelott</a>
            </div>
        </section>
        <section class="emission d-flex flex-row justify-content-around">
            <div class="d-flex flex-column">
                <img src="{{ asset('images/serie/superflux.jpg') }}" class="img-fluid">
                <a href="https://www.rts.ch/play/tv/emission/rts-couleur-3-en-videos?id=10233740" target="_blank">RTS Couleur 3 Superflux</a>
            </div>
        </section>

    </div>
@endsection
