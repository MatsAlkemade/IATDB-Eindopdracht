@extends('default')

@section('title')
    Huisdier
@endsection

@section('content')
    <section class="petCreate">
        <h2 class="petCreate__title">Huisdier profiel</h2>
        @if ($errors->any())
            <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </section>
        @endif
        <form class="petCreate__form" action="/pets/create" method="post" enctype="multipart/form-data">
            @csrf
            <section class="petCreate__form__input"class="petCreate__form__input">
                <label for="name">Naam: </label>
                <input type="text" name="name" id="name" />
            </section>
            <section class="petCreate__form__input"class="petCreate__form__input">
                <label for="animal">Dier: </label>
                <input type="text" name="animal" id="animal" />
            </section>
            <section class="petCreate__form__input"class="petCreate__form__input">
                <label for="breed">Soort: </label>
                <input type="text" name="breed" id="breed" />
            </section>
            <section class="petCreate__form__input"class="petCreate__form__input">
                <label for="image">Foto: </label>
                <input type="file" name="image" id="image" />
            </section>
            <section class="petCreate__form__input"class="petCreate__form__input">
                <label for="date">Datum: </label>
                <input type="date" name="date" id="date" />
            </section>
            <p>Tijd</p>
            <section class="petCreate__form__input"class="petCreate__form__input">
                <section class="petCreate__form__input__time">
                    <label for="time_from">Van: </label>
                    <input type="text" name="time_from" id="time_from" placeholder="00:00" />
                </section>
                <section class="petCreate__form__input__time">
                    <label for="time_to">Tot: </label>
                    <input type="text" name="time_to" id="time_to" placeholder="00:00" />
                </section>
            </section>
            <section class="petCreate__form__input"class="petCreate__form__input">
                <label for="hourly_rate">Uurtarief: €</label>
                <input type="number" step="0.01" name="hourly_rate" id="hourly_rate" />
            </section>
            <section class="petCreate__form__input"class="petCreate__form__input">
                <label for="description" class="u-label-vert-align-top">Beschrijving: </label>
                <textarea name="description" id="description" placeholder="Typ hier..."></textarea>
            </section>
            <section class="petCreate__form__input"class="petCreate__form__input">
                <button class="u-button" type="submit">Profiel aanmaken</button>
            </section>
        </form>
    </section>
@endsection