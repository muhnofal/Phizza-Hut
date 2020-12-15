<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pizza;
use App\Cart;
use App\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $pizzas = Pizza::paginate(6);

        if(request()->user()->hasRole('user')){
            return view('user/home', compact('pizzas'));
        }else{
            return redirect('/');
        }

    }

    public function show(Pizza $pizza){
        return view('user/user-pizza-detail', compact('pizza'));
    }

    public function addToCart(Pizza $pizza, Request $request){

        $cart =  Cart::create([
            'user_id' => $request->user_id,
            'quantity' => $request->quantity,
            'pizza_id' => $pizza->id
        ]);

        return redirect('/user');

        // return $pizza;
    }

    public function search(Request $request){
        $search = $request->key;
        $results = Pizza::where('name', 'LIKE', '%' . $search . '%')->paginate(6);

        return view('user/result', compact('results'));
    }

}
