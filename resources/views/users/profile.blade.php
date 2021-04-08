@extends('default')

@section('title')
    {{$user->name}}
@endsection

@section('content')
    <main>
        <section>
            <figure>
                <img src="{{$user->profile_picture}}" alt="{{$user->name}}">
            </figure>
            <p>{{$user->name}}</p>
            <p>{{$user->email}}</p>
            <p>{{$user->phone_number}}</p>
            <p>{{$user->description}}</p>
        </section>
        <section>
            <a href="/profile/edit"><button>Profiel aanpassen</button></a>
        </section>
        <section>
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
                <ul>
                    @foreach($pets as $pet)
                        @include('pets.components.petCard--index')
                    @endforeach
                </ul>
            @else
                <h2>Foto's</h2>
                <ul>
                    @foreach($images as $image)
                        <li>
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
                    <li>
                        <form action="/images/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" id="image" accept="image/*" required />
                            <button type="submit">Voeg foto toe</button>
                        </form>
                    </li>
                </ul>
            @endif
        </section>
    </main>
@endsection