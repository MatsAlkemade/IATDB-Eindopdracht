<li>
    <section>
        <p>{{$pet->name}}</p>
        <p>{{$pet->animal}}</p>
        <p>{{$pet->breed}}</p>
        <form action="/admin" method="post">
            @csrf
            @method('delete')
            <input type="hidden" name="id" id="id" value="{{$pet->id}}">
            <button type="submit">Verwijder</button>
        </form>
    </section>
</li>