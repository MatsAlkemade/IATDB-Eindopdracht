<li class="adminCard">
    <p>{{$pet->name}}</p>
    <p>{{$pet->animal}}</p>
    <p>{{$pet->breed}}</p>
    <form action="/admin" method="post">
        @csrf
        @method('delete')
        <input type="hidden" name="id" value="{{$pet->id}}">
        <button type="submit" class="u-button">Verwijder</button>
    </form>
</li>