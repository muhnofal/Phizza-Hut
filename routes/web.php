<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::group(['middleware' => 'auth'], function() {
//     Route::get('home', 'HomeController@index'); 
// });

// Route::get('login', function(){
//     return view('login');
// });

// Route::get('/home', function(){
//     return view('member/home-member-page');
// });
// Route::get('/', 'AuthController@index')->name('login');
// Route::post('login', 'AuthController@login')->name('login');
// Route::get('logout', 'AuthController@logout')->name('logout');


Auth::routes();

Route::get('/', 'GuestController@index')->middleware('guest');
Route::get('/pizza-detail/{pizza}', 'GuestController@show')->middleware('guest');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/add-pizza', function(){
    return view('admin/add-pizza-page');
});
Route::get('/admin/pizza-detail/{pizza}', 'AdminController@show');
Route::get('/admin/edit-pizza/{pizza}', 'AdminController@editpizza');
Route::get('/admin/delete-pizza/{pizza}', 'AdminController@deletepizza');

Route::get('/user', 'UserController@index')->middleware('verified');
Route::get('/user/pizza-detail/{pizza}', 'UserController@show')->middleware('verified');

Route::get('/user/view-transaction-history', function(){
    return view('user/view-transaction-history-page');
})->middleware('verified');










