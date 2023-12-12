<?php

use App\Http\Controllers\chambrecontroller;
use App\Http\Controllers\ChambreHospitalisationController;
use App\Http\Controllers\chambrehospitalisercontroller;
use App\Http\Controllers\hopitalcontroller;
use App\Http\Controllers\HospitalisationController;
use App\Http\Controllers\medecincontroller;
use App\Http\Controllers\patientcontroller;
use App\Http\Controllers\rendezvouscontroller;
use App\Http\Controllers\specialitecontroller;
use App\Http\Controllers\traitementController;
use App\Http\Controllers\usercontroller;
use App\Models\chambre;
use App\Models\medecin;
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
Route::get('/user', [usercontroller::class, 'index'])->name('user.index');
Route::get('/user/create', [usercontroller::class, 'create'])->name('user.create');
Route::post('/user/create/add', [usercontroller::class, 'store'])->name('user.store');

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
Route::post('/hopital/create/add', [hopitalcontroller::class, 'store'])->name('hopital.store');

//POUR CHAMBRE
Route::group(['prefix' => 'chambre'], function () {
    Route::get('/', [chambrecontroller::class, 'index'])->name('chambre.index');
    Route::get('/create', [chambrecontroller::class, 'create'])->name('chambre.create');
    Route::post('/create/add', [chambrecontroller::class, 'store'])->name('chambre.store');
});
//POUR MEDECIN
Route::group(['prefix' => 'medecin'], function () {
    Route::get('/', [medecincontroller::class, "index"])->name('medecin.index');
    Route::get('/create', [medecincontroller::class, "create"])->name('medecin.create');
    Route::post('/create/add', [medecincontroller::class, "store"])->name('medecin.store');
});
//POUR SPECIALITE
Route::group(['prefix' => 'specialite'], function () {
    Route::get('/', [specialitecontroller::class, "index"])->name('specialite.index');
    Route::get('/create', [specialitecontroller::class, "create"])->name('specialite.create');
    Route::post('/create/add', [specialitecontroller::class, "store"])->name('specialite.store');
});
//POUR CHAMBRE_HOSP
Route::group(['prefix' => 'chambrehospitalisation'], function () {
    Route::get('/', [ChambreHospitalisationController::class, "index"])->name('chambrehospitalisation.index');
    Route::get('/create', [ChambreHospitalisationController::class, "create"])->name('chambrehospitalisation.create');
    Route::post('/create/add', [ChambreHospitalisationController::class, "store"])->name('chambrehospitalisation.store');
    Route::get('chambre_hosp/{chambreId}/{hospitalisationId}/edit', [ChambreHospitalisationController::class, "edit"])->name('chambre_hosp.edit');
    Route::put('chambre_hosp/{chambreId}/{hospitalisationId}', 'ChambreHospitalisationController@update')->name('chambre_hosp.update');
});
//POUR HOSPITALISATION
Route::group(['prefix'=>'hospitalisation'],function (){
 Route::get('/',[HospitalisationController::class, "index"])->name("hospitalisation.index");
 Route::get('/create',[HospitalisationController::class, "create"])->name("hospitalisation.create");
 Route::post('/create/add',[HospitalisationController::class, "store"])->name("hospitalisation.store");
});
//POUR TRAITEMENT 
Route::group(['prefix'=>'traitement'], function(){
Route::get('/',[traitementController::class, "index"])->name("traitement.index");
Route::get('/create',[traitementController::class, "create"])->name("traitement.create");
Route::post('/create/add',[traitementController::class, "store"])->name("traitement.store");
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
