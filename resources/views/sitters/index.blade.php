@extends('default')

@section('title')
    Oppassers
@endsection

@section('content')
    <section class="sitters">
        <h2 class="sitters__title">Oppassers</h2>
        <ul class="sitters__list">
            @foreach($sitters as $sitter)
                @include('sitters.components.sitterCard--index')
            @endforeach
        </ul>
    </section>
@endsection