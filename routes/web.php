<?php


use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\ChangePasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard',	[DashboardController::class, 'index'])->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');

	//APOTEK
	Route::resource('detail-obat', ObatController::class);
	Route::resource('obat', ObatController::class);

	Route::get('obat', [ObatController::class, 'index'])->name('obat');
	Route::delete('obat', [ObatController::class, 'destroy']);
	Route::get('detail-obat/{id}', [ObatController::class, 'show'])->name('detail-obat');
	Route::get('ubah-obat/{id}', [ObatController::class, 'edit'])->name('ubah-obat');

	Route::get('user', [UserController::class, 'index'])->name('user');
	Route::post('user', [UserController::class, 'store']);
	Route::put('user/{id}', [UserController::class, 'update'])->name('user-update');
	Route::delete('user/{id}', [UserController::class, 'destroy']);

	// Route::resource('distributor', ObatController::class);

	Route::get('distributor', [DistributorController::class, 'index'])->name('distributor');
	Route::post('distributor', [DistributorController::class, 'store']);
	Route::put('distributor/{id}', [DistributorController::class, 'update'])->name('distributor-update');
	Route::delete('distributor/{id}', [DistributorController::class, 'destroy']);





	// Route::get('user-management', [UserController::class, 'index'])->name('user-management');



});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');