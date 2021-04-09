<li class="petCard petFilter" data-kind-of-pet="{{$pet->animal}}">
    <a href="/pets/{{$pet->id}}">
        <section class="petCard__title">
            <h2>{{$pet->animal}} - {{$pet->name}}</h2>
        </section>
        <section class="petCard__section">
            <figure class="petCard__section__figure">
                <img src="{{$pet->image}}" alt="{{$pet->animal}} - {{$pet->name}}">
            </figure>
            <p class="petCard__section__text">{{$pet->breed}}</p>
            <p class="petCard__section__text">Datum en tijd</p>
            <p class="petCard__section__text">{{date('d-m-Y', strtotime($pet->date))}} {{$pet->time}}</p>
        </section>
    </a>
</li>