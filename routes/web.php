<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CateringController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\KostkostnController;
use App\Http\Controllers\PemagangController;
use App\Http\Controllers\SudahdaftarController;
use App\Http\Controllers\SewamotorController;
use App\Http\Controllers\SewakostController;
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


// login
route::auth();
Route::get('/auth/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
// register
Route::get('/auth/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');

route::get('/home',[HomeController::class, 'index']);
route::get('/user',[userController::class, 'index']);
Route::get('/catering', [cateringController::class, 'index']);
Route::get('/tersedia', [tersediaController::class, 'index']);
Route::get('/formulir', [formulirController::class, 'index']);
Route::get('/kostkostn', [kostkostnController::class, 'index']);
Route::get('/pemagang', [pemagangController::class, 'index']);
Route::get('/sudahdaftar', [sudahdaftarController::class, 'index']);
Route::get('/sewamotor', [sewamotorController::class, 'index']);
Route::get('/sewakost', [sewakostController::class, 'index']);