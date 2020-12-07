<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\User;

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

        // $request->validate([
        //     'pizzaname'=>'required',
        //     'pizzaprice'=>'required',
        //     'pizzadesc'=>'required',
        //     'pizzaimg'=>'required',
        // ]);

        // $pizza = new Pizza;
        // $pizza->name = $request->pizzaname;
        // $pizza->price = $request->pizzaprice;
        // $pizza->description = $request->pizzadesc;
        // $pizza->photo = $request->pizzaimg;


        // $pizza->save();

        // Pizza::create($request->all());

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

    //Pizza Detail
    public function show(Pizza $pizza){
        return view('admin/admin-pizza-detail-page', compact('pizza'));
    }

    //Edit Pizza
    public function editpizza(Pizza $pizza)
    {
        return view('admin/edit-pizza-page', compact('pizza'));
    }
    
    public function update(Request $request, Pizza $pizza){

        // Pizza::where('id', $pizza->id)
        //   ->update([
        //         'name' => $request['editpizzaname'],
        //         'price' => $request['editpizzaprice'],
        //         'description' => $request['editpizzadesc'],
        //         'photo' => $request['editpizzaimg']        
        //       ]);

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
