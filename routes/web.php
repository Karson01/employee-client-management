<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ZoneController;

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
        //Route::view('/employee','admin.employeelist')->name('employee');
        Route::view('/employee-work','admin.employeework')->name('employee-work');
        Route::view('/employee-work-entry','admin.employeeworkentry')->name('employee-work-entry');
        Route::view('/employee-work-report','admin.employeeworkreport')->name('employee-work-report');

       // Route::view('/employeelist','client')->name('employeelist');
       // Route::view('/client','admin.clientlist')->name('client');
        Route::view('/client-work','admin.clientwork')->name('client-work');
        Route::view('/client-work-entry','admin.clientworkentry')->name('client-work-entry');
        Route::view('/client-work-report','admin.clientworkreport')->name('client-work-report');
       // Route::view('/clientlist','client.clientlist')->name('clientlist');
        //Route::post('/clientlist', 'ClientController@store')->name('clientlist');
        //Route::get('client-list', [App\Http\Controllers\ClientController::class, 'index']);   



       Route::view('/zone','admin.zone')->name('zone');
       Route::get('/zone-list', [App\Http\Controllers\ZoneController::class, 'index'])->name('zone-list');
       Route::post('/admin/zone', [App\Http\Controllers\ZoneController::class, 'storezone'])->name('store-zone');
       //Route::get('/admin/zone/{id}/update', [App\Http\Controllers\ZoneController::class, 'updatezoneForm'])->name('update-zone-form');
       Route::post('/admin/zone/{id}/update', [App\Http\Controllers\ZoneController::class, 'updatezone'])->name('update-zone');
       Route::post('/admin/zone/{id}/delete', [App\Http\Controllers\ZoneController::class, 'deletezone'])->name('delete-zone');


       Route::view('/ccnl','admin.ccnl')->name('ccnl');
       Route::get('/ccnl-list', [App\Http\Controllers\CcnlController::class, 'index'])->name('ccnl-list');
       Route::post('/admin/ccnl', [App\Http\Controllers\CcnlController::class, 'storeccnl'])->name('store-ccnl');
       Route::get('/admin/ccnl/{id}/update', [App\Http\Controllers\CcnlController::class, 'updateccnlForm'])->name('update-ccnl-form');
       Route::post('/admin/ccnl/{id}/update', [App\Http\Controllers\CcnlController::class, 'updateccnl'])->name('update-ccnl');
       Route::post('/admin/ccnl/{id}/delete', [App\Http\Controllers\CcnlController::class, 'deleteccnl'])->name('delete-ccnl');

       Route::view('/society','admin.society')->name('society');
       Route::get('/society-list', [App\Http\Controllers\SocietyController::class, 'index'])->name('society-list');
       Route::post('/admin/society', [App\Http\Controllers\SocietyController::class, 'storesociety'])->name('store-society');
       //Route::get('/admin/society/{id}/update', [App\Http\Controllers\SocietyController::class, 'updatesocietyForm'])->name('update-society-form');
       Route::post('/admin/society/{id}/update', [App\Http\Controllers\SocietyController::class, 'updatesociety'])->name('update-society');
       Route::post('/admin/society/{id}/delete', [App\Http\Controllers\SocietyController::class, 'deletesociety'])->name('delete-society');


       Route::view('/consorzio','admin.consorzio')->name('consorzio');
       Route::get('/consorzio-list', [App\Http\Controllers\ConsorzioController::class, 'index'])->name('consorzio-list');
       Route::post('/admin/consorzio', [App\Http\Controllers\ConsorzioController::class, 'storeconsorzio'])->name('store-consorzio');
       //Route::get('/admin/consorzio/{id}/update', [App\Http\Controllers\ConsorzioController::class, 'updateconsorzioForm'])->name('update-consorzio-form');
       Route::post('/admin/consorzio/{id}/update', [App\Http\Controllers\ConsorzioController::class, 'updateconsorzio'])->name('update-consorzio');
       Route::post('/admin/consorzio/{id}/delete', [App\Http\Controllers\ConsorzioController::class, 'deleteconsorzio'])->name('delete-consorzio');


       Route::view('/client','admin.client')->name('client');       
       Route::get('/client-list', [App\Http\Controllers\ClientController::class, 'index'])->name('client-list');
       Route::post('/admin/client', [App\Http\Controllers\ClientController::class, 'storeclient'])->name('store-client');
      // Route::get('/admin/client/{id}/update', [App\Http\Controllers\ClientController::class, 'updateclientForm'])->name('update-client-form');
       Route::post('/admin/client/{id}/update', [App\Http\Controllers\ClientController::class, 'updateclient'])->name('update-client');
       Route::post('/admin/client/{id}/delete', [App\Http\Controllers\ClientController::class, 'deleteclient'])->name('delete-client');

       Route::view('/client-work-entry','admin.clientworkentry')->name('client-work-entry');
       Route::get('/client-work-entry-list', [App\Http\Controllers\ClientWorkController::class, 'index'])->name('client-work-entry-list');

       Route::view('/employee','admin.employee')->name('employee');       
       Route::get('/employee-list', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee-list');
       Route::post('/admin/employee', [App\Http\Controllers\EmployeeController::class, 'storeemployee'])->name('store-employee');
       //Route::get('/admin/employee/{id}/update', [App\Http\Controllers\EmployeeController::class, 'updateemployeeForm'])->name('update-employee-form');
       Route::post('/admin/employee/{id}/update', [App\Http\Controllers\EmployeeController::class, 'updateemployee'])->name('update-employee');
       Route::post('/admin/employee/{id}/delete', [App\Http\Controllers\EmployeeController::class, 'deleteemployee'])->name('delete-employee');


        //Route::view('/consorzio','admin.consorzio')->name('consorzio');
        //Route::view('/society','admin.society')->name('society');
        //Route::view('/ccnl','admin.ccnl')->name('ccnl');
        Route::view('/holiday','admin.holiday')->name('holiday');
        Route::view('/user-permission','admin.userpermission')->name('user-permission');
        //Route::resource('users', ClientController::class);
       // Route::post('/clientadd', 'ClientController@storeclient')->name('clientadd');


       
//Route::get('/client', array('as'=>'admin.index','uses'=>'App\Http\Controllers\ClientController@index'));
//Route::get('/products/add', array('as'=>'product.add','uses'=>'ProductController@add'));
//Route::post('/products/insert', array('as'=>'product.insert','uses'=>'ProductController@insert'));
//Route::get('/products/show/{id}', array('as'=>'product.show','uses'=>'ProductController@show'));
//Route::get('/products/edit/{id}', array('as'=>'product.edit','uses'=>'ProductController@edit'));

        
    //});
    //Route::middleware(['auth'])->group(function(){
    //    Route::view('/home','client.home')->name('home');
    //});

    
//});

