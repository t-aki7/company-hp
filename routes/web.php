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
    return view('welcome');
});
Route::get('company_info', function () {
    return view('company_info');
})->name('company_info');
Route::get('products', function () {
    return view('products');
})->name('products');
Route::get('strength', function () {
    return view('strength');
})->name('strength');
Route::get('privacy_policy', function () {
    return view('p_policy');
})->name('privacy_policy');
Route::resource('contacts', 'ContactsController');
Route::post('contacts/confirm','ContactsController@confirm')->name('contacts.confirm');

Route::get('/index', 'ContactsController@index');