<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\HuespedesController;
use App\Http\Controllers\ReservasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
// INDEX 
Route::get('/Habitacions',[HabitacionesController::class,'index'])->name('habitacion.index');

// INDEX CONTACTO 
Route::get('/Habitacions',[HabitacionesController::class,'index'])->name('habitacion.index');

// SHOW CONTACTO 
Route::get('/Habitacions/{id}/show',[HabitacionesController::class,'show'])->where('id','[0-9]+')->name('habitacion.show');

// CREATE Y STORE CONTACTO
Route::get('/Habitacions/create',[HabitacionesController::class,'create'])->name('habitacions.crear');
Route::post('/Habitacions/create',[HabitacionesController::class,'store'])->name('habitacions.store');

// EDIT Y UPDATE CONTACTO
Route::get('/Habitacions/{id}/editar',[HabitacionesController::class,'edit'])->whereNumber('id')->name('habitacions.editar');
Route::put('/Habitacions/{id}/editar',[HabitacionesController::class,'update'])->whereNumber('id')->name('habitacions.update');

// DESTROYD CONTACTO
Route::delete('/Habitacions/{id}/borrar',[HabitacionesController::class,'destroy'])->whereNumber('id')->name('habitacions.borrar');





// INDEX 
Route::get('/Huespeds',[HuespedesController::class,'index'])->name('huesped.index');

// INDEX CONTACTO 
Route::get('/Huespeds',[HuespedesController::class,'index'])->name('huesped.index');

// SHOW CONTACTO 
Route::get('/Huespeds/{id}/show',[HuespedesController::class,'show'])->where('id','[0-9]+')->name('huesped.show');

// CREATE Y STORE CONTACTO
Route::get('/Huespeds/create',[HuespedesController::class,'create'])->name('huespeds.crear');
Route::post('/Huespeds/create',[HuespedesController::class,'store'])->name('huespeds.store');

// EDIT Y UPDATE CONTACTO
Route::get('/Huespeds/{id}/editar',[HuespedesController::class,'edit'])->whereNumber('id')->name('huespeds.editar');
Route::put('/Huespeds/{id}/editar',[HuespedesController::class,'update'])->whereNumber('id')->name('huespeds.update');

// DESTROYD CONTACTO
Route::delete('/Huespeds/{id}/borrar',[HuespedesController::class,'destroy'])->whereNumber('id')->name('huespeds.borrar');







// INDEX 
Route::get('/Reservas',[ReservasController::class,'index'])->name('reserva.index');

// INDEX CONTACTO 
Route::get('/Reservas',[ReservasController::class,'index'])->name('reserva.index');

// SHOW CONTACTO 
Route::get('/Reservas/{id}/show',[ReservasController::class,'show'])->where('id','[0-9]+')->name('reserva.show');

// CREATE Y STORE CONTACTO
Route::get('/Reservas/create',[ReservasController::class,'create'])->name('reservas.crear');
Route::post('/Reservas/create',[ReservasController::class,'store'])->name('reservas.store');

// EDIT Y UPDATE CONTACTO
Route::get('/Reservas/{id}/editar',[ReservasController::class,'edit'])->whereNumber('id')->name('reservas.editar');
Route::put('/Reservas/{id}/editar',[ReservasController::class,'update'])->whereNumber('id')->name('reservas.update');

// DESTROYD CONTACTO
Route::delete('/Reservas/{id}/borrar',[ReservasController::class,'destroy'])->whereNumber('id')->name('reservas.borrar');
