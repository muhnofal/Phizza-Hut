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
    <div class="card mb-3" style="max-width: 100%">
        <div class="row no-gutters p-5">
            <div class="col-md-4">
                <img src="/assets/{{ $pizza->photo }}" class="card-img" alt="Ini Gambar Pizza">
            </div>
            <div class="col-md-8">
                <div class="card-body pl-5 pr-5">
                    <p class="h5 font-weight-bold">Edit Pizza Details</p>
                    
                    <form method="POST" action="/admin/{{ $pizza->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group row">
                            <label for="editpizzaname" class="col-sm-3 col-form-label">Pizza Name: </label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control @error('editpizzaname') is-invalid @enderror" id="editpizzaname" name="editpizzaname" value="{{ $pizza->name }}" required autocomplete="editpizzaname" autofocus>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="editpizzaprice" class="col-sm-3 col-form-label">Pizza Price: </label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control @error('editpizzaprice') is-invalid @enderror" id="editpizzaprice" name="editpizzaprice" value="{{ $pizza->price }}" required autocomplete="editpizzaprice" autofocus>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <label for="editpizzadesc" class="col-sm-3 col-form-label">Pizza Description: </label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control @error('editpizzadesc') is-invalid @enderror" id="editpizzadesc" name="editpizzadesc" value="{{ $pizza->description }}" required autocomplete="editpizzadesc" autofocus>
                            </div>
                        </div>
        
                        <div class="form-group row">
        
                            <label for="editpizzaimg" class="col-sm-3 col-form-label">Pizza Image: </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control @error('editpizzaimg') is-invalid @enderror" id="editpizzaimg" name="editpizzaimg" value="{{ $pizza->photo }}" required autocomplete="editpizzaimg" autofocus>
                            </div>
        
                        </div>
                            
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Pizza') }}
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