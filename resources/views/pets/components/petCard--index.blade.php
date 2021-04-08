<li class="petCard">
    <a href="/pets/{{$pet->id}}">
        <section>
            <h2>{{$pet->animal}} - {{$pet->name}}</h2>
        </section>
        <section>
            <figure>
                <img src="{{$pet->image}}" alt="{{$pet->animal}} - {{$pet->name}}">
            </figure>
            <p>{{$pet->breed}}</p>
            <p>{{date('d-m-Y', strtotime($pet->date))}} {{$pet->time}}</p>
        </section>
    </a>
</li>