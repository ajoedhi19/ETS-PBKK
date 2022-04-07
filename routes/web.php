<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardBarangController;
use App\Http\Controllers\DashboardServiceController;

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
    return view('home',[
        'title' => 'home'
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        'title' => 'profile'
    ]);
})->name('profile');

Route::get('/company', function () {
    return view('company',[
        'title' => 'company'
    ]);
})->name('company');

Route::get('/service', function () {
    return view('service',[
        'title' => 'service'
    ]);
})->name('service');

Route::get('/collaboration', function () {
    return view('collaboration',[
        'title' => 'collaboration'
    ]);
})->name('collaboration');

Route::get('/login', [LoginController::class, 'index'],function () {
    return view('login');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'],function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard', function () {
    return view('dashboard.index',[
        'title' => 'dashboard'
    ]);
})->middleware('auth');


Route::resource('/dashboard/dashboardbarang', DashboardBarangController::class)->middleware('auth');
Route::resource('/dashboard/dashboardservice', DashboardServiceController::class)->middleware('auth');
Route::resource('/dashboard/barang', barangController::class)->middleware('auth');
Route::resource('/dashboard/serve', serveController::class)->middleware('auth');