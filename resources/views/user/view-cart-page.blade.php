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

        @foreach ($carts as $cart)
            <div class="card mb-3" style="max-width: 100%">
                <div class="row no-gutters p-5">
                <div class="col-md-4">
                    <img src="/assets/{{ $cart->pizza->photo }}" class="card-img" alt="Ini Gambar Pizza">
                </div>
                <div class="col-md-8">

                    @php

                        $totalPerItem = 0;
                        $price = $cart->pizza->price;
                        $qty = $cart->quantity;
                        $totalPerItem = $totalPerItem + ($price * $qty);

                    @endphp

                    <div class="card-body">
                    <h5 class="card-title mb-1 font-weight-bold"> {{ $cart->pizza->name }} </h5>
                    <p class="card-text mb-1"> Rp. {{ $price }} </p>
                    <p class="card-text mb-1"> Quantity: {{ $qty }}</p>
                    
                    <form action="{{ url("user/view-cart") }}" method="POST" name="formedit">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="quantity" class="col-md-2 col-form-label">{{ __('Quantity') }}</label>

                            <div class="col-md-5">
                                <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" autocomplete="quantity" autofocus>
                                <input type="hidden" name="pizza_id" id="" value="{{ $cart->pizza->id }}">
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <span class="d-block pt-3">
                            <button type="submit" class="btn btn-primary">Update Quantity</button>
                        </span>
                        
                    </form>

                    <form action="{{ url("user/view-cart") }}" method="POST" name="formdelete">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="cart_id" id="" value="{{ $cart->id }}">
                        <span class="d-block pt-3">
                            <button type="submit" class="btn btn-danger">Delete From Cart</button>
                        </span>
                    </form>


                    </div>

                </div>
                </div>

            </div>

        <form action="/user" method="POST">
            <input type="hidden" name="pizza_id" id="" value="{{ $cart->pizza->id }}">
            <input type="hidden" name="totalPerItem" id="" value="{{ $totalPerItem }}">
            <input type="hidden" name="quantity" id="" value="{{ $qty }}">
            @endforeach
            @csrf
            
            @if ($amount != 0)
                <div class="mx-auto" style="width: 200px;">
                    <button type="submit" class="btn btn-dark">Check Out</button>
                </div>

            @else

            <p class="h1 text-center"> Add ke cart dulu uyy</p>

            @endif

        </form>

    </div>
    
</div>

@endsection