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
//
//Route::get('/', function () {
//    return view('home/index');
//});


Route::get('/', 'Index@Index');
Route::get('category/{id}', 'Index@Index');


//Route::controller('/', 'Index');
Route::controller('/checkout', 'Checkout');
Route::controller('/cart', 'ShoppingCart');

Route::get('auth/google', 'Auth\AuthController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallback');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::get('/', 'Home@index');

Route::group(['middleware' => ['auth']], function() {

    Route::get('/profile', [
        'as' => 'profile', 'uses' => 'Home@index'
    ]);

    Route::get('/profile/{id}', [
        'as' => 'profile', 'uses' => 'Home@index'
    ]);

    Route::get('/edit', [
        'as' => 'edit', 'uses' => 'Member@editUser'
    ]);

    Route::post('/updateProfile', [
        'as' => 'updateProfile', 'uses' => 'Member@updateProfile'
    ]);

    Route::get('/add_product', [
        'as' => 'add_product', 'uses' => 'Product@addProduct'
    ]);
    Route::post('/save_product', [
        'as' => 'save_product', 'uses' => 'Product@saveProduct'
    ]);

    Route::get('/manage_product', [
        'as' => 'manage_product', 'uses' => 'Product@manageProduct'
    ]);

    Route::get('/delete_product/{id}', [
        'as' => 'delete_product', 'uses' => 'Product@deleteProduct'
    ]);

    Route::get('/edit_product/{id}', [
        'as' => 'edit_product', 'uses' => 'Product@editProduct'
    ]);


    Route::post('/update_product', [
        'as' => 'update_product', 'uses' => 'Product@updateProduct'
    ]);


    Route::get('/manage_category', [
        'as' => 'manage_category', 'uses' => 'Product@manageCategory'
    ]);


    Route::post('/save_category', [
        'as' => 'save_category', 'uses' => 'Product@saveCategory'
    ]);

    Route::get('/delete_category/{id}', [
        'as' => 'delete_category', 'uses' => 'Product@deleteCategory'
    ]);
});
