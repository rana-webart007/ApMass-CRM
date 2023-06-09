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
use App\Http\Controllers\client\ServiceManageController;
use App\Http\Controllers\client\TabManageController;

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminMattersManageController;
use App\Http\Controllers\Admin\AdminContactsManageController;

use App\Http\Controllers\client\firm\FirmManageController;
use App\Http\Controllers\client\firm\FirmDetailsManageController;
use App\Http\Controllers\client\firm\StaffManageController;
use App\Http\Controllers\client\firm\TimeAndActivitiesController;
use App\Http\Controllers\client\firm\AccountManageController;

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

           /**
            * a client can attempt for login for 5 times in a minute
            * check -- app\provider\RouteServicePrtovider
           */

           Route::post('login/action', 'login_action')->middleware('throttle:client_login')->name('login.action');

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
            Route::get('matter/page', 'page')->name('matters.page');
            Route::get('matter-add', 'matter_add')->name('matters.add.page');
            Route::get('matter/get-by-area/{area}', 'matter_get_by_area')->name('matter.get-by-area');
            Route::get('matter/get-client-role', 'get_client_role')->name('matter.get-client-role');
            Route::post('matter/add-action', 'add_action')->name('matter.add.action');
            Route::get('matter/delete/{id}', 'matter_delete')->name('matter.delete');
            Route::get('matter/edit/page/{id}', 'matter_edit_page')->name('matter.edit.page');
            
            
            /**
             * Filter Matter..
            */


            Route::get('matter/filter/{type}', 'matter_filter')->name('matter.filter');
        });

        /**
         * contacts
        */

        Route::controller(ContactsManageController::class)
        ->group(function(){
            Route::get('contacts/page', 'page')->name('contacts.page');
            Route::get('contacts/search/address/{search_for}', 'search_address')->name('contacts.search.address');
            Route::get('contacts/search/address/by-id/{search_id}', 'search_address_by_id')->name('contacts.search.address.by.id');
            Route::post('contacts/person/add/action', 'person_contact_add_action')->name('contacts.person.add.action');
            Route::post('contacts/business/add/action', 'business_contact_add_action')->name('contacts.business.add.action');
            Route::get('contacts/person/delete/{id}', 'person_delete')->name('contacts.person.delete');
            Route::get('contacts/person/edit/page/{id}', 'person_edit_page')->name('contacts.person.edit.page');
            Route::post('contacts/person/edit/action/{id}', 'person_edit_action')->name('contacts.person.edit.action');

            /**
             * Filter Contacts
            */

            Route::get('contacts/page/filter/{type}', 'contacts_filter')->name('contacts.page.filter');

            /**
             * Restore deleted contacts
            */

            Route::get('contacts/restore/{id}/{type}', 'contact_restore')->name('contacts.restore');
            Route::get('contacts/business/delete/{id}', 'business_delete')->name('contacts.business.delete');

            /**
             * Business Edit
            */

            Route::get('contacts/business/edit/page/{id}', 'business_edit_page')->name('contacts.business.edit.page');
            Route::post('contacts/business/edit/action/{id}', 'business_edit_action')->name('contacts.business.edit.action');

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

        /**
         * Services
        */

        Route::controller(ServiceManageController::class)
        ->group(function(){
            Route::get('service/page', 'page')->name('service.page');
        });

        /**
         * Manage Tabs
         */

         Route::controller(TabManageController::class)
        ->group(function(){
            Route::get('delete/tab/{id}/{type}', 'delete_tab')->name('delete.tab');
        });

        /**
         * Firm Manage
        */

        Route::controller(FirmManageController::class)
        ->group(function(){
            Route::get('firm/details', 'firm_details')->name('firm.details');
            Route::get('firm/staff-users', 'firm_stuff_users')->name('firm.stuff-users');
            Route::get('firm/time-activities', 'time_and_activities')->name('firm.time-activities');
            Route::get('firm/activity/create', 'activity_create')->name('firm.activity.create');
            Route::get('firm/account/page', 'account_page')->name('firm.account.page');
        });

        /**
         * Firm Details
         */

        Route::controller(FirmDetailsManageController::class)
        ->group(function(){
            Route::post('firm/details/action', 'firm_details_action')->name('firm.details.action');
        });

        /**
         * Staff & User 
        */

        Route::controller(StaffManageController::class)
        ->group(function(){
            Route::post('staff/add/action', 'staff_add_action')->name('staff.add.action');
            Route::get('staff/delete/{id}', 'staff_delete')->name('staff.delete');
            Route::get('staff/edit/{id}', 'staff_edit')->name('staff.edit');
            Route::post('staff/edit/action/{id}', 'staff_edit_action')->name('staff.edit.action');
        });

        /**
         *  Time & Activities 
        */

        Route::controller(TimeAndActivitiesController::class)
        ->group(function(){
            Route::post('firm/billing/action', 'firm_billing_action')->name('firm.billing.action');
        });

        /**
         * Accounts
        */

        Route::controller(AccountManageController::class)
        ->group(function(){
             Route::post('firm/trust/account/add/action', 'trust_add_action')->name('firm.trust.account.add.action');
             Route::get('firm/trust/account/delete/{id}', 'account_delete')->name('firm.trust.account.delete');
             Route::get('firm/trust/account/edit/page/{id}', 'account_edit_page')->name('firm.trust.account.edit.page');
             Route::post('firm/trust/account/edit/action/{id}', 'account_edit_action')->name('firm.trust.account.edit.action');
             Route::get('firm/trust/account/{id}/{status}', 'status_change')->name('firm.trust.account.status.change');
             Route::post('firm/trust/bankaccount/setting', 'bank_account_settings')->name('firm.trust.bank.account.setting');

             Route::post('firm/trust/operating/checks', 'trust_operating_checks')->name('firm.trust.operating.check');
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

            /**
             * Client Role
            */

            Route::get('matters/client/get-matters-by-area/{area}', 'get_matters_by_area')->name('matter.get-by-area');
            Route::post('matters/client/role-add-action', 'client_role_add_action')->name('matter.client-role-add-action');
            Route::get('matters/client/role-delete/{id}', 'client_rolde_delete')->name('matter.client-role-delete');
            Route::get('matters/client/role-edit/{id}', 'client_rolde_edit')->name('matter.client-role-edit');
            Route::post('matters/client/role-edit-action/{id}', 'client_role_edit_action')->name('matter.client-role-edit-action');
        });

        /**
         * Contacts
        */

        Route::controller(AdminContactsManageController::class)->group(function(){
              Route::get('contact/page', 'contact_page')->name('contact.page');
              Route::get('contact/add/address', 'contact_add_address')->name('contact.add.address');
              Route::post('contact/add/address/action', 'contact_add_address_action')->name('contact.add.address.action');
              Route::get('contact/address/delete/{id}', 'contact_address_delete')->name('contact.address.delete');
              Route::get('contact/edit/address/{id}', 'contact_edit_address')->name('contact.edit.address');
              Route::post('contact/edit/address/action/{id}', 'contact_edit_address_action')->name('contact.edit.address.action');
        });

    });
});