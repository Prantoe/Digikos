<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // current login
    Route::get('/owner/current', [App\Http\Controllers\API\OwnerController::class, 'current']);
    Route::get('/owner/property', [App\Http\Controllers\API\OwnerController::class, 'property']);

    // logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});
