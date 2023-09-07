<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\DataSIPController;
use App\Http\Controllers\DataSTRController;
use App\Http\Controllers\rumahSakitController;
use App\Http\Controllers\DataPribadiController;
use App\Http\Controllers\DataProfesiController;
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
Route::get('/', [authController::class, 'indexUser']);

Route::apiResource('/data-pribadi', DataPribadiController::class);
Route::apiResource('/data-profesi', DataProfesiController::class);
Route::apiResource('/data-str', DataSTRController::class);
Route::apiResource('/data-sip', DataSIPController::class);

// Route::post('register', [authController::class, 'registerUser']);
Route::post('/register', [authController::class, 'registerUser']);
Route::post('/login', [authController::class, 'loginUser']);

//rumahsakit
Route::get('/rumahsakit', [rumahSakitController::class, 'indexRumahSakit']);