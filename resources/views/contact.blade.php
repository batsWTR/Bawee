@extends('layout')
<script src="{{ asset('js/anim_pc.js') }}" defer></script>

@section('main')
    @if($errors->any())
        <div class="alert alert-danger w-50 m-auto">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('status'))
        <div class="alert alert-success w-50 m-auto">
            {{ session('status') }}
        </div>
    @endif
    <h1 class="mt-4 mb-3 text-center">Me contacter</h1>
    <form class="w-50 m-auto" action="{{ route('contact.store') }}" method="post">
        @csrf
        <div>
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}"  required>
        </div>
        <div>
            <label class="form-label" for="message">Votre message</label>
            <textarea class="form-control" name="message" id="message" rows="8" cols="2"  required>
        </textarea>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Envoyer</button>
    </form>
@endsection
