@extends('layouts/layout')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col12">
                    <h1>I film</h1>
                    
                </div>
                {{-- ciclo --}}
                @forelse ($americanMovies as $americanMovie)
                <div class="col-3">
                    <div class="card">
                        {{-- <img src="" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h4 class="card-title">{{$americanMovie->title}}</h4>
                            <h5>{{$americanMovie->original_title}}</h5>
                            <p>{{$americanMovie->nationality}}</p>
                            <p>{{$americanMovie->date}}</p>
                            <p>{{$americanMovie->vote}}</p>
                        </div>
                    </div>
                </div>
                    
                @empty
                    
                @endforelse
            </div>
        </div>
    </section>