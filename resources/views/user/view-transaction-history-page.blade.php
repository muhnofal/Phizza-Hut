@extends('layouts.app')

@section('title', 'View Transaction History')

@section('link1', 'View Transaction History')
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
                  <h5 class="card-title mb-1">Tuna and Onion</h5>
                  <p class="card-text mb-1">Rp. 85000</p>
                  <p class="card-text mb-1">Quantity: 2</p>
                  <p class="card-text mb-1">Total Price: Rp.170000</p>
                </div>
              </div>
            </div>
        </div>

    </div>
    
</div>

@endsection