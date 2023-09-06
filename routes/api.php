<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\authController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get user
Route::get('/', [App\Http\Controllers\authController::class, 'indexUser']);


// Route::post('register', [authController::class, 'registerUser']);
Route::post('/register', [App\Http\Controllers\authController::class, 'registerUser']);
Route::post('/login', [App\Http\Controllers\authController::class, 'loginUser']);