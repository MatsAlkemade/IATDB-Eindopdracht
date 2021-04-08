@extends('default')

@section('title')
    Admin Panel
@endsection

@section('content')
    <main>
        <h1>Admin Panel</h1>
        <section>
            @if ($errors->any())
                <section class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </section>
            @endif
            <div>
                <p>Gebruikers</p>
                <ul>
                    @foreach($persons as $person)
                        @include('admin.components.userCard--index')
                    @endforeach
                </ul>
            </div>
            <div>
                <p>Geblokkeerd</p>
                <ul>
                    @foreach($blocked as $person)
                        @include('admin.components.userCard--index')
                    @endforeach
                </ul>
            </div>
            <div>
                <p>Huisdieren</p>
                <ul>
                    @foreach($pets as $pet)
                        @include('admin.components.petCard--index')
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
@endsection