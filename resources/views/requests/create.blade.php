@extends('default')

@section('title')
    Aanvraag
@endsection

@section('content')
    <main>
        <h2>Bericht versturen naar {{$receiver->name}}</h2>
        <form action="/requests/create" method="post">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{$receiver->id}}">
            <section>
                <label for="name">Naam:</label>
                <input type="text" name="name" id="name" value="{{$sender->name}}">
            </section>
            <section>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="{{$sender->email}}">
            </section>
            <section>
                <label for="phone_number">Telefoonnummer:</label>
                <input type="text" name="phone_number" id="phone_number" value="{{$sender->phone_number}}">
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
                <button type="submit">Versturen</button>
            </section>
        </form>
    </main>
@endsection