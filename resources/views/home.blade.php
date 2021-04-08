@extends('default')

@section('title')
    PassenOpJeDier
@endsection

@section('content')
    <main class="home">
        <article class="home__main">
            <section class="home__main__pets">
            <h2>Huisdieren</h2>
                <ul class="home__main__pets__list">
                    <li class="petCard">
                        <section>
                            <h3>{{$pets[0]->animal}} - {{$pets[0]->name}}</h3>
                        </section>
                        <section>
                            <figure>
                                <img src="{{$pets[0]->image}}" alt="{{$pets[0]->animal}} - {{$pets[0]->name}}">
                            </figure>
                            <p>{{$pets[0]->breed}}</p>
                            <p>{{date('d-m-Y', strtotime($pets[0]->date))}} {{$pets[0]->time}}</p>
                        </section>
                    </li>
                    <li class="petCard">
                        <section>
                            <h3>{{$pets[1]->animal}} - {{$pets[1]->name}}</h3>
                        </section>
                        <section>
                            <figure>
                                <img src="{{$pets[1]->image}}" alt="{{$pets[1]->animal}} - {{$pets[1]->name}}">
                            </figure>
                            <p>{{$pets[1]->breed}}</p>
                            <p>{{date('d-m-Y', strtotime($pets[1]->date))}} {{$pets[1]->time}}</p>
                        </section>
                    </li>
                </ul>
                <a href="/pets"><button>Zie alle</button></a>
            </section>
            <section class="home__main__sitters">
                <h2>Oppassers</h2>
                <ul class="home__main__users__list">
                    <li class="userCard">
                        <section>
                            <h3>{{$sitters[0]->name}}</h3>
                        </section>
                        <section>
                            <figure>
                                <img src="{{$sitters[0]->profile_picture}}" alt="{{$sitters[1]->name}}">
                            </figure>
                            <p>{{$sitters[0]->phone_number}}</p>
                            <p>{{$sitters[0]->description}}</p>
                        </section>
                    </li>
                    <li class="userCard">
                        <section>
                            <h3>{{$sitters[1]->name}}</h3>
                        </section>
                        <section>
                            <figure>
                                <img src="{{$sitters[1]->profile_picture}}" alt="{{$sitters[1]->name}}">
                            </figure>
                            <p>{{$sitters[1]->phone_number}}</p>
                            <p>{{$sitters[1]->description}}</p>
                        </section>
                    </li>
                </ul>
                <a href="/sitters"><button>Zie alle</button></a>
            </section>
        </article>
        <section class="home__addPet">
            <a href="/pets/create"><button>Bied je dier aan</button></a>
        </section>
    </main>
@endsection