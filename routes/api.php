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

//all apis here must be api auth
Route::group(['middleware' => ['api','checkPassword','changeLanguage'],'namespace'=>'Api'], function () {
    Route::post('get-main-categories','CategoriesController@index');

});