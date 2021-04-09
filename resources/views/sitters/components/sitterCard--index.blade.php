<li class="sitterCard">
    <a href="/sitters/{{$sitter->id}}">
        <section class="sitterCard__title">
            <h2>{{$sitter->name}}</h2>
        </section>
        <section class="sitterCard__section">
            <figure class="sitterCard__section__figure">
                <img src="{{$sitter->profile_picture}}" alt="{{$sitter->name}}">
            </figure>
            <p class="sitterCard__section__text">{{$sitter->email}}</p>
            <p class="sitterCard__section__text">{{$sitter->phone_number}}</p>
            <p class="sitterCard__section__text">{{$sitter->description}}</p>
        </section>
    </a>
</li>