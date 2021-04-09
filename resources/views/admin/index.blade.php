@extends('default')

@section('title')
    Admin Panel
@endsection

@section('content')
    <section class="admin">
        <h1>Admin Panel</h1>
        @if ($errors->any())
            <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </section>
        @endif
        <section class="admin__main">
            <section class="admin__main__section">
                <h3>Gebruikers</h3>
                <ul class="admin__main__section__list">
                    @foreach($persons as $person)
                        @if($person->role != 'Admin')
                            @include('admin.components.userCard--index')
                        @endif
                    @endforeach
                </ul>
            </section>
            <section class="admin__main__section">
                <h3>Geblokkeerd</h3>
                <ul class="admin__main__section__list">
                    @foreach($blocked as $person)
                        @include('admin.components.userCard--index')
                    @endforeach
                </ul>
            </section>
            <section class="admin__main__section">
                <h3>Huisdieren</h3>
                <ul class="admin__main__section__list">
                    @foreach($pets as $pet)
                        @include('admin.components.petCard--index')
                    @endforeach
                </ul>
            </section>
        </section>
    </section>
@endsection