<li>
    <section>
        <p>{{$person->name}}</p>
        <p>{{$person->email}}</p>
        <form action="/admin" method="post">
            @csrf
            @method('patch')
            <input type="hidden" name="id" id="id" value="{{$person->id}}">
            <button type="submit">
                @if($person->blocked == false)
                    Blokkeren
                @else
                    Deblokkeren
                @endif
            </button>
        </form>
    </section>
</li>