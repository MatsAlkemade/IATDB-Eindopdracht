@extends('default')

@section('title')
    Oppassers
@endsection

@section('content')
    <main>
        <h2>Oppassers</h2>
        <ul>
            @foreach($sitters as $sitter)
                @include('sitters.components.sitterCard--index')
            @endforeach
        </ul>
    </main>
@endsection