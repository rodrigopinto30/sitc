<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MonitoreoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ZafraController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ToperadoresController;

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

// Route::get('login', [AuthenticatedSessionController::class, 'create'])
// ->name('login');
 
Route::middleware('auth')->get('/dashboard', 'App\Http\Controllers\MainController@index')->name('dashboard');

// Rutas de usuarios
Route::group([
    'prefix' => 'user',
    'middleware' => 'auth'
], function(){
    Route::get('/index', [ToperadoresController::class, 'index'])->name('user.index');
    Route::get('/create', [ToperadoresController::class, 'create'])->name('user.create');
    Route::post('/', [ToperadoresController::class, 'store'])->name('user.store');
});

// Rutas de monitoreos
Route::group([
    'prefix' => 'monitoreo',
    'middleware' => 'auth'
],function(){
    Route::get('/informar-plan', [MonitoreoController::class, 'informarPlan'])->name('monitoreo-plan');
    Route::get('/monitoreo-normal', [MonitoreoController::class, 'monitoreoNormal'])->name('monitoreo-normal');
    Route::get('/monitoreo-mosca', [MonitoreoController::class, 'monitoreoMosca'])->name('monitoreo-mosca');
});

// Rutas de detecciones
Route::group([
    'prefix' => 'deteccion',
    'middleware' => 'auth'
], function(){
    Route::get('/evento','App\Http\Controllers\DeteccionController@evento')->name('evento');
    Route::get('/inhabilitacion/inhabilitacion-up','App\Http\Controllers\DeteccionController@inhabilitacion')->name('inhabilitacion');
    Route::get('/consulta/consulta-certificado','App\Http\Controllers\DeteccionController@consulta')->name('consulta');
    Route::get('/informe/estadistica-por-provincia','App\Http\Controllers\DeteccionController@informe')->name('informe');
});

// Rutas para editar los datos de el usuario que inicio sesion.
Route::group([
    'prefix' => 'profile',
    'middleware' => 'auth'
], function(){
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
});

// Ruta de rol
Route::group([
    'prefix' => 'rol',
    'middleware' => 'auth'
], function(){
    Route::get('/index', [RolController::class, 'index'])->name('rol');
});

// Ruta de zafra
Route::middleware('auth')->get('/zafra', [ZafraController::class, 'index'])->name('zafra');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

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

// Route::get('{any?}', function ($any) {
//     return redirect()->route('dashboard');
// })->where('any', '.*')->name('dashboard');

require __DIR__ . '/auth.php';
