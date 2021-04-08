@extends('default')

@section('title')
    Profiel aanpassen
@endsection

@section('content')
    <main>
        @if ($errors->any())
            <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </section>
        @endif
        <form action="/profile/edit" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <section>
                <label for="name">Naam: </label>
                <input type="text" name="name" id="name" value="{{$user->name}}" />
            </section>
            <section>
                <label for="profile_picture">Profielfoto: </label>
                <input type="file" name="profile_picture" id="profile_picture" accept="image/*" />
            </section>
            <section>
                <label for="phone_number">Telefoonnummer: </label>
                <input type="text" name="phone_number" id="phone_number" placeholder="0612345678" value="{{$user->phone_number}}" />
            </section>
            <section>
                <label for="description">Vertel wat over jezelf: </label>
                <textarea type="text" name="description" id="description" placeholder="Typ hier...">{{$user->description}}</textarea>
            </section>
            <section>
                <button type="button" onclick="goBack()">Terug</button>
                <button type="submit">Bevestigen</button>
            </section>
        </form>
    </main>
@endsection