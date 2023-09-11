<?php

use App\Http\Controllers\Admin\approveController;
use App\Http\Controllers\Admin\persetujuanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DataPribadiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\CobaLoginController;
use App\Http\Middleware\Dokter;

use App\Http\Controllers\Admin\dashboardController;

//admin import
use App\Http\Controllers\Admin\AuthController;

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
// Route::resource('login', LoginController::class);
Route::get('/login', [CobaLoginController::class, 'login'])->name('login');
Route::post('actionlogin', [CobaLoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [CobaLoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/lupapassword', function () {
    return view('Auth.lupapassword');
});

//============================MIDLEWARE ROUTES DOKTER==============================================//

Route::group(['middleware' => ['auth', 'Dokter']], function() {
    Route::get('/dashboard', [CobaLoginController::class, 'dashboard'])->name('dashboard');
    Route::resource('data-pribadi', DataPribadiController::class);
    Route::get('/datapribadi', function () {
        return view('Dokter.DataPribadi.index');
    });
    Route::get('/createdatapribadi', function () {
        return view('Dokter.DataPribadi.create');
    });
    Route::get('/editdatapribadi', function () {
        return view('Dokter.DataPribadi.edit');
    });
    Route::get('/dataprofesi', function () {
        return view('Dokter.DataProfesi.index');
    });
    Route::get('/edit-profesi', function () {
        return view('Dokter.DataProfesi.edit');
    });
    Route::get('/create-profesi', function () {
        return view('Dokter.DataProfesi.create');
    });

    // Route STR
    Route::get('/str', function () {
        return view('Dokter.STR.index');
    });
    Route::get('/edit-str', function () {
        return view('Dokter.STR.edit');
    });
    Route::get('/create-str', function () {
        return view('Dokter.STR.create');
    });

    // Route SIP
    Route::get('/sip', function () {
        return view('Dokter.SIP.index');
    });
    Route::get('/edit-sip', function () {
        return view('Dokter.SIP.edit');
    });
    Route::get('/create-sip', function () {
        return view('Dokter.SIP.create');
    });
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