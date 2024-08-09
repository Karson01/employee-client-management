<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ClientController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::post('/clientadd','ClientController@store')->name('clientadd');


//Route::prefix('user')->name('user.')->group(function(){
    //Route::middleware(['guest'])->group(function(){
        Route::view('/login','client.login')->name('login');
        Route::view('/register','client.register')->name('register');
        Route::view('/dashboard','client.dashboard')->name('dashboard');
        Route::view('/employee','client.employeelist')->name('employee');
       // Route::view('/employeelist','client')->name('employeelist');
        Route::view('/client','client.clientlist')->name('client');
       // Route::view('/clientlist','client.clientlist')->name('clientlist');
        //Route::post('/clientlist', 'ClientController@store')->name('clientlist');
        Route::get('/client', 'App\Http\Controllers\ClientController@index');
        Route::view('/zone','client.zone')->name('zone');
        //Route::resource('users', ClientController::class);
       // Route::post('/clientadd', 'ClientController@storeclient')->name('clientadd');


       
Route::get('/client', array('as'=>'client.index','uses'=>'App\Http\Controllers\ClientController@index'));
//Route::get('/products/add', array('as'=>'product.add','uses'=>'ProductController@add'));
//Route::post('/products/insert', array('as'=>'product.insert','uses'=>'ProductController@insert'));
//Route::get('/products/show/{id}', array('as'=>'product.show','uses'=>'ProductController@show'));
//Route::get('/products/edit/{id}', array('as'=>'product.edit','uses'=>'ProductController@edit'));

        
    //});
    //Route::middleware(['auth'])->group(function(){
    //    Route::view('/home','client.home')->name('home');
    //});

    
//});

