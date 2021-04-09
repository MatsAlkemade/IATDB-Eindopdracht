@extends('default')

@section('title')
    {{$user->name}}
@endsection

@section('content')
    <section class="profile">
        <section class="sitterShow__card">
            <section class="sitterShow__card__title">
                <h2>{{$user->name}}</h2>
            </section>
            <section class="sitterShow__card__section">
                <figure class="sitterShow__card__section__figure">
                    <img src="{{$user->profile_picture}}" alt="{{$user->name}}">
                </figure>
                <p class="sitterShow__card__section__text">{{$user->email}}</p>
                <p class="sitterShow__card__section__text">{{$user->phone_number}}</p>
                <p class="sitterShow__card__section__text">{{$user->description}}</p>
            </section>
            <a href="/profile/edit" class="u-button">Profiel aanpassen</a>
        </section>
        <section class="profile__section">
            @if ($errors->any())
                <section class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </section>
            @endif
            @if($user->role == 'Owner')
                <h2>Huisdieren</h2>
                <ul class="profile__section__pets">
                    @foreach($pets as $pet)
                        @include('pets.components.petCard--index')
                    @endforeach
                </ul>
            @else
                <h2>Foto's</h2>
                <ul class="profile__section__images">
                    @foreach($images as $image)
                        <li class="profile__section__images__item">
                            <section>
                                <figure>
                                    <img src="{{$image->image}}" alt="Foto">
                                </figure>
                                <form action="/images" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" id="id" value="{{$image->id}}">
                                    <button type="submit"><i class="fal fa-times"></i></button>
                                </form>
                            </section>
                        </li>
                    @endforeach
                </ul>
                <form action="/images/create" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image" id="image" accept="image/*" required />
                    <button type="submit">Voeg foto toe</button>
                </form>
            @endif
        </section>
    </section>
@endsection