<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $pizzas = Pizza::paginate(6);

        if(request()->user()->hasRole('user')){
            return view('home', compact('pizzas'));
        }else{
            return redirect('/');
        }


    }
}