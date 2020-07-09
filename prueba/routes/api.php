<?php

use App\Products;
use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('products', 'ProductsController@index');
Route::get('products/{id}', 'ProductsController@show');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::post('products', 'ProductsController@store');
    Route::put('products/{id}', 'ProductsController@update');
    Route::delete('products/{id}', 'ProductsController@delete');
    Route::get('customers', 'CustomersController@index');
    Route::get('customers/{id}', 'CustomersController@show');
    Route::post('customers', 'CustomersController@store');
    Route::put('customers/{id}', 'CustomersController@update');
    Route::delete('customers/{id}', 'CustomersController@delete');
});





