<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::get('/',function(){
    return view('pages.home');
});

Route::get('/login',[LoginController::class,'login'])->name('login');

Route::post('/login',[LoginController::class,'loginCheck']);

Route::get('/registration',[LoginController::class,'registration'])->name('registration');

Route::post('/registration',[LoginController::class,'registrationCheck']);

Route::get('/contact',[LoginController::class,'contact'])->name('contact');

Route::post('/contact',[LoginController::class,'contactCheck']);