@extends('default')

@section('title')
    Huisdieren
@endsection

@section('content')
    <section class="pets">
        <h2>Huisdieren</h2>
        <section class="pets__addButton">
            <a href="/pets/create" class="u-button">Bied je dier aan</a>
        </section>
        <section class="pets__section">
            <section class="pets__section__filter">
                <h3>Filter</h3>
                <section class="filter">
                    <label for="dog" class="filter__label">Hond</label>
                    <input type="checkbox" class="filter__input" name="dog" id="dog">
                </section>
                <section class="filter">
                    <label for="cat" class="filter__label">Kat</label>
                    <input type="checkbox" class="filter__input" name="cat" id="cat">
                </section>
            </section>
            <ul class="pets__section__pets">
                @foreach($pets as $pet)
                    @include('pets.components.petCard--index')
                @endforeach        
            </ul>
        </section>
    </section>
@endsection