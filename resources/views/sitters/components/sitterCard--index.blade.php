<li class="sitterCard">
    <a href="/sitters/{{$sitter->id}}">
        <section>
            <h2>{{$sitter->name}}</h2>
        </section>
        <section>
            <figure>
                <img src="{{$sitter->profile_picture}}" alt="{{$sitter->name}}">
            </figure>
            <p>{{$sitter->email}}</p>
            <p>{{$sitter->phone_number}}</p>
            <p>{{$sitter->description}}</p>
        </section>
    </a>
</li>