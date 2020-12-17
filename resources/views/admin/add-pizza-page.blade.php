@extends('layouts/app')

@section('title', 'Add Pizza')
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
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card pl-5 pr-5">
                <div class="card-body">
                    <p class="h2 font-weight-bold">Add New Pizza</p>
                    <form method="POST" action="/admin">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="pizzaname" class="col-sm-3 col-form-label">Pizza Name: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('pizzaname') is-invalid @enderror" id="pizzaname" name="pizzaname" required autocomplete="pizzaname" autofocus >
                                @error('pizzaname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pizzaprice" class="col-sm-3 col-form-label">Pizza Price: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('pizzaprice') is-invalid @enderror" id="pizzaprice" name="pizzaprice" required autocomplete="pizzaprice" autofocus>
                                @error('pizzaprice')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pizzadesc" class="col-sm-3 col-form-label">Pizza Description: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('pizzadesc') is-invalid @enderror" id="pizzadesc" name="pizzadesc" required autocomplete="pizzadesc" autofocus>
                                @error('pizzadesc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pizzaimg" class="col-sm-3 col-form-label">Pizza Image: </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control @error('pizzaimg') is-invalid @enderror" id="pizzaimg" name="pizzaimg" required autocomplete="pizzaimg" autofocus>
                                @error('pizzaimg')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                            
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Pizza') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection