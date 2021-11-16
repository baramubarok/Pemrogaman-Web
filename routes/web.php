<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/explore', function () {
    return view('explore');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/exp-kategori', function () {
    return view('exp-kategori');
});

Route::get('/detail-service', function() {
    return view('detail-service');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user', [App\Http\Controllers\DashboardUser::class, 'index'])->name('dashboard');
    // Route::get('/user/orders', [App\Http\Controllers\DashboardUser::class, 'order'])->name('user-order');
    Route::post('/user/update-profile', [App\Http\Controllers\DashboardUser::class, 'updateProfile'])->name('user-update-profile');
    Route::post('/user/update-order', [App\Http\Controllers\DashboardUser::class, 'updateOrder'])->name('user-update-order');


    Route::middleware(['provider'])->group(function () {
        Route::get('/shop/profile', [App\Http\Controllers\ProviderController::class, 'index'])->name('shop');
        Route::post('/shop/update-profile', [App\Http\Controllers\ProviderController::class, 'updateProfile'])->name('shop-update-profile');
        Route::post('/shop/update-status', [App\Http\Controllers\ProviderController::class, 'updateStatus'])->name('shop-update-status');
        Route::post('/shop/update-order', [App\Http\Controllers\ProviderController::class, 'updateOrder'])->name('shop-update-order');
    });

    Route::get('/Logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('custom-logout');

});
