<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\User;
use App\Transaction;

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

    public function store(Request $request){

        $pizza =  Pizza::create([
            'name' => $request['pizzaname'],
            'price' => $request['pizzaprice'],
            'description' => $request['pizzadesc'],
            'photo' => $request['pizzaimg'],
        ]);

        return redirect('/admin/add-pizza');

    }

 

    public function viewAllUser(){
        $users = User::all();
        return view('admin/view-all-user', compact('users'));
    }

    public function viewAllUserTransaction(){
        $transactions = Transaction::all();
        return view('admin/view-all-user-transaction', compact('transactions'));
    }

    //Pizza Detail
    public function show(Pizza $pizza){
        return view('admin/admin-pizza-detail-page', compact('pizza'));
    }

    public function addPizzaPage(){
        return view('admin/add-pizza-page');
    }

    //Edit Pizza
    public function editpizza(Pizza $pizza)
    {
        return view('admin/edit-pizza-page', compact('pizza'));
    }
    
    public function update(Request $request, Pizza $pizza){

            Pizza::where('id', $pizza->id)
            ->update([
                    'name' => $request->editpizzaname,
                    'price' => $request->editpizzaprice,
                    'description' => $request->editpizzadesc,
                    'photo' => $request->editpizzaimg        
                ]);

        return redirect('/admin');
    }


    //Pizza Delete
    public function deletepizza(Pizza $pizza)
    {
        return view('admin/delete-pizza-page', compact('pizza'));
    }

    public function destroy(Pizza $pizza){

        Pizza::destroy($pizza->id);

        return redirect('/admin');
    }



}
