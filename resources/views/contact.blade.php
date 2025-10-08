@extends('layout')
<script src="{{ asset('js/anim_pc.js') }}" defer></script>


@section('main')
    <h1 class="mt-4 mb-3 text-center">Me contacter</h1>
    <form class="w-50 m-auto" action="{{ route('contact.store') }}" method="post">
        @csrf
        <div>
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>
        <div>
            <label class="form-label" for="text">Votre message</label>
            <textarea class="form-control" name="text" id="text" rows="8" cols="2" required>
        </textarea>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Envoyer</button>
    </form>
@endsection
