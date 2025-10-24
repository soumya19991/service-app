<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoggedController;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\venderDetailsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomepageController::class, 'index'])->name('home');
// Route::middleware('customer')->get('dashboard',[Pagescontroller::class, 'dashboard'])->name('dashboard');
// Route::get('dashboard',[Pagescontroller::class, 'dashboard'])->name('dashboard');
Route::middleware('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard'); // create dashboard.blade.php
    })->name('dashboard');
    Route::get('service-index', [ServiceController::class, 'index'])->name('service.index');
    Route::get('add-service', [ServiceController::class, 'add'])->name('add.service');
    Route::post('store-service', [ServiceController::class, 'store'])->name('store.service');
    Route::get('edit-service/{id}', [ServiceController::class, 'edit'])->name('edit.service');
    Route::put('update-service/{id}', [ServiceController::class, 'update'])->name('update.service');
    Route::put('update-status/{id}', [ServiceController::class, 'updateStatus'])->name('update.status');
    Route::put('update-popular/{id}', [ServiceController::class, 'updatePopular'])->name('update.popular');
    Route::delete('delete-service/{id}', [ServiceController::class, 'destroy'])->name('delete.service');

    Route::get('vender-list', [venderDetailsController::class, 'venderList'])->name('vender.list');
    Route::get('service-request-list', [ServiceRequestController::class, 'serviceRequestList'])->name('service.request.list');
    Route::put('service-transfer/{id}', [ServiceRequestController::class, 'serviceTransfer'])->name('service.transfer');

});

// Route::middleware('admin')->group(function () {
//     Route::get('/admin/dasboard', function () {
//         return view('admin.dasboard'); // create dashboard.blade.php
//     })->name('admin.dasboard');
// });
Route::get('register', [LoggedController::class, 'register'])->name('register');
Route::post('store/user', [LoggedController::class, 'storeUser'])->name('store.user');
Route::get('login', [LoggedController::class, 'login'])->name('login');
Route::post('logged/login', [LoggedController::class, 'logged_login'])->name('logged.login');
Route::post('logged/logout', [LoggedController::class, 'logged_logout'])->name('logged.logout');

Route::post('store/vender', [venderDetailsController::class, 'storevender'])->name('store.vender');
Route::post('store/service-request', [ServiceRequestController::class, 'storeServiceRequest'])->name('store.service.request');
