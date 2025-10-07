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
Route::middleware('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard'); // create dashboard.blade.php
    })->name('dashboard');
    Route::get('add-service', function () {
        return view('admin.allservice.addservice'); // create dashboard.blade.php
    })->name('add.service');
    Route::get('all-service', function () { 
        return view('admin.allservice.listservice'); // create dashboard.blade.php
    })->name('all.service');
    Route::get('edit-service/{id}', function ($id) {
        return view('admin.allservice.editservice'); // create dashboard.blade.php
    })->name('edit.service');
});

// Route::middleware('admin')->group(function () {
//     Route::get('/admin/dasboard', function () {
//         return view('admin.dasboard'); // create dashboard.blade.php
//     })->name('admin.dasboard');
// });
Route::get('register',[LoggedController::class, 'register'])->name('register');
Route::post('store/user',[LoggedController::class, 'storeUser'])->name('store.user');
Route::get('login',[LoggedController::class, 'login'])->name('login');
Route::post('logged/login',[LoggedController::class, 'logged_login'])->name('logged.login');
Route::post('logged/logout',[LoggedController::class, 'logged_logout'])->name('logged.logout'); 