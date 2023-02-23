<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderUserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('landing-page');
});

Auth::routes();

Route::get('order-user', [OrderUserController::class, 'index'])->middleware('guest');
Route::post('order-user', [OrderUserController::class, 'store'])->name('orderUser');
Route::middleware('auth:user')->group(function(){
    Route::get('profile', [UserController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [UserController::class, 'update'])->name('profile.update');
});

Route::prefix('employee')->group(function(){
    Route::get('login', [LoginController::class, 'showEmployeeLoginForm']);
    Route::post('login', [LoginController::class, 'employeeLogin'])->name('employee.login');

    Route::middleware('auth:employee')->group(function(){
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::get('profile', [UserController::class, 'edit'])->name('profile.edit');
        Route::patch('profile', [UserController::class, 'update'])->name('profile.update');

        Route::group(['prefix' => 'order', 'as' => 'order.'],function () {
            Route::resource('/', OrderController::class)->parameters([
                '' => 'order'
            ]);
            Route::patch('/{order}/verifikasi', [OrderController::class, 'verifikasi'])->name('verifikasi');
            
        });

        Route::group(['prefix' => 'architect', 'as' => 'architect.'],function () {
            Route::resource('/', ArchitectController::class)->parameters([
                '' => 'architect'
            ]);
            Route::patch('/{architect}/update-status', [ArchitectController::class, 'update_status'])->name('updateStatus');
        });

        Route::group(['prefix' => 'user', 'as' => 'user.'],function () {
            Route::resource('/', UserController::class)->parameters([
                '' => 'user'
            ]);
            Route::patch('/{user}/update-status', [UserController::class, 'update_status'])->name('updateStatus');
        });

        Route::group(['prefix' => 'landing-page', 'as' => 'landingPage.'],function () {
            Route::resource('/', LandingPageController::class)->parameters([
                '' => 'landing-page'
            ]);
        });
   
    });
});
