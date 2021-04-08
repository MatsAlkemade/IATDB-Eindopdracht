@extends('default')

@section('title')
    Review
@endsection

@section('content')
    <main>
        <h2>Review achterlaten voor {{$reviewed->name}}</h2>
        <form action="/reviews/create" method="post">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{$reviewed->id}}">
            <section>
                <label for="name">Naam:</label>
                <input type="text" name="name" id="name">
                <p>Leeg laten om anoniem te blijven</p>
            </section>
            <section>
                <label for="title">Titel:</label>
                <input type="text" name="title" id="title">
            </section>
            <section>
                <label for="description">Bericht:</label>
                <textarea type="text" name="description" id="description" placeholder="Typ hier..."></textarea>
            </section>
            <section>
                <label for="rating">Beoordeling</label>
                <select name="rating" id="rating">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </section>
            <section>
                <button type="submit">Versturen</button>
            </section>
        </form>
    </main>
@endsection