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

    Route::auth();

    /*
    |--------------------------------------------------------------------------
    | Home Routes
    |--------------------------------------------------------------------------
    */
    //Index
    Route::get('/', 'HomeController@index');

    //technician
    Route::get('tech/home/{id}', [
        'as' => 'tech',
        'uses' => 'HomeController@techIndex'
    ]);
    //user
    Route::get('user/home/{id}',  [
        'as' => 'user',
        'uses' => 'HomeController@userIndex']);
    /*------------------------------------------------------------------------*/

    /*
    |--------------------------------------------------------------------------
    | Taskorder Routes
    |--------------------------------------------------------------------------
    */
    // By Status
    Route::get('taskorder/index/{status?}', 'TaskorderController@index');
    //By Id
    Route::get('taskorder/show/{id}', 'TaskorderController@show');
    //Create - Show Form
    Route::get('taskorder/create/', 'TaskorderController@create');
    //Store - Create a user in DB
    Route::post('taskorder/store/', 'TaskorderController@store');
    //Return all tasks
    Route::get('taskorder/all', 'TaskorderController@all');
    //Show form to assign a tech
    Route::get('taskorder/assign/{id}', 'TaskorderController@assign');
    //Update task and assign a tech
    Route::post('taskorder/addtech', 'TaskorderController@addtech');
    //Show form Close task by tech
    Route::get('taskorder/close/{id}', 'TaskorderController@close');
    //Show form Close task by tech
    Route::post('taskorder/closeorder', 'TaskorderController@closeorder');
    /*
    |--------------------------------------------------------------------------
    | User Routes
    |--------------------------------------------------------------------------
    */
    //Create - Show Form
    Route::get('user/create', 'UserController@create');
    //Store - Create a user in DB
    Route::post('user/store', 'UserController@store');
    //Index - See all users
    Route::get('user/index', 'UserController@index');
    //Edit- Show form for editing
    Route::get('user/edit/{id}', 'UserController@edit');
    //Update- Update user in DB
    Route::put('user/update', 'UserController@update');
    //Delete- Delete user in DB
    Route::delete('user/destroy/{id}', 'UserController@destroy');

    /*
    |--------------------------------------------------------------------------
    | Fail Routes
    |--------------------------------------------------------------------------
    */
    //Index - List all fails
    Route::get('fail/index', 'FailController@index');
    //Create - Show Form
    Route::get('fail/create', 'FailController@create');
    //Store - Create a fail in DB
    Route::post('fail/store', 'FailController@store');
    //Edit- Show form for editing
    Route::get('fail/edit/{id}', 'FailController@edit');
    //Update- Update fail in DB
    Route::put('fail/update', 'FailController@update');
    //Delete- Delete fail in DB
    Route::delete('fail/destroy/{id}', 'FailController@destroy');



    //Error
    Route::get('error', function(){
        return view('errors.503');
    });

});
