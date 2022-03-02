<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ResetPasswordController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Language Route
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('switch.language');
/*****************************************CMS ROUTES*********************************************************/
Route::prefix('/dashboard')->middleware('auth:admin')->group(function () {
    Route::view('/', 'cms.parent');

    Route::resource('admins', AdminController::class);;

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('permissions', PermissionController::class);
    Route::put('roles/{role}/permission', [RolePermissionController::class, 'update'])->name('role-permission.update');






    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
});

Route::middleware('guest')->group(function () {
    // Route::get('/forgot-password', [ResetPasswordController::class, 'requestPasswordReset'])->name('password.request');
    Route::post('/forgot-password', [ResetPasswordController::class, 'sendResetEmail'])->name('password.email');
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'resetPassword'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword'])->name('password.update');
});


Route::prefix('/dashboard')->middleware('guest:admin')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login-view');
    Route::post('login', [AuthController::class, 'login']);
});
Route::prefix('/dashboard')->group(function () {  //->middleware('guest:admin')
    Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login-view');
    Route::post('login', [AuthController::class, 'login']);
});

Route::get('/generate-pdf', [PdfController::class, 'generate_pdf'])->name('generate_pdf');
Route::get('/generate-pdf-order/{id}', [PdfController::class, 'generate_pdf_order'])->name('generate_pdf_order');


// *****************Front Roue ***************/

Route::get('/',[FrontController::class,'index']);
Route::post('/contact-us',[FrontController::class,'contact_us'])->name('contact_us');
