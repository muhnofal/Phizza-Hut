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
                    <p class="h5 font-weight-bold">{{ $pizza->name }}</p>

                    <p class="card-text">{{ $pizza->description }}</p>

                    <p class="card-text">Rp. {{ $pizza->price }}</p>
                        
                    <div class="form-group row mb-0">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-danger">
                                {{ __('Delete Pizza') }}
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection