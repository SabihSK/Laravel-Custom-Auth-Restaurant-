<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restroController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Routing\RouteGroup;

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

//?-- Get route

Route::get('/', [restroController::class, "index"]);
Route::view("/register", "register");
Route::post('/register', [RegisterController::class, 'registerUser']);
Route::view('/login', 'login');
Route::post('/login', [LoginController::class, 'loginUser']);

Route::group(['middleware' => 'protectedPages'], function () {
    Route::get("/list", [ListController::class, 'index']);
    Route::view('/add', 'add');
    Route::post('/add', [AddController::class, "addDataInDB"]);
    Route::get("/delete/{id}", [DeleteController::class, "deleteResto"]);
    Route::get("/edit/{id}", [UpdateController::class, "editResto"]);
    Route::post('/update', [UpdateController::class, "updateResto"]);
    Route::get("/logout", [LogoutController::class, 'logoutUser']);
});
