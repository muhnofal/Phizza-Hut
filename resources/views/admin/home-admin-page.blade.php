@extends('layouts/app')

@section('title', 'Welcome')
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

    <div class="jumbotron bg-light">

        <a href="/admin/add-pizza">
            <button type="button" class="btn btn-dark">Add Pizza</button>
        </a>

        <div class="row row-cols-1 row-cols-md-3 mb-4 mt-5">
        
            @foreach ($pizzas as $pizza)
                <div class="col-md-4 mb-4">

                    <a href="/admin/pizza-detail/{{ $pizza->id }}" class="text-reset text-decoration-none">

                        <div class="card" style="width: 20rem;">
                            <img src="assets/{{ $pizza->photo }}" class="card-img-top">
                
                            <div class="card-body">
                            <p class="card-text">{{ $pizza->name }}</p>
                            <p class="text-muted">Rp. {{ $pizza->price }}</p>

                            <a href="admin/edit-pizza/{{ $pizza->id }}">
                                <button type="button" class="btn btn-primary">Update Pizza</button>
                            </a>

                            <a href="admin/delete-pizza/{{ $pizza->id }}">
                                <button type="button" class="btn btn-danger">Delete Pizza</button>
                            </a>

                
                            </div>
                
                        </div>

                    </a>

                </div>
            @endforeach

        </div>
        {{ $pizzas->links() }}
    </div>

</div>




@endsection