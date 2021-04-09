@extends('default')

@section('title')
    PassenOpJeDier
@endsection

@section('content')
    <main class="home">
        <section class="home__addPet">
            <a href="/pets/create" class="u-button">Bied je dier aan</a>
        </section>
        <article class="home__main">
            <section class="home__main__pets">
                <h2>Huisdieren</h2>
                <ul class="home__main__pets__list">
                    <li class="petCard u-remove-two-pets">
                        <a href="/pets/{{$pets[0]->id}}">                            
                            <section class="petCard__title">
                                <h3>{{$pets[0]->animal}} - {{$pets[0]->name}}</h3>
                            </section>
                            <section class="petCard__section">
                                <figure class="petCard__section__figure">
                                    <img src="{{$pets[0]->image}}" alt="{{$pets[0]->animal}} - {{$pets[0]->name}}">
                                </figure>
                                <p class="petCard__section__text">{{$pets[0]->breed}}</p>
                                <p class="petCard__section__text">Datum en tijd</p>
                                <p class="petCard__section__text">{{date('d-m-Y', strtotime($pets[0]->date))}} {{$pets[0]->time}}</p>
                            </section>
                        </a>
                    </li>
                    <li class="petCard u-remove-two-pets">
                        <a href="/pets/{{$pets[1]->id}}">
                            <section class="petCard__title">
                                <h3>{{$pets[1]->animal}} - {{$pets[1]->name}}</h3>
                            </section>
                            <section class="petCard__section">
                                <figure class="petCard__section__figure">
                                    <img src="{{$pets[1]->image}}" alt="{{$pets[1]->animal}} - {{$pets[1]->name}}">
                                </figure>
                                <p class="petCard__section__text">{{$pets[1]->breed}}</p>
                                <p class="petCard__section__text">Datum en tijd</p>
                                <p class="petCard__section__text">{{date('d-m-Y', strtotime($pets[1]->date))}} {{$pets[1]->time}}</p>
                            </section>
                        </a>
                    </li>
                    <li class="petCard u-remove-two-pets">
                        <a href="/pets/{{$pets[2]->id}}">
                            <section class="petCard__title">
                                <h3>{{$pets[2]->animal}} - {{$pets[2]->name}}</h3>
                            </section>
                            <section class="petCard__section">
                                <figure class="petCard__section__figure">
                                    <img src="{{$pets[2]->image}}" alt="{{$pets[2]->animal}} - {{$pets[2]->name}}">
                                </figure>
                                <p class="petCard__section__text">{{$pets[2]->breed}}</p>
                                <p class="petCard__section__text">Datum en tijd</p>
                                <p class="petCard__section__text">{{date('d-m-Y', strtotime($pets[2]->date))}} {{$pets[2]->time}}</p>
                            </section>
                        </a>
                    </li>
                    <li class="petCard u-remove-two-pets">
                        <a href="/pets/{{$pets[3]->id}}">
                            <section class="petCard__title">
                                <h3>{{$pets[3]->animal}} - {{$pets[3]->name}}</h3>
                            </section>
                            <section class="petCard__section">
                                <figure class="petCard__section__figure">
                                    <img src="{{$pets[3]->image}}" alt="{{$pets[3]->animal}} - {{$pets[3]->name}}">
                                </figure>
                                <p class="petCard__section__text">{{$pets[3]->breed}}</p>
                                <p class="petCard__section__text">Datum en tijd</p>
                                <p class="petCard__section__text">{{date('d-m-Y', strtotime($pets[3]->date))}} {{$pets[3]->time}}</p>
                            </section>
                        </a>
                    </li>
                </ul>
                <a href="/pets" class="u-button">Zie alle</a>
            </section>
            <section class="home__main__sitters">
                <h2>Oppassers</h2>
                <ul class="home__main__sitters__list">
                    <li class="sitterCard u-remove-two-sitters">
                        <a href="/sitters/{{$sitters[0]->id}}">
                            <section class="sitterCard__title">
                                <h3>{{$sitters[0]->name}}</h3>
                            </section>
                            <section class="sitterCard__section">
                                <figure class="sitterCard__section__figure">
                                    <img src="{{$sitters[0]->profile_picture}}" alt="{{$sitters[1]->name}}">
                                </figure>
                                <p class="sitterCard__section__text">{{$sitters[0]->description}}</p>
                            </section>
                        </a>
                    </li>
                    <li class="sitterCard u-remove-two-sitters">
                        <a href="/sitters/{{$sitters[0]->id}}">
                            <section class="sitterCard__title">
                                <h3>{{$sitters[1]->name}}</h3>
                            </section>
                            <section class="sitterCard__section">
                                <figure class="sitterCard__section__figure">
                                    <img src="{{$sitters[1]->profile_picture}}" alt="{{$sitters[1]->name}}">
                                </figure>
                                <p class="sitterCard__section__text">{{$sitters[1]->description}}</p>
                            </section>
                        </a>
                    </li>
                    <li class="sitterCard u-remove-two-sitters">
                        <a href="/sitters/{{$sitters[2]->id}}">
                            <section class="sitterCard__title">
                                <h3>{{$sitters[2]->name}}</h3>
                            </section>
                            <section class="sitterCard__section">
                                <figure class="sitterCard__section__figure">
                                    <img src="{{$sitters[2]->profile_picture}}" alt="{{$sitters[2]->name}}">
                                </figure>
                                <p class="sitterCard__section__text">{{$sitters[2]->description}}</p>
                            </section>
                        </a>
                    </li>
                    <li class="sitterCard u-remove-two-sitters">
                        <a href="/sitters/{{$sitters[3]->id}}">
                            <section class="sitterCard__title">
                                <h3>{{$sitters[3]->name}}</h3>
                            </section>
                            <section class="sitterCard__section">
                                <figure class="sitterCard__section__figure">
                                    <img src="{{$sitters[3]->profile_picture}}" alt="{{$sitters[3]->name}}">
                                </figure>
                                <p class="sitterCard__section__text">{{$sitters[3]->description}}</p>
                            </section>
                        </a>
                    </li>
                </ul>
                <a href="/sitters" class="u-button">Zie alle</a>
            </section>
        </article>
    </main>
@endsection