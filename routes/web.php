<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserAuthManageController;
use App\Http\Controllers\client\ClientAuthManageController;
use App\Http\Controllers\client\ContactsManageController;
use App\Http\Controllers\client\TimeAndFeesManageController;
use App\Http\Controllers\client\InvoicesManageController;
use App\Http\Controllers\client\AccountsManageController;
use App\Http\Controllers\client\ReportManageController;
use App\Http\Controllers\client\MatterManageController;

use App\Http\Controllers\Admin\AdminAuthController;


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
 * bawenoc@mailinator.com
 */

/**
 * client.. 
*/

Route::group(['prefix' => 'client', 'as' => 'client.'], function() {
    Route::controller(ClientAuthManageController::class)->group(function(){
           Route::get('login', 'login')->name('login');
           Route::post('login/action', 'login_action')->name('login.action');

           Route::get('register', 'register')->name('register');
           Route::post('register/action', 'register_action')->name('register.action');

           Route::get('forgot/password', 'forgot_password_page')->name('forgot.password');
           Route::post('forgot/password/action', 'forgot_password_action')->name('forgot.password.action');

           Route::get('logout', 'logout')->name('logout');
    });

    Route::middleware(['check.client'])->group(function(){
        Route::controller(ClientAuthManageController::class)->group(function(){
            Route::get('dashboard', 'dashboard')->name('dashboard');
        });

        /**
         * Matters
        */

        Route::controller(MatterManageController::class)
        ->group(function(){
            Route::get('matter-add', 'matter_add')->name('matters.add.page');
        });

        /**
         * contacts
        */

        Route::controller(ContactsManageController::class)
        ->group(function(){
            Route::get('contacts/page', 'page')->name('contacts.page');
        });

        /**
         * Time & fees
        */

        Route::controller(TimeAndFeesManageController::class)
        ->group(function(){
            Route::get('time/page', 'page')->name('time.page');
        });

        /**
         * Invoices
        */

        Route::controller(InvoicesManageController::class)
        ->group(function(){
            Route::get('invoice/page', 'page')->name('invoice.page');
        });

        /**
         * Accounts
        */

        Route::controller(AccountsManageController::class)
        ->group(function(){
            Route::get('accounts/page', 'page')->name('accounts.page');
        });

        /**
         * Reports
        */

        Route::controller(ReportManageController::class)
        ->group(function(){
            Route::get('report/page', 'page')->name('report.page');
        });

    });

});

/**
* Admin
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::controller(AdminAuthController::class)->group(function(){
           Route::get('login', 'login_page')->name('login');
           Route::post('login/action', 'login_action')->name('login.action');

           Route::get('logout', 'logout')->name('logout');

           Route::get('forgot/password', 'forgot_password_page')->name('forgot.password');
           Route::post('forgot/password/action', 'forgot_password_action')->name('forgot.password.action');

    });

    Route::middleware(['check.admin'])->group(function(){
        Route::controller(AdminAuthController::class)->group(function(){
            Route::get('dashboard', 'dashboard')->name('dashboard');
        });
    });
});