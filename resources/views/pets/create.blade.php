@extends('default')

@section('title')
    Huisdier
@endsection

@section('content')
    <main>
        <h2>Huisdier profiel</h2>
        @if ($errors->any())
            <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </section>
        @endif
        <form action="/pets/create" method="post" enctype="multipart/form-data">
            @csrf
            <section>
                <label for="name">Naam: </label>
                <input type="text" name="name" id="name" />
            </section>
            <section>
                <label for="animal">Dier: </label>
                <input type="text" name="animal" id="animal" />
            </section>
            <section>
                <label for="breed">Soort: </label>
                <input type="text" name="breed" id="breed" />
            </section>
            <section>
                <label for="image">Foto: </label>
                <input type="file" name="image" id="image" />
            </section>
            <section>
                <label for="date">Datum: </label>
                <input type="date" name="date" id="date" />
            </section>
            <section>
                <p>Tijd</p>
                <label for="time_from">Van: </label>
                <input type="text" name="time_from" id="time_from" placeholder="00:00" />
                <label for="time_to">Tot: </label>
                <input type="text" name="time_to" id="time_to" placeholder="00:00" />
            </section>
            <section>
                <label for="hourly_rate">Uurtarief: €</label>
                <input type="number" step="0.01" pattern="^\d*(\.\d{0,2})?$" name="hourly_rate" id="hourly_rate" />
            </section>
            <section>
                <label for="description">Beschrijving: </label>
                <textarea name="description" id="description" placeholder="Typ hier..."></textarea>
            </section>
            <section>
                <button type="submit">Profiel aanmaken</button>
            </section>
        </form>

    </main>
@endsection