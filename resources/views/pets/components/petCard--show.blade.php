<article>
    <section>
        <h2>{{$pet->animal}} - {{$pet->name}}</h2>
    </section>
    <section>
        <figure>
            <img src="{{$pet->image}}" alt="{{$pet->animal}} - {{$pet->name}}">
        </figure>
        <p>Eigenaar: {{$owner->name}}</p>
        <p>{{$pet->breed}}</p>
        <p>{{date('d-m-Y', strtotime($pet->date))}} {{$pet->time}}</p>
    </section>
    <a href="/requests/{{$pet->owner_id}}/create"><button>Pas op {{$pet->name}}</button></a>
</article>
