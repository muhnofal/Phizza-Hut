<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        $pizzas = Pizza::paginate(6);

        if (request()->user()->hasRole('admin')) {
            return view('admin/home-admin-page', compact('pizzas'));
        } else {
            return redirect('/');
        } 
    }
}
