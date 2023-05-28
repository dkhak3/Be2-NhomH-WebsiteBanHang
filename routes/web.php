<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\CustomAuthController;
<<<<<<< HEAD
=======
use App\Http\Controllers\ViewUserController;
>>>>>>> login-user
=======
use App\Http\Controllers\CustomAuthAdminController;
>>>>>>> register-admin
=======
use App\Http\Controllers\CustomAuthAdminController;
use App\Http\Controllers\ViewAdminController;
>>>>>>> login-admin

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('index');
});

<<<<<<< HEAD
<<<<<<< HEAD
=======
Route::get('user', [CustomAuthController::class, 'dashboard']);
Route::get('user',[ViewUserController::class,'viewUser'])->name('viewUser');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

>>>>>>> login-user
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
=======
// Route::get('/registration', function () {
//     return view('auth.registrationAdmin');
// });

Route::get('registrationAdmin', [CustomAuthAdminController::class, 'registrationAdmin'])->name('register-admin');
Route::post('custom-registrationAdmin', [CustomAuthAdminController::class, 'customRegistrationAdmin'])->name('registerAdmin.custom');
>>>>>>> register-admin
=======
Route::get('admin', [CustomAuthAdminController::class, 'admin']);
Route::get('admin',[ViewAdminController::class,'viewAdmin'])->name('viewAdmin');
Route::get('loginAdmin', [CustomAuthAdminController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('custom-loginAdmin', [CustomAuthAdminController::class, 'customLoginAdmin'])->name('loginAdmin.custom');
Route::get('signout', [CustomAuthAdminController::class, 'signOut'])->name('signout');

Route::get('registrationAdmin', [CustomAuthAdminController::class, 'registrationAdmin'])->name('register-admin');
Route::post('custom-registrationAdmin', [CustomAuthAdminController::class, 'customRegistrationAdmin'])->name('registerAdmin.custom');
>>>>>>> login-admin
