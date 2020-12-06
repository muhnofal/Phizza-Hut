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

    public function show(Pizza $pizza){
        return view('admin/admin-pizza-detail-page', compact('pizza'));
    }

    public function editpizza(Pizza $pizza)
    {
        return view('admin/edit-pizza-page', compact('pizza'));
    }

    public function deletepizza(Pizza $pizza)
    {
        return view('admin/delete-pizza-page', compact('pizza'));
    }
}
