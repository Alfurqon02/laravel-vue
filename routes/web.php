<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [
    function () {
        return view('welcome');
    }
])->where('any', '.*');

Auth::routes();
Route::get('/home/{any?}', [
    function () {
        return view('home');
    }
])->where('any', '.*');

Route::group(['middleware' => 'auth'], function () {
    Route::get('get-authenticated-user', [UserController::class,'authUser']);
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('get-authenticated-user', [UserController::class,'authUser']);
// });
