@extends('guest.layouts.base')

@section('content')
<div class="container">
    <div class="overflow-hidden">
        <div class="row row-cols-4 g-4">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-header text-uppercase text-center fw-bold">
                      {{$movie->title}}
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-white">{{$movie->original_title}}</li>
                      <li class="list-group-item text-white">{{$movie->nationality}}</li>
                      <li class="list-group-item text-white">{{$movie->date}}</li>
                      <li class="list-group-item text-white">{{$movie->vote}}</li>
                    </ul>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
