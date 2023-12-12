@extends('layouts/layout')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col12">
                    <h1>I film</h1>
                    
                </div>
                {{-- ciclo --}}
                @forelse ($movies as $movie)
                <div class="col-3">
                    <div class="card">
                        {{-- <img src="" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h4 class="card-title">{{$movie->title}}</h4>
                            <h5>{{$movie->original_title}}</h5>
                            <p>{{$movie->nationality}}</p>
                            <p>{{$movie->date}}</p>
                            <p>{{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
                    
                @empty
                    
                @endforelse
            </div>
        </div>
    </section>
@endsection