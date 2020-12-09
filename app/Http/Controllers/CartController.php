<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Pizza;
use App\Transaction;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Untuk mengambil User Id
        $user = Auth::user();
        $carts = Cart::all()->where('user_id', $user->id);
        $amount = Cart::where('user_id', $user->id)->count();

        return view('user/view-cart-page', compact('carts', 'amount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'pizza_id' => $request->pizza_id,
            'username' => $user->name,
            'total_price' => $request->totalPerItem,
            'quantity' => $request->quantity,
        ]);
        
        $cart = Cart::where('user_id', $user->id);

        $cart->delete();

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transactions = Transaction::all()->where('id', $id);
        return view('user/transaction-detail-page', compact('transactions'));
        // return $transactions;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        Cart::where('pizza_id', $request->pizza_id)
        ->update([
                'quantity' => $request->quantity,        
            ]);
            
        return redirect('/user/view-cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Cart::destroy($request->cart_id);

        return redirect('/user/view-cart');

    }
}
