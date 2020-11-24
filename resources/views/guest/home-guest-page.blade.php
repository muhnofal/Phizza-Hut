@extends('layouts/app')

{{-- @section('link1', 'login')
@section('link1Url', '/login')
@section('link2', 'Register') --}}

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
