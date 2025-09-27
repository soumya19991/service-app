<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoggedController;
use App\Http\Controllers\Pagescontroller;

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
// Route::middleware('customer')->get('dashboard',[Pagescontroller::class, 'dashboard'])->name('dashboard');
// Route::get('dashboard',[Pagescontroller::class, 'dashboard'])->name('dashboard');
Route::middleware('customer')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // create dashboard.blade.php
    })->name('dashboard');
});

Route::middleware('admin')->group(function () {
    Route::get('/admin/dasboard', function () {
        return view('backend.admin.dasboard'); // create dashboard.blade.php
    })->name('admin.dasboard');
});
Route::get('register',[LoggedController::class, 'register'])->name('register');
Route::post('store/user',[LoggedController::class, 'storeUser'])->name('store.user');
Route::get('login',[LoggedController::class, 'login'])->name('login');
Route::post('logged/login',[LoggedController::class, 'logged_login'])->name('logged.login');
Route::post('logged/logout',[LoggedController::class, 'logged_logout'])->name('logged.logout'); 