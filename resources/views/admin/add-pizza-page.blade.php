@extends('layouts/app')

@section('title', 'Add Pizza')
@section('link1', 'View All User Transaction')
@section('link2', 'View All User')
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
                    
                    <div class="form-group row">
                        <label for="pizzaname" class="col-sm-3 col-form-label">Pizza Name: </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="pizzaname" name="pizzaname">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pizzaprice" class="col-sm-3 col-form-label">Pizza Price: </label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="pizzaprice" name="pizzaprice">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pizzadesc" class="col-sm-3 col-form-label">Pizza Description: </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="pizzadesc" name="pizzadesc">
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="pizzaimg" class="col-sm-3 col-form-label">Pizza Image: </label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="pizzaimg" name="pizzaimg">
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

@endsection