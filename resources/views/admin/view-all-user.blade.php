@extends('layouts/app')

@section('title', 'View All User')
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

    <div class="row justify-content-start">
        @foreach ($users as $user)
            <div class="col-md-4 mb-4">
            
                <div class="card">
                    <div class="card-header bg-danger text-light"> User ID: {{ $user->id }} </div>
                    <div class="card-body">
                        <p class="card-text text-muted"> Username: {{ $user->name }} </p>
                        <p class="card-text text-muted"> Email: {{ $user->email }} </p>
                        <p class="card-text text-muted"> Address: {{ $user->address }} </p>
                        <p class="card-text text-muted"> Phone Number: {{ $user->phone }} </p>
                        <p class="card-text text-muted"> Gender: {{ $user->gender }} </p>
                    </div>
                </div>
            
            </div>
        @endforeach
    </div>

</div>

@endsection