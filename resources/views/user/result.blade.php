@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('link1', 'View Transaction History')
@section('link1ref', 'user/view-transaction-history')
@section('link2', 'View Cart')
@section('link2ref', 'user/view-cart')

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

    @if(count($results))
        
    

    <div class="jumbotron bg-light">

        <p class="h1 mt-3"> Ketemu, sekarang pesen!</p>
        
        <div class="row row-cols-1 row-cols-md-3 mb-4 mt-5">
        
            @foreach ($results as $result)

                <div class="col-md-4 mb-4">

                    <a href="/user/pizza-detail/{{ $result->id }}" class="text-reset text-decoration-none">

                        <div class="card" style="width: 20rem;">
                            <img src="/assets/{{ $result->photo }}" class="card-img-top">
                
                            <div class="card-body">
                            <p class="card-text">{{ $result->name }}</p>
                            <p class="text-muted">Rp. {{ $result->price }}</p>
                            </div>
                
                        </div>

                    </a>

                </div>

            @endforeach

        </div>
        {{ $results->links() }}
    </div>

    @else

    <div class="jumbotron bg-light">
        <p class="h1 mt-3 text-center">Pizzanya gk ada</p>
    </div>

    @endif

</div>




@endsection