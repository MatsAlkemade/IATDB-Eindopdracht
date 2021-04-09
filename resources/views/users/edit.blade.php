@extends('default')

@section('title')
    Profiel aanpassen
@endsection

@section('content')
    <section class="editProfile">
        <h2>Profiel aanpassen</h2>
        @if ($errors->any())
            <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </section>
        @endif
        <form class="editProfile__form" action="/profile/edit" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <section class="editProfile__form__input">
                <label for="name">Naam: </label>
                <input type="text" name="name" id="name" value="{{$user->name}}" />
            </section>
            <section class="editProfile__form__input">
                <label for="profile_picture">Profielfoto: </label>
                <input type="file" name="profile_picture" id="profile_picture" accept="image/*" />
            </section>
            <section class="editProfile__form__input">
                <label for="phone_number">Telefoonnummer: </label>
                <input type="text" name="phone_number" id="phone_number" placeholder="0612345678" value="{{$user->phone_number}}" />
            </section>
            <section class="editProfile__form__input">
                <label for="description" class="u-label-vert-align-top">Vertel wat over jezelf: </label>
                <textarea name="description" id="description" placeholder="Typ hier...">{{$user->description}}</textarea>
            </section>
            <section class="editProfile__form__input">
                <button class="u-button" type="submit">Bevestigen</button>
                <button class="u-button" type="button" onclick="goBack()">Terug</button>
            </section>
        </form>
    </section>
@endsection