@extends('default')

@section('title')
    Review
@endsection

@section('content')
    <section class="review">
        <h2>Review achterlaten voor {{$reviewed->name}}</h2>
        <form action="/reviews/create" method="post" class="review__form">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{$reviewed->id}}">
            <section  class="review__form__input">
                <label for="name">Naam:</label>
                <input type="text" name="name" id="name">
                <p>Leeg laten om anoniem te blijven</p>
            </section>
            <section  class="review__form__input">
                <label for="title">Titel:</label>
                <input type="text" name="title" id="title">
            </section>
            <section  class="review__form__input">
                <label for="description" class="u-label-vert-align-top">Bericht:</label>
                <textarea name="description" id="description" placeholder="Typ hier..."></textarea>
            </section>
            <section  class="review__form__input">
                <label for="rating">Beoordeling</label>
                <select name="rating" id="rating">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </section>
            <section  class="review__form__input">
                <button type="submit" class="u-button">Versturen</button>
            </section>
        </form>
    </section>
@endsection