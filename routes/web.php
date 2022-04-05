<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\ForgotPasswordController;
use App\Http\Controllers\backend\RegistrationController;

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

#middleware
Route::group(['middleware'=>'auth:web,employee'],function(){
    Route::get('/', function () {
        return view('backend.login.login');
    });
});

#registration
Route::get('/registration',[RegistrationController::class, 'registrationform'])->name('registration');

#login
Route::get('/loginform', [LoginController::class, 'loginform'])->name('loginform');
Route::post('/dologin', [LoginController::class, 'dologin'])->name('dologin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

#forget password route
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

