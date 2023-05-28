<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthAdminController;
use App\Http\Controllers\ViewAdminController;

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

Route::get('admin', [CustomAuthAdminController::class, 'admin']);
Route::get('admin',[ViewAdminController::class,'viewAdmin'])->name('viewAdmin');
Route::get('loginAdmin', [CustomAuthAdminController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('custom-loginAdmin', [CustomAuthAdminController::class, 'customLoginAdmin'])->name('loginAdmin.custom');
Route::get('signout', [CustomAuthAdminController::class, 'signOut'])->name('signout');

Route::get('registrationAdmin', [CustomAuthAdminController::class, 'registrationAdmin'])->name('register-admin');
Route::post('custom-registrationAdmin', [CustomAuthAdminController::class, 'customRegistrationAdmin'])->name('registerAdmin.custom');