@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4">
        @foreach ($moviesList as $movie)
        <div class="col">

            <div class="card h-100 w-100">
                <img src="{{$movie['image']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie['title'] }}</h5>
                  <p class="card-text">{{ $movie['original_title'] }}</p>
                  <p class="card-text">{{ $movie['date'] }}</p>
                  <p class="card-text">{{ $movie['vote'] }}</p>
                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>
@endsection