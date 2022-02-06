<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\AuthController as ApiAuth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::post('/register', [ApiAuth::class, 'register']);
    Route::post('/login', [ApiAuth::class, 'login']);
});

Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'loginProccess']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::prefix('admin')->group(function () {
    Route::middleware(['otentikasi'])->group(function () {
        Route::get('/', [AdminController::class, 'home']);
    });
});
