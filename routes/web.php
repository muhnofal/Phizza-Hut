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

Route::get('/home', 'HomeController@index')->name('home');

//Untuk Route ke Menu Guest
Route::get('/', 'GuestController@index')->middleware('guest');
Route::get('/pizza-detail/{pizza}', 'GuestController@show')->middleware('guest');
Route::get('/search', 'GuestController@search');

//Untuk Route ke Menu Admin
Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@store');
Route::get('/admin/add-pizza', 'AdminController@addPizzaPage');
Route::get('/admin/pizza-detail/{pizza}', 'AdminController@show')->middleware('verified');
Route::get('/admin/{pizza}/edit-pizza', 'AdminController@editpizza')->middleware('verified');
Route::patch('/admin/{pizza}', 'AdminController@update');
Route::get('/admin/delete-pizza/{pizza}', 'AdminController@deletepizza')->middleware('verified');
Route::delete('/admin/delete-pizza/{pizza}', 'AdminController@destroy');
Route::get('/admin/view-all-user', 'AdminController@viewAllUser');
Route::get('/admin/view-all-user-transaction', 'AdminController@viewAllUserTransaction');

//Untuk Route ke Menu User
Route::get('/user', 'UserController@index')->middleware('verified');
Route::get('/user/pizza-detail/{pizza}', 'UserController@show')->middleware('verified');
Route::get('/user/view-transaction-history/transaction-detail/{id}', 'CartController@show');
Route::post('/user/pizza-detail/{pizza}', 'UserController@addToCart');
Route::post('/user', 'CartController@store');
Route::get('/user/view-transaction-history', 'TransactionController@index');
Route::get('/user/view-cart', 'CartController@index');
Route::put('/user/view-cart', 'CartController@update');
Route::put('/user', 'CartController@update');
Route::delete('/user/view-cart', 'CartController@destroy');
Route::get('/user/search', 'UserController@search');





