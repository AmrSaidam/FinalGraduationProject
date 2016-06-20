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

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/dashboard', [
    'as' => 'dashboard',
    'uses' => function () {
        return view('Dashboard');
    }
]);

Route::get('/dashboard/SalePoint', [
    'as' => 'SalePoint',
    'uses' => function () {
        return view('Sales Point');
    }
]);

Route::get('/dashboard/ShowTraders', [
    'as' => 'ShowTraders',
    'uses' => function () {
        return view('ShowTraders');
    }
]);

Route::get('/dashboard/ShowProducts', [
    'as' => 'ShowProducts',
    'uses' => function () {
        return view('Show Product');
    }
]);
Route::get('/dashboard/SupplierInvoice', [
    'as' => 'SupplierInvoice',
    'uses' => function () {
        return view('SupplierInvoice');
    }
]);
Route::get('/dashboard/AddUser', [
    'as' => 'AddUser',
    'uses' => function () {
        return view('AddUser');
    }
]);
Route::get('/dashboard/ShowUsers', [
    'as' => 'ShowUsers',
    'uses' => function () {
        return view('ShowUsers');
    }
]);

Route::get('/dashboard/ShowSellingInvoices', [
    'as' => 'ShowSellingInvoices',
    'uses' => function () {
        return view('ShowSellingInvoices');
    }
]);
