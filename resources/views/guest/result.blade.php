@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
<div class="container">

    @if(count($results))
        
    

    <div class="jumbotron bg-light">

        <p class="h1 mt-3"> Ketemu, sekarang pesen!</p>
        
        <div class="row row-cols-1 row-cols-md-3 mb-4 mt-5">
        
            @foreach ($results as $result)

                <div class="col-md-4 mb-4">

                    <a href="/pizza-detail/{{ $result->id }}" class="text-reset text-decoration-none">

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