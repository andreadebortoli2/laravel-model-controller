@extends('layouts.app')

@section('page-name', 'home')

@section('content')

    <div class="container py-5">
        <h2>Movies</h2>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie->title }}</h4>
                            <h5 class="card-title"><span>Original title: </span>{{ $movie->original_title }}</h5>
                            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                            <p class="card-text">Release date: {{ $movie->date }}</p>
                            <p class="card-text">Vote: {{ $movie->vote }}/10</p>
                        </div>
                    </div>

                </div>

            @empty

                <h2>Sorry, no movies in the catalog</h2>
            @endforelse
        </div>
    </div>

@endsection
