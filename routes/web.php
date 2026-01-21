<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WritersController;

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
    return view('home');
});
//route create user and login
Route::get('/register', [AuthController::class, 'create']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//route index writers
Route::get('/writers', [WritersController::class, 'index']);

//Routes User
Route::middleware(['auth','role:reader'])->group(function () {
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::get('/users/{id}/edit', [UserController::class, 'edit']);
    Route::post('/users/{id}/update', [UserController::class, 'update']);
    Route::post('/users/{id}/delete', [UserController::class, 'destroy']);
    //create de writer profile
    Route::get('/writers/create', [WritersController::class, 'create']);
    Route::post('/writers/store',[WritersController::class, 'store']);
});
//Route Writer
Route::middleware(['auth', 'role:writer'])->group(function () {
    Route::get('/writers/{id}',[WritersController::class, 'show']);
    Route::get('/writers/{id}/edit',[WritersController::class, 'edit']);
    Route::post('/writers/{id}/update',[WritersController::class, 'update']);
    Route::post('/writers/{id}/delete',[WritersController::class, 'destroy']);

});