<?php

use Illuminate\Support\Facades\Route;


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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});   

Auth::routes();
    Route::get('/stores'                    , 'StoreController@list');
    
    Route::get('/stores/create'             , 'StoreController@create');
    Route::post('/stores/create'            , 'StoreController@create');

    Route::get('/stores/edit/{id?}'         , 'StoreController@update');
    Route::post('/stores/edit/{id?}'        , 'StoreController@update');

    Route::get('/stores/delete/{id?}'       , 'StoreController@delete');

    Route::post('/stores/update/_bulk'      , 'StoreController@_bulk');
    // end stores
    Route::get('/categories'                    , 'CategoryController@list');
    
    Route::get('/categories/create'             , 'CategoryController@create');
    Route::post('/categories/create'            , 'CategoryController@create');

    Route::get('/categories/edit/{id?}'         , 'CategoryController@update');
    Route::post('/categories/edit/{id?}'        , 'CategoryController@update');

    Route::get('/categories/delete/{id?}'       , 'CategoryController@delete');

    Route::post('/categories/update/_bulk'      , 'CategoryController@_bulk');
    // end category
    Route::get('/products'                    , 'ProductController@list');
    
    Route::get('/products/create'             , 'ProductController@create');
    Route::post('/products/create'            , 'ProductController@create');

    Route::get('/products/edit/{id?}'         , 'ProductController@update');
    Route::post('/products/edit/{id?}'        , 'ProductController@update');

    Route::get('/products/delete/{id?}'       , 'ProductController@delete');

    Route::post('/products/update/_bulk'      , 'ProductController@_bulk');
    // end category
// Route::get('/register' , 'RegisterController@create');
Route::get('/dashboard', 'DashboardController@index');
Route::prefix('dashboard')->group(function () {
    /*
    AREA ROUTES
    */
    
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
