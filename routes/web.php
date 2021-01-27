<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChanelController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CategoryController;
//use App\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('chanel/index');
});

*/
Route::get('/', function () {
    return view('/login');
});
Route::resource('chanel', ChanelController::class);
Route::resource('category', CategoryController::class);
Route::resource('config', ConfigController::class);
Route::post('logged_in', [LoginController::class, 'authenticate']);

