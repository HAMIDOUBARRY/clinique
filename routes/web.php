<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//USER
Route::get('/user',[usercontroller::class, 'index'])->name('user.index');
Route::get('/user/create',[usercontroller::class, 'create'])->name('user.create');
Route::post('/user/create/add',[usercontroller::class, 'store'])->name('user.store');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
