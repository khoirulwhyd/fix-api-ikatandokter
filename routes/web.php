<?php

use App\Http\Controllers\Admin\masterAnggotaController;
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

use App\Http\Controllers\Dokter\AuthhController;

use App\Http\Controllers\Dokter\LandingController;
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

//=========================AUTH ROUTES WITH VERIFY EMAIL======================================//

Route::get('login', [AuthhController::class, 'index'])->name('login');
Route::post('post-login', [AuthhController::class, 'postLogin'])->name('post-login');
Route::get('registration', [AuthhController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthhController::class, 'postRegistration'])->name('post-register');
Route::get('logout', [AuthhController::class, 'logout'])->name('logout');
Route::get('verifEmail', [AuthhController::class, 'verifPage'])->name('verifEmail');


/* New Added Routes */
Route::get('dashboard', [AuthhController::class, 'dashboard'])->middleware(['auth', 'verify_email', 'Dokter']);
Route::get('account/verify/{token}', [AuthhController::class, 'verifyAccount'])->name('user.verify');

//============================================================================================//
// Route::get('/', function () {
//     return view('public.landingpage');
// });

Route::get('/', [LandingController::class, 'index']);

//==================================AUTH USER==============================================//
// Route::get('/login', [CobaLoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [CobaLoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('/dashboard', [CobaLoginController::class, 'dashboard'])->name('dashboard')->middleware('User');

//==================================AUTH DOKTER==============================================//

// Route::resource('register', RegisterController::class);
// Route::get('/login', [CobaLoginController::class, 'index'])->name('login');
// Route::post('actionlogin', [CobaLoginController::class, 'actionlogin'])->name('actionlogin');


// Route::get('/lupapassword', function () {
//     return view('Auth.lupapassword');
// });

//============================MIDLEWARE ROUTES DOKTER==============================================//

Route::group(['middleware' => ['auth', 'Dokter']], function() {
    // Route::get('/dashboard', [CobaLoginController::class, 'dashboard'])->name('dashboard');

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
    Route::resource('anggota', masterAnggotaController::class);
    //ANGGOTA ROUTE
    // Route::get('/anggota', function () {
    //     return view('Admin.MasterData.Anggota.index');
    // });
    //persetujuan ROUTE
    Route::resource('persetujuan', approveController::class);
});