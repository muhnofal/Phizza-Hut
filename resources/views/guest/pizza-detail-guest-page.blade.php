@extends('layouts.app')

@section('title', 'Pizza Detail')

@section('link1', 'Login')
@section('link2', 'Register')

@section('content')

<div class="container">

    <div class="jumbotron bg-light">

        <div class="card mb-3" style="max-width: 100%">
            <div class="row no-gutters p-5">
              <div class="col-md-4">
                <img src="/assets/{{ $pizza->photo }}" class="card-img" alt="Ini Gambar Pizza">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title mb-1 font-weight-bold">{{ $pizza->name }}</h5>
                  <h5 class="card-text mb-1">{{ $pizza->description }}</h5>
                  <p class="card-text mb-1">Rp. {{ $pizza->price }}</p>
                </div>
              </div>
            </div>
        </div>

    </div>
    
</div>

@endsection