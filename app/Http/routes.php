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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});


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


//Main group for my Restfull app Simei
Route::group(['middleware' => ['web']], function () {
    //
    Route::resource('user', 'UserController',['only' => [
    'index', 'show'
    ]]);
    Route::resource('fail', 'FailController',['only' => [
    'index']]);
    Route::resource('status', 'StatusController',['only' => [
    'index']]);
    Route::resource('priority', 'PriorityController',['only' => [
    'index']]);
    Route::resource('impact', 'ImpactController',['only' => [
    'index']]);
    Route::resource('taskorder', 'TaskorderController');

});
