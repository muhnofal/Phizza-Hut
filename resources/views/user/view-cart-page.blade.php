@extends('layouts.app')

@section('title', 'Pizza Detail')

@section('link1', 'View Transaction History')
@section('link1ref', '/user/view-transaction-history')
@section('link2', 'View Cart')
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
                <img src="/assets/pizza11.jpg" class="card-img" alt="Ini Gambar Pizza">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title mb-1 font-weight-bold"> Title </h5>
                  <p class="card-text mb-1"> Price </p>
                  <p class="card-text mb-1"> Quantity: 2</p>

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

                    <span class="d-block pt-3">
                        <a href="">
                            <button type="button" class="btn btn-primary">Update Quantity</button>
                        </a>
                    </span>

                    <span class="d-block pt-3">
                        <a href="">
                            <button type="button" class="btn btn-danger">Delete From Cart</button>
                        </a>
                    </span>

                </div>

              </div>
            </div>

            <a href="" class="mx-auto pb-5">
                <button type="submit" class="btn btn-dark">Check Out</button>
            </a>

        </div>

    </div>
    
</div>

@endsection