<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('tasks', 'TasksController@index');
Route::get('task/{id}', 'TasksController@show');
Route::post('task', 'TasksController@store');
Route::put('task/{id}', 'TasksController@update');
Route::delete('task/{id}', 'TasksController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

