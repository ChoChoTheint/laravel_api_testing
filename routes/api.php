<?php

use App\Http\Controllers\API\AssignRepoController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('first','AssignController@first');
// Route::get('get','AssignController@get');
// Route::get('value','AssignController@value');
// Route::get('find','AssignController@find');
// Route::get('pluck','AssignController@pluck');
// Route::get('select','AssignController@select');
// Route::get('where','AssignController@where');
// Route::get('order','AssignController@order');
// Route::get('join','AssignController@join');

// Route::get('create','NewAssignController@create');
// Route::post('update/{id}','NewAssignController@update');
// Route::post('store','NewAssignController@store');
// Route::delete('destroy/{id}','NewAssignController@destroy');

// Route::get('show','ProgressUpdateController@show');
// Route::post('update/{id}','ProgressUpdateController@update');

Route::get('show/{search}','EmpSearchController@show');
Route::get('search/{name}','EmpSearchController@search');

Route::post('/store', 'API\AssignRepoController@store');
Route::post('/update/{id}', 'API\AssignRepoController@update');
Route::delete('/delete/{id}', 'API\AssignRepoController@delete');
