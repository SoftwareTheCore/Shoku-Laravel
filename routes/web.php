<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\HistoryController;


Route::redirect('/', '/admin/login');


/*
|--------------------------------------------------------------------------
| ADMIN LOGIN
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    Route::get('/login', [
        AuthController::class,
        'showLogin'
    ])->name('admin.login');

    Route::post('/login', [
        AuthController::class,
        'login'
    ])->name('admin.login.process');

});


/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware('admin')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [
            DashboardController::class,
            'index'
        ])->name('admin.dashboard');


        /*
        |--------------------------------------------------------------------------
        | Karyawan
        |--------------------------------------------------------------------------
        */

        Route::resource(
            'karyawan',
            KaryawanController::class
        )->names('admin.karyawan');


        /*
        |--------------------------------------------------------------------------
        | Menu
        |--------------------------------------------------------------------------
        */

        Route::resource(
            'menu',
            MenuController::class
        )->names('admin.menu');


        /*
        |--------------------------------------------------------------------------
        | History
        |--------------------------------------------------------------------------
        */

        Route::get('/orders', [
            HistoryController::class,
            'orders'
        ])->name('admin.orders');

        Route::get('/booking', [
            HistoryController::class,
            'booking'
        ])->name('admin.booking');

        Route::get('/pesanan', [
            HistoryController::class,
            'pesanan'
        ])->name('admin.pesanan');

        Route::get('/reservasi', [
            HistoryController::class,
            'reservasi'
        ])->name('admin.reservasi');

        Route::get('/pemasukan', [
            HistoryController::class,
            'pemasukan'
        ])->name('admin.pemasukan');


        /*
        |--------------------------------------------------------------------------
        | Logout
        |--------------------------------------------------------------------------
        */

        Route::post('/logout', [
            AuthController::class,
            'logout'
        ])->name('admin.logout');

    });
