@extends('default')

@section('title')
    Berichten
@endsection

@section('content')
    <main>
        <h2>Berichten</h2>
        <ul>
            @foreach($requests as $request)
                <li>
                    <h3>{{$request->title}}</h3>
                    <p>Naam: {{$request->name}}</p>
                    <p>Email: {{$request->email}}</p>
                    <p>Telefoonnummer: {{$request->phone_number}}</p>
                    <p>{{$request->description}}</p>
                    @if($request->accepted == false)
                        <section>
                            <form action="/requests" method="post">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="id" id="id" value="{{$request->id}}">
                                <button type="submit">Accepteren</button>
                            </form>
                            <form action="/requests" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" id="id" value="{{$request->id}}">
                                <button type="submit">Verwijderen</button>
                            </form>
                        </section>
                    @else
                        <p>Geaccepteerd!</p>
                        <a href="/reviews/{{$request->id}}/create"><button>Laat een review achter</button></a>
                        <form action="/requests" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" id="id" value="{{$request->id}}">
                            <button type="submit">Verwijderen</button>
                        </form>
                    @endif
                </li>
            @endforeach
        </ul>
    </main>
@endsection