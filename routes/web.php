<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MonitoreoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::get('/dashboard', 'App\Http\Controllers\MainController@index')->name('dashboard');

// Rutas de monitoreos
Route::group([
    'prefix' => 'monitoreo'
],function(){
    Route::get('/informar-plan', [MonitoreoController::class, 'informarPlan'])->name('monitoreo-plan');
    Route::get('/monitoreo-normal', [MonitoreoController::class, 'monitoreoNormal'])->name('monitoreo-normal');
    Route::get('/monitoreo-mosca', [MonitoreoController::class, 'monitoreoMosca'])->name('monitoreo-mosca');
});

// Rutas de detecciones
Route::group([
    'prefix' => 'deteccion',
], function(){
    Route::get('/evento','App\Http\Controllers\DeteccionController@evento')->name('evento');
    Route::get('/inhabilitacion/inhabilitacion-up','App\Http\Controllers\DeteccionController@inhabilitacion')->name('inhabilitacion');
    Route::get('/consulta/consulta-certificado','App\Http\Controllers\DeteccionController@consulta')->name('consulta');
    Route::get('/informe/estadistica-por-provincia','App\Http\Controllers\DeteccionController@informe')->name('informe');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
