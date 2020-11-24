<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// use Validator;

// use Session;
// use App\User;

class AuthController extends Controller
{
    //Jika user sudah login maka akan ke menu
    // public function showFormLogin(){
    //     if(Auth::check()){
    //         return redirect()->route('member/home-member-page');
    //     }
    //     return view('login');
    // }

    // public function login(Request $request){

    // }

    public function index(){
        // $id = Auth::id()->first();
        return view('login');
    }

    public function login(Request $request){
        // dd($request->all());
        $data = User::where('email', $request->email)->firstOrFail();
        if($data){
            if(Hash::check($request->password, $data->password)){
                session(['berhasi_login' => true]);
                return redirect('/home');
            }
        }
        return redirect('/');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }


}
