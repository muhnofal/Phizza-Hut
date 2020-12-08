@extends('layouts.app')

@section('title', 'Pizza Detail')

@section('link1', 'View Transaction History')
@section('link1ref', '/user/view-transaction-history')
@section('link2', 'View Cart')
@section('link2ref', '/user/view-cart')

@section('link3')
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
@endsection

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
                  <h5 class="card-title mb-1 font-weight-bold"> {{ $pizza->name }} </h5>
                  <h5 class="card-text mb-1"> {{ $pizza->description }} </h5>
                  <p class="card-text mb-1">Rp. {{ $pizza->price }} </p>

                    <form action="/user/pizza-detail/{{ $pizza->id }}" method="POST">
                        @csrf
                        
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" name="user_id">

                        <div class="form-group row">
                            <label for="quantity" class="col-md-2 col-form-label">{{ __('Quantity') }}</label>
    
                            <div class="col-md-5">
                                <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>
    
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                        </div>

                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>


                </div>
              </div>
            </div>
        </div>

    </div>
    
</div>

@endsection