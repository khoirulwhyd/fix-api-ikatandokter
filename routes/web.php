<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Dokter.dashboardUser');
});

Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/register', function () {
    return view('Auth.register');
});
Route::get('/lupapassword', function () {
    return view('Auth.lupapassword');   
});

Route::get('/datapribadi', function() {
    return view('Dokter.DataPribadi.index');
});



// Route::get('/test', function () {
//     return view('app');
// });