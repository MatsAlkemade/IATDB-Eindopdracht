<article class="sitterShow">
    <section class="sitterShow__card">
        <section class="sitterShow__card__title">
            <h2>{{$sitter->name}}</h2>
        </section>
        <section class="sitterShow__card__section">
            <figure class="sitterShow__card__section__figure">
                <img src="{{$sitter->profile_picture}}" alt="{{$sitter->name}}">
            </figure>
            <p class="sitterShow__card__section__text">{{$sitter->email}}</p>
            <p class="sitterShow__card__section__text">{{$sitter->phone_number}}</p>
            <p class="sitterShow__card__section__text">{{$sitter->description}}</p>
        </section>
        <a href="/requests/{{$sitter->id}}/create" class="u-button">Stuur {{$sitter->name}} een bericht</a>
    </section>
    <section class="sitterShow__section">
        <section class="sitterShow__section__reviews">
            <h3>Reviews</h3>
            <ul class="sitterShow__section__reviews__list">
                @foreach($reviews as $review)
                    <li class="sitterShow__section__reviews__list__item">
                        <h3>{{$review->title}}</h3>
                        <p>Naam: {{$review->name}}</p>
                        <p>Beoordeling: {{$review->rating}}/5</p>
                        <p>{{$review->description}}</p>
                    </li>
                @endforeach
            </ul>
        </section>
        <section class="sitterShow__section__images">
            <h3>Foto's</h3>
            <ul class="sitterShow__section__images__list">
                @foreach($images as $image)
                    <li class="sitterShow__section__images__list__item">
                        <figure>
                            <img src="{{$image->image}}" alt="Foto">
                        </figure>
                    </li>
                @endforeach
            </ul>
        </section>
    </section>
</article>
