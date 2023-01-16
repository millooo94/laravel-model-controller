@extends('guest.layouts.base')

@section('content')
@foreach ($movies as $movie)

<div>{{$movie->title}} - {{$movie->original_title}} - {{$movie->nationality}} - {{$movie->date}} - {{$movie->vote}}</div>

@endforeach
@endsection
