<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// -- jwt auth
Route::post('/login', 'AuthController@login')->name('login');
Route::post('/logout', 'AuthController@logout')->name('logout');


// // Route::middleware('jwt.auth')->get('/product', 'ProductController@index')->name('api-product.index');

Route::resources([
    'product' => 'ProductController',
    'employee' => 'EmployeeController',
    'deliverynote' => 'DeliveryNoteController',
    'orderform' => 'OrderFormController',
    'applicationform' => 'ApplicationFormController',
    'store' => 'StoreController',
    // 'auth' => "AuthController",
    ]);
