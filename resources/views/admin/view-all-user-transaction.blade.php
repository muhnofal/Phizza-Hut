@extends('layouts/app')

@section('title', 'Vuew All User Transaction')
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

    <div class="row justify-content-center">
            
        <div class="col-md-12 mb-4">
                
            <div class="card">

                <div class="card-header bg-danger text-light">
                    <p class="card-text m-1"> Transaction at 2020-05-17 07:09:11</p>
                    <p class="card-text m-1"> User ID: 2</p>
                    <p class="card-text m-1"> Username: user</p>
                </div>
                <div class="card-header bg-light text-danger">
                    <p class="card-text m-1"> Transaction at 2020-05-17 07:09:11</p>
                    <p class="card-text m-1"> User ID: 2</p>
                    <p class="card-text m-1"> Username: user</p>
                </div>

            </div>

        </div>

</div>

@endsection