@extends('default')

@section('title')
    Huisdieren
@endsection

@section('content')
    <main>
        <h2>Huisdieren</h2>
        <section>
            <a href="/pets/create"><button>Bied je dier aan</button></a>
        </section>
        <ul>
            @foreach($pets as $pet)
                @include('pets.components.petCard--index')
            @endforeach        
        </ul>
    </main>
@endsection