@extends('layouts.app')

@section('title', 'View Transaction History')

@section('link1', 'View Transaction History')
@section('link1ref', '/user/view-transaction-history')
@section('link2', 'View Cart')
@section('link2ref', '/user/view-cart')

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
                
            <div class="card">
                
                @foreach ($transactions as $transaction)

                @php
                $id = $transaction->id;
                    
                @endphp

                @if ($id%2==1)
                    <a href="/user/view-transaction-history/transaction-detail/{{ $transaction->id }}" class="text-reset text-decoration-none">
                        <div class="card-body bg-danger text-light"> Transaction at {{ $transaction->created_at }} </div>
                    </a>
                @else
                    <a href="/user/view-transaction-history/transaction-detail/{{ $transaction->id }}" class="text-decoration-none text-reset">
                        <div class="card-body"> Transaction at {{ $transaction->created_at }} </div>
                    </a>
                @endif

                @endforeach

            </div>

        </div>

    </div>

</div>

@endsection