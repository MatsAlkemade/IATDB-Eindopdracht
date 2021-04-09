<article class="petShowWrapper">
    <section class="petShow">
        <section class="petShow__title">
            <h2>{{$pet->animal}} - {{$pet->name}}</h2>
        </section>
        <section class="petShow__section">
            <figure class="petShow__section__figure">
                <img src="{{$pet->image}}" alt="{{$pet->animal}} - {{$pet->name}}">
            </figure>
            <p  class="petShow__section__text">Eigenaar: {{$owner->name}}</p>
            <p  class="petShow__section__text">{{$pet->breed}}</p>
            <p  class="petShow__section__text">Datum en tijd:</p>
            <p  class="petShow__section__text">{{date('d-m-Y', strtotime($pet->date))}} {{$pet->time}}</p>
        </section>
        <a href="/requests/{{$pet->owner_id}}/create" class="u-button">Pas op {{$pet->name}}</a>
    </section>
</article>
