<?php

use App\Http\Controllers\chambrecontroller;
use App\Http\Controllers\hopitalcontroller;
use App\Http\Controllers\patientcontroller;
use App\Http\Controllers\rendezvouscontroller;
use App\Http\Controllers\usercontroller;
use App\Models\chambre;
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

//POUR RENDEZ_VOUS
Route::get('/rendezvous', [rendezvouscontroller::class, 'index'])->name('rendezvous.index');
Route::get('/rendezvous/create', [rendezvouscontroller::class, 'create'])->name('rendezvous.create');
Route::post('/rendezvous/create/add', [rendezvouscontroller::class, 'store'])->name('rendezvous.store');

//POUR PATIENT
Route::get('/patient', [patientcontroller::class, 'index'])->name('patient.index');
Route::get('/patient/create', [patientcontroller::class, 'create'])->name('patient.create');
Route::post('/patient/create/add', [patientcontroller::class, 'store'])->name('patient.store');
//POUR HOPITAL
Route::get('/hopital', [hopitalcontroller::class, 'index'])->name('hopital.index');
Route::get('/hopital/create', [hopitalcontroller::class, 'create'])->name('hopital.create');
Route::post('/hopital/create/add',[hopitalcontroller::class,'store'])->name('hopital.store');

//POUR CHAMBRE
Route::group(['prefix'=>'chambre'], function() {
 Route::get('/', [chambrecontroller::class, 'index'])->name('chambre.index');
 Route::get('/create', [chambrecontroller::class, 'create'])->name('chambre.create');
 Route::post('/create/add', [chambrecontroller::class, 'store'])->name('chambre.store');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
