<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:api')->get('/get-authenticated-user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/api/get-authenticated-user', 'UserController@show');

// Route::group(['middleware' => 'auth:api'], function () {
    Route::get('get-authenticated-user', [UserController::class,'authUser']);
// });


