<?php

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
    {
        return view('dashboard');
    }
})->middleware('auth');

Route::get('hi', function () {
    {
        return view('hi');
    }
});
Route::get('invoice', function () {
    {
        return view('billing.invoice');
    }
});

//Clients//
Route::get('/client','ClientController@index')->name('client')->middleware('auth');
Route::get('/client/data','ClientController@data')->name('client.data');
Route::get('/client/create','ClientController@create')->name('client.create');
Route::post('/client/update/{id}','ClientController@update')->name('client.update');
Route::post('/client/store','ClientController@store')->name('client.store');
Route::get('/client/show/{id}','ClientController@show')->name('client.show');
Route::get('/client/destroy/{id}', 'ClientController@destroy')->name('client.destroy');
Route::get('/client/{id}/edit','ClientController@edit')->name('client.edit');

//Vendors//
Route::get('/vendor','VendorController@index')->name('vendor');
Route::get('/vendor/data','VendorController@data')->name('vendor.data');
Route::get('/vendor/create','VendorController@create')->name('vendor.create');
Route::post('/vendor/update/{id}','VendorController@update')->name('vendor.update');
Route::post('/vendor/store','VendorController@store')->name('vendor.store');
Route::get('/vendor/show/{id}','VendorController@show')->name('vendor.show');
Route::get('/vendor/destroy/{id}', 'VendorController@destroy')->name('vendor.destroy');
Route::get('/vendor/{id}/edit','VendorController@edit')->name('vendor.edit');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

//Billing//
Route::get('/billing','InvoiceController@index')->name('billing')->middleware('auth');
Route::get('/invoice/search','InvoiceController@search')->name('invoice.search');
Route::get('/billing/view','InvoiceController@view')->name('billing.view');
Route::post('/invoice/store','InvoiceController@store')->name('invoice.store');

//Quotations//
Route::get('/quotations','QuotesController@index')->name('quotations')->middleware('auth');
Route::get('/quotations/search','QuotesController@result')->name('quotations.search');
Route::get('/quotations/view','QuotesController@view')->name('quotations.view');
Route::post('/quotations/store','QuotesController@store')->name('quotations.store');

Route::get('/home', 'HomeController@index')->name('home');
