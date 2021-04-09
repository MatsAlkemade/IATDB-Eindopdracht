@extends('default')

@section('title')
    Berichten
@endsection

@section('content')
    <section class="requests">
        <h2>Berichten</h2>
        <ul class="requests__list">
            @foreach($requests as $request)
                <li class="requests__list__item">
                    <h3>{{$request->title}}</h3>
                    <p>Naam: {{$request->name}}</p>
                    <p>Email: {{$request->email}}</p>
                    <p>Telefoonnummer: {{$request->phone_number}}</p>
                    <p>{{$request->description}}</p>
                    @if($request->accepted == false)
                        <section class="requests__list__item__buttons u-margin-top">
                            <form action="/requests" method="post">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="id" value="{{$request->id}}">
                                <button type="submit" class="u-button">Accepteren</button>
                            </form>
                            <form action="/requests" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$request->id}}">
                                <button type="submit" class="u-button">Verwijderen</button>
                            </form>
                        </section>
                    @else
                        <section class="requests__list__item__buttons">
                            <section>
                                <p>Geaccepteerd!</p>
                                <a href="/reviews/{{$request->id}}/create" class="u-button">Review</a>
                            </section>
                            <form action="/requests" method="post" class="u-bottom-0">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$request->id}}">
                                <button type="submit" class="u-button">Verwijderen</button>
                            </form>
                        </section>
                    @endif
                </li>
            @endforeach
        </ul>
    </section>
@endsection