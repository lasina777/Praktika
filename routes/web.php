<?php

use App\Http\Controllers\UserController;
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
})->name('welcome');

Route::get('/register',[UserController::class, 'register'])->name('register');
Route::post('/register',[UserController::class, 'registerPost']);
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'loginPost']);

Route::middleware('auth')->group(function (){
    Route::get('/users',[UserController::class,'users'])->name('users');
    Route::get('logout',[UserController::class,'logout'])->name('logout');
    Route::get('/information',[UserController::class,'information'])->name('information');
});
