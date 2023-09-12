<?php

use App\Http\Middleware\Dokter;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSIPController;
use App\Http\Controllers\DataSTRController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DataPribadiController;

use App\Http\Controllers\DataProfesiController;

//admin import
use App\Http\Controllers\Admin\approveController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\CobaLoginController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\persetujuanController;

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
    return view('Auth.register');
});

//==================================AUTH USER==============================================//
// Route::get('/login', [CobaLoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [CobaLoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('/dashboard', [CobaLoginController::class, 'dashboard'])->name('dashboard')->middleware('User');

//==================================AUTH DOKTER==============================================//

Route::resource('register', RegisterController::class);
Route::get('/login', [CobaLoginController::class, 'index'])->name('login');
Route::post('actionlogin', [CobaLoginController::class, 'actionlogin'])->name('actionlogin');


Route::get('/lupapassword', function () {
    return view('Auth.lupapassword');
});

//============================MIDLEWARE ROUTES DOKTER==============================================//

Route::group(['middleware' => ['auth', 'Dokter']], function() {
    Route::get('/dashboard', [CobaLoginController::class, 'dashboard'])->name('dashboard');

    // Route Data Pribadi
    Route::resource('data-pribadi', DataPribadiController::class);
    
    // Route::get('data-pribadi/edit', [DataPribadiController::class, 'edit'])->name('data-pribadi.edit');

    //Route Data Profesi
    Route::resource('data-profesi', DataProfesiController::class);

    // Route Data STR
    Route::resource('data-str', DataSTRController::class);
    
    // Route SIP
    Route::resource('data-sip', DataSIPController::class);
    
    Route::get('actionlogout', [CobaLoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
});

// Route::get('protected', ['middleware' => ['auth', 'user'], function() {
//     return view('Auth.login');
// }]);


//=========================================ADMIN ROUTESS==============================================//

//Auth/Login admin


Route::get('/login-admin', [AuthController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('actionLoginAdmin', [AuthController::class, 'actionLoginAdmin'])->name('actionLoginAdmin');
Route::get('logoutAdmin', [AuthController::class, 'logoutAdmin'])->name('logoutAdmin')->middleware('auth');



//=======================================MIDDLEWARE ROUTES ADMIN======================================//


Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/admin', [dashboardController::class, 'admin'])->name('admin');
    //ANGGOTA ROUTE
    Route::get('/anggota', function () {
        return view('Admin.MasterData.Anggota.index');
    });
    //persetujuan ROUTE
    Route::resource('persetujuan', approveController::class);
});