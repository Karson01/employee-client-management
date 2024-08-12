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
        Route::view('/login','admin.login')->name('login');
        Route::view('/register','admin.register')->name('register');
        Route::view('/dashboard','admin.dashboard')->name('dashboard');
        Route::view('/employee','admin.employeelist')->name('employee');
        Route::view('/employee-work','admin.employeework')->name('employee-work');
        Route::view('/employee-work-entry','admin.employeeworkentry')->name('employee-work-entry');
        Route::view('/employee-work-report','admin.employeeworkreport')->name('employee-work-report');

       // Route::view('/employeelist','client')->name('employeelist');
        Route::view('/client','admin.clientlist')->name('client');
        Route::view('/client-work','admin.clientwork')->name('client-work');
        Route::view('/client-work-entry','admin.clientworkentry')->name('client-work-entry');
        Route::view('/client-work-report','admin.clientworkreport')->name('client-work-report');
       // Route::view('/clientlist','client.clientlist')->name('clientlist');
        //Route::post('/clientlist', 'ClientController@store')->name('clientlist');
        Route::get('client-list', [App\Http\Controllers\ClientController::class, 'index']);



        Route::view('/zone','admin.zone')->name('zone');
        Route::view('/consorzio','admin.consorzio')->name('consorzio');
        Route::view('/society','admin.society')->name('society');
        Route::view('/ccnl','admin.ccnl')->name('ccnl');
        Route::view('/holiday','admin.holiday')->name('holiday');
        Route::view('/user-permission','admin.userpermission')->name('user-permission');
        //Route::resource('users', ClientController::class);
       // Route::post('/clientadd', 'ClientController@storeclient')->name('clientadd');


       
Route::get('/client', array('as'=>'admin.index','uses'=>'App\Http\Controllers\ClientController@index'));
//Route::get('/products/add', array('as'=>'product.add','uses'=>'ProductController@add'));
//Route::post('/products/insert', array('as'=>'product.insert','uses'=>'ProductController@insert'));
//Route::get('/products/show/{id}', array('as'=>'product.show','uses'=>'ProductController@show'));
//Route::get('/products/edit/{id}', array('as'=>'product.edit','uses'=>'ProductController@edit'));

        
    //});
    //Route::middleware(['auth'])->group(function(){
    //    Route::view('/home','client.home')->name('home');
    //});

    
//});

