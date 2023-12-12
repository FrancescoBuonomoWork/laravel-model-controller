@extends('layouts/layout')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col12">
                    <h1>I film</h1>
                    @dd($movies)
                </div>
            </div>
        </div>
    </section>
@endsection