@extends('layouts/app')

{{-- @section('link1', 'login')
@section('link1Url', '/login')
@section('link2', 'Register') --}}
@section('title', 'Welcome')

@section('content')

<div class="container">

    <p class="h1 mt-3"> Our freshy made pizza!</p>
    

    <div class="jumbotron bg-light">
        <p class="h3 text-muted"> Order it now!</p>

        <form action="{{ url('/search') }}" method="GET">
            <div class="form-row ml-1 mt-4">

                <label class="mt-1" for="">Search Pizza: </label>
        
                <div class="col ml-2 mr-2">
                    <input type="text" class="form-control" name="key">
                </div>
        
                <button type="submit" class="btn btn-primary mb-2">Search</button>
        
            </div>
        </form>
        
        
        <div class="row row-cols-1 row-cols-md-3 mb-4 mt-5">
        
            @foreach ($pizzas as $pizza)
                <div class="col-md-4 mb-4">
                    <a href="/pizza-detail/{{ $pizza->id }}" class="text-reset text-decoration-none">

                        <div class="card" style="width: 20rem;">
                            <img src="assets/{{ $pizza->photo }}" class="card-img-top">
                
                            <div class="card-body">
                            <h6 class="card-title">{{ $pizza->name }} </h6>
                            <p class="text-muted">Rp. {{ $pizza->price }}</p>
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
