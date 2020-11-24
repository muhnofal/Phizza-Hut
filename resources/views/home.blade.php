@extends('layouts.app')

@section('title', 'Welcome')
@section('link1', 'View Transacion History')
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

    <p class="h1 mt-3"> Our freshy made pizza!</p>
   
    <div class="jumbotron bg-light">
        <p class="h3 text-muted"> Order it now!</p>

        <form>
            <div class="form-row ml-1">
              
        
                <label class="mt-1" for="">Search Pizza: </label>
        
                <div class="col ml-2 mr-2">
                    <input type="text" class="form-control">
                </div>
        
                <button type="submit" class="btn btn-primary mb-2">Search</button>
        
            </div>
        </form>
        
        
        <div class="row mb-4 mt-5">
        
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/pizza11.jpg" class="card-img-top">
        
                    <div class="card-body">
                      <p class="card-text">Tuna Man</p>
                      <p class="text-muted">Rp. 100000</p>
                    </div>
        
                </div>
            </div>
        
        </div>

    </div>

</div>




@endsection


{{-- <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div> --}}