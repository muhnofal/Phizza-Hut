@extends('layouts.app')

@section('title', 'Pizza Detail')
@section('link1', 'View All User Transaction')
@section('link1ref', '/admin/view-all-user-transaction')
@section('link2', 'View All User')
@section('link2ref', '/admin/view-all-user')
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