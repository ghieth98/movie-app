@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> <!-- end-popular-movies -->

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">New Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($newMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div> <!-- end new-movies -->

        </div>

@endsection
