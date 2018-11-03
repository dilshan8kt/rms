<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'auth.login')->name('login');

Route::post('signin',[
    'uses' => 'AuthController@signin',
    'as' => 'signin'
]);

Route::get('dashboard', [
    'uses' => 'HomeController@index',
    'as' => 'dashboard'
]);

Route::get('location', [
    'uses' => 'LocationController@index',
    'as' => 'location'
]);

Route::post('location', [
    'uses' => 'LocationController@store',
    'as' => 'location'
]);

Route::put('location', [
    'uses' => 'LocationController@update',
    'as' => 'location'
]);

Route::delete('location', [
    'uses' => 'LocationController@destroy',
    'as' => 'location'
]);

Route::get('suppliers', [
    'uses' => 'SupplierController@index',
    'as' => 'suppliers'
]);

Route::post('supplier', [
    'uses' => 'SupplierController@store',
    'as' => 'supplier'
]);

Route::get('department', [
    'uses' => 'DepartmentController@index',
    'as' => 'department'
]);

Route::post('department', [
    'uses' => 'DepartmentController@store',
    'as' => 'department'
]);

Route::get('category', [
    'uses' => 'CategoryController@index',
    'as' => 'category'
]);

Route::get('product', [
    'uses' => 'ProductController@index',
    'as' => 'product'
]);

Route::get('/get_suggestions_for_select2','Select2Controller@GetSuggestionsForSelect2');