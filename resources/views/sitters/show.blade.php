@extends('default')

@section('title')
    {{$sitter->name}}
@endsection

@section('content')
    @include('sitters.components.sitterCard--show')
@endsection