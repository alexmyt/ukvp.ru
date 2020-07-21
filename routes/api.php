<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use ukvp\CallbackRequest;

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

Route::post('callbackRequest','ConsultationController@callback');

Route::put('callbackRequest/{id}/status','ConsultationController@updateStatus');