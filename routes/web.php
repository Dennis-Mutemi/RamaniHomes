<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\LoginController;
/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [HomeController::class,'index']);
Route::get('register', [RegisterControler::class,'index']);
Route::get('login', [LoginController::class,'index']);
