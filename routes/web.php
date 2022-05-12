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

Auth::routes();
// Route::get('/register' , 'RegisterController@create');
Route::get('/dashboard', 'DashboardController@index');
Route::prefix('dashboard')->group(function () {
    /*
    AREA ROUTES
    */
    Route::get('/categories'                    , 'CategoryController@list');
    
    Route::get('/categories/create'             , 'CategoryController@create');
    Route::post('/categories/create'            , 'CategoryController@create');

    Route::get('/categories/edit/{id?}'         , 'CategoryController@update');
    Route::post('/categories/edit/{id?}'        , 'CategoryController@update');

    Route::get('/categories/delete/{id?}'       , 'CategoryController@delete');

    Route::post('/categories/update/_bulk'      , 'CategoryController@_bulk');
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
