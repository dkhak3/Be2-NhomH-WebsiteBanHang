<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthAdminController;

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
    return view('welcome');
});

// Route::get('/registration', function () {
//     return view('auth.registrationAdmin');
// });

Route::get('registrationAdmin', [CustomAuthAdminController::class, 'registrationAdmin'])->name('register-admin');
Route::post('custom-registrationAdmin', [CustomAuthAdminController::class, 'customRegistrationAdmin'])->name('registerAdmin.custom');