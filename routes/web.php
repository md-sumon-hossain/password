<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\LoginController;

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

Route::get('/', function () {
    return view('backend.master');
});

#login
Route::get('/loginform', [LoginController::class, 'loginform'])->name('loginform');
Route::post('/dologin', [LoginController::class, 'dologin'])->name('dologin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

