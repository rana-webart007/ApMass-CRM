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
use App\Http\Controllers\Admin\AdminMattersManageController;


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

        /**
         *  Matters Manage 
        */

        Route::controller(AdminMattersManageController::class)->group(function(){
            /**
             * Area of Law
            */

            Route::get('matters/area-of-law/add', 'area_of_law_add')->name('matter.area-of-law-add');
            Route::get('matters/type/add', 'matters_type_add')->name('matter.type-add');
            Route::get('matters/client/role/add', 'matters_client_role_add')->name('matter.client-role-add');
            Route::post('matters/area-of-law/add/action', 'area_of_law_add_action')->name('matter.area-of-law-add-action');
            
            Route::get('matters/law-area-edit/{id}', 'law_area_edit')->name('matter.law-area-edit');
            Route::post('matters/law-area-edit/action/{id}', 'law_area_edit_action')->name('matter.law-area-edit-action');
            Route::get('matters/law-area-delete/{id}', 'law_area_delete')->name('matter.law-area-delete');

            /**
             * Matter Type
            */

            Route::post('matters/type-add/action', 'matters_type_add_action')->name('matter.type-add-action');
            Route::get('matters/type-delete/{id}', 'type_delete')->name('matter.type-delete');
            Route::get('matters/type-edit/{id}', 'type_edit')->name('matter.type-edit');
            Route::post('matters/type-edit/action/{id}', 'type_edit_action')->name('matter.type-edit-action');
        });
    });
});