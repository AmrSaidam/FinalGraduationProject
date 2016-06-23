<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'=>['web']], function (){

    Route::get('/', function () {
        return view('RegisterNewAccount');
    });

    Route::post('/signup', [
        'uses' => 'userController@userSingUp',
        'as' => 'signup',
    ]);

    Route::get('/', 'AnchorController@RegisterNewAccount');

    Route::get('/dashboard', [
        'as' => 'dashboard',
        'uses' => 'AnchorController@Dashboard']);

    Route::get('/dashboard/SalePoint', [
        'as' => 'SalePoint',
        'uses' => 'AnchorController@SalePoint'
    ]);

    Route::get('/dashboard/ShowTraders', [
        'as' => 'ShowTraders',
        'uses' => 'AnchorController@ShowTraders'
    ]);

    Route::get('/dashboard/ShowProducts', [
        'as' => 'ShowProducts',
        'uses' => 'AnchorController@ShowProducts'
    ]);
    Route::get('/dashboard/SupplierInvoice', [
        'as' => 'SupplierInvoice',
        'uses' => 'AnchorController@SupplierInvoice'
    ]);
    Route::get('/dashboard/AddUser', [
        'as' => 'AddUser',
        'uses' => 'AnchorController@AddUser'
    ]);
    Route::get('/dashboard/ShowUsers', [
        'as' => 'ShowUsers',
        'uses' => 'AnchorController@ShowUsers'
    ]);

    Route::get('/dashboard/ShowSellingInvoices', [
        'as' => 'ShowSellingInvoices',
        'uses' => 'AnchorController@ShowSellingInvoices'
    ]);

    Route::get('/dashboard/ShowTradersInvoices', [
        'as' => 'ShowTradersInvoices',
        'uses' => 'AnchorController@ShowTradersInvoices'
    ]);

    Route::get('login', [
        'as' => 'Weblogin',
        'uses' => 'AnchorController@Login'
    ]);

    Route::get('/RegisterNewAccount', [
        'as' => 'RegisterNewAccount',
        'uses' => 'AnchorController@RegisterNewAccount'
    ]);

    Route::post('makeSale', [
        'as' => 'makeSale',
        'uses' => 'SaleController@makeSale'
    ]);

    Route::get('/try', [
        'as' => 'try',
        'uses' => 'AnchorController@tryy'
    ]);

});

