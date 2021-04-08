<article>
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
    <a href="/requests/{{$sitter->id}}/create"><button>Stuur {{$sitter->name}} een bericht</button></a>
    <section>        
        <div>
            <h3>Reviews</h3>
            <ul>
                @foreach($reviews as $review)
                    <li>
                        <h3>{{$review->title}}</h3>
                        <p>{{$review->name}}</p>
                        <p>{{$review->rating}}/5</p>
                        <p>{{$review->description}}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        <div>
            <h3>Foto's</h3>
            <ul>
                @foreach($images as $image)
                    <li>
                        <figure>
                            <img src="{{$image->image}}" alt="Foto">
                        </figure>
                    </li>
                @endforeach
                <li>
                    @if($sitter->id == $user->id)
                        <form action="/images/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" id="image" accept="image/*" required />
                            <button type="submit">Voeg foto toe</button>
                        </form>
                    @endif
                </li>
            </ul>
        </div>
    </section>
</article>
