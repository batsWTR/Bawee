@extends('layout')



@section('main')
    <div class="flex">
        <section>
            <h4>Etu<span>des</span></h4>
        </section>
        <div class="photo">
            MOIiiiiiiiiiiiiiiiiiiiii
        </div>
        <section>
            <h4>Cont<span>act</span></h4>
        </section>
    </div>
    <section class="about">
        <h4>A pro<span>pos</span></h4>
    </section>
    <div class="flex">
        <section>
            <h4>Hob<span>bies</span></h4>
        </section>
        <div>
            <img src="{{ asset('images/laptop.png') }}">
        </div>
        <section>
            <h4>Lan<span>gues</span></h4>
        </section>
    </div>
    <section class="competences">
        <h4>Compé<span>tences</span></h4>
    </section>
    <section class="experience">
        <h4>Expér<span>ience</span></h4>
    </section>
@endsection
