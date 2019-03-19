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

// Route::middleware('jwt.auth')->get('/product', 'ProductController@index')->name('api-product.index');
Route::get('/product', 'ProductController@index')->name('api-product.index');
Route::get('/employee', 'EmployeeController@index')->name('api-employee.index');
Route::middleware('jwt.auth')->get('/deliveryNote', 'DeliveryNoteController@index')->name('api-deliveryNote.index');
Route::middleware('jwt.auth')->get('/orderForm', 'OrderFormController@index')->name('api-orderForm.index');
Route::middleware('jwt.auth')->get('/applicationForm', 'ApplicationFormController@index')->name('api-applicationForm.index');
Route::get('/api', 'ProductController@index')->name('api-product.index');

// -- jwt auth
Route::post('/register', 'AuthController@register')->name('register');
Route::post('/login', 'AuthController@login')->name('login');
Route::post('/logout', 'AuthController@logout')->name('logout');



// Route::resources([
//     'product' => 'ProductController',
//     'employee' => 'EmployeeController',
//     'deliveryNote' => 'DeliveryNoteController',
//     'orderForm' => 'OrderFormController',
//     'applicationForm' => 'ApplicationFormController',
//     // 'auth' => "AuthController",
//     ]);
