<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserAuthManageController;
use App\Http\Controllers\client\ClientAuthManageController;

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


/**
 * client.. 
*/

Route::group(['prefix' => 'client', 'as' => 'client.'], function() {
    Route::controller(ClientAuthManageController::class)->group(function(){
           Route::get('login', 'login')->name('login');
           Route::post('login/action', 'login_action')->name('login.action');

           Route::get('register', 'register')->name('register');
           Route::post('register/action', 'register_action')->name('register.action');

           Route::get('logout', 'logout')->name('logout');
    });

    Route::middleware(['check.client'])->group(function(){
        Route::controller(ClientAuthManageController::class)->group(function(){
            Route::get('dashboard', 'dashboard')->name('dashboard');
        });
    });

});