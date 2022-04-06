<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
})->name('login');

Route::get('/register', [RegisterController::class, 'index'],function () {
    return view('register');
})->name('register');