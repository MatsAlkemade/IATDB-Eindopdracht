@extends('default')

@section('title')
    Aanvraag
@endsection

@section('content')
    <section class="reqCreate">
        <h2 class="reqCreate__title">Bericht versturen naar {{$receiver->name}}</h2>
        <form class="reqCreate__form" action="/requests/create" method="post">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{$receiver->id}}">
            <section class="reqCreate__form__input">
                <label for="name">Naam:</label>
                <input type="text" name="name" id="name" value="{{$sender->name}}">
            </section>
            <section class="reqCreate__form__input">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="{{$sender->email}}">
            </section>
            <section class="reqCreate__form__input">
                <label for="phone_number">Telefoonnummer:</label>
                <input type="text" name="phone_number" id="phone_number" value="{{$sender->phone_number}}">
            </section>
            <section class="reqCreate__form__input">
                <label for="title">Titel:</label>
                <input type="text" name="title" id="title">
            </section>
            <section class="reqCreate__form__input">
                <label for="description" class="u-label-vert-align-top">Bericht:</label>
                <textarea name="description" id="description" placeholder="Typ hier..."></textarea>
            </section>
            <section class="reqCreate__form__input">
                <button type="submit" class="u-button">Versturen</button>
            </section>
        </form>
    </section>
@endsection