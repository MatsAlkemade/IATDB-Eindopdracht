<li class="adminCard">
    <p>{{$person->name}}</p>
    <p>{{$person->email}}</p>
    <form action="/admin" method="post">
        @csrf
        @method('patch')
        <input type="hidden" name="id" value="{{$person->id}}">
        <button type="submit" class="u-button">
            @if($person->blocked == false)
                Blokkeren
            @else
                Deblokkeren
            @endif
        </button>
    </form>
</li>