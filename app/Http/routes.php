<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', 'Controller@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});

Route::group(['middleware' => ['web', 'auth']], function () {
    /*Route::get('/', function(){
        return view('home');
    });*/
    Route::get('/', 'RecipesController@index');
    Route::get('/create', 'RecipesController@create');
    Route::post('sendRecipes', 'RecipesController@save');
    Route::get('/{id}/edit', 'RecipesController@edit');
    Route::put('/{id}', 'RecipesController@update');
    Route::get('/{id}', 'RecipesController@show');
    Route::delete('/{id}', 'RecipesController@delete');

    //Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
