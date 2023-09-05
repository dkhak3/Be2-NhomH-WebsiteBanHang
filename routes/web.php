<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomAuthAdminController;
use App\Http\Controllers\ViewUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductControllerAdmin;
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

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::post('/', [ProductController::class, 'search'])->name('index.search');
Route::get('product/{productId}', [ProductController::class, 'viewProduct'])->name('index.viewProduct');
Route::get('category/{categoryId}', [ProductController::class, 'getProductByCategory'])->name('index.productByCategory');
Route::get('profile', function () {
    return view('profile');
});

// USER LOGIN
Route::get('user', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('user',[ViewUserController::class,'viewUser'])->name('viewUser');
Route::get('profile',[ViewUserController::class,'viewProfile'])->name('viewProfile');
Route::get('changeprofile',[ViewUserController::class,'viewChangeProfile'])->name('viewChangeProfile');

// USER REGISTER
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// ADMIN REGISTER
Route::get('registrationAdmin', [CustomAuthAdminController::class, 'registrationAdmin'])->name('register-admin');
Route::post('custom-registrationAdmin', [CustomAuthAdminController::class, 'customRegistrationAdmin'])->name('registerAdmin.custom');

// ADMIN LOGIN
Route::get('loginAdmin', [CustomAuthAdminController::class, 'index'])->name('loginAdmin');
Route::post('custom-loginAdmin', [CustomAuthAdminController::class, 'customLoginAdmin'])->name('loginAdmin.custom');     
Route::get('signout', [CustomAuthAdminController::class, 'signOut'])->name('signout');


// ADMIN 
Route::get('admin', [CustomAuthAdminController::class, 'admin']);
Route::get('admin',[ViewAdminController::class,'viewAdmin'])->name('viewAdmin');

Route::get('admin', [ProductControllerAdmin::class,'index'])->name('index');
Route::get('add', [ProductControllerAdmin::class,'create'])->name('add');
Route::get('delete/{id}', [ProductControllerAdmin::class,'destroy'])->name('delete');
Route::post('edit/{id}', [ProductControllerAdmin::class,'edit'])->name('edit');
Route::post('store', [ProductControllerAdmin::class,'store'])->name('store');
//Route::get('update', [ProductController::class,'update'])->name('update');
Route::get('editScreen/{id}',[ProductControllerAdmin::class,'editScreenProduct'])->name("editscreenproduct");
Route::get('search', [ProductControllerAdmin::class,'search'])->name('search');