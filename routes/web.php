<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Routing\RouteGroup;
use PHPUnit\TextUI\XmlConfiguration\Group;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('empleado', EmpleadoController::class)->middleware('auth');

Auth::routes(['register'=>false, 'reset'=>false]); //quitar olvido de contraseña y registro

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::prefix(['middleware' => 'auth'], function(){ //cuando el usario se logge, dirigirse al controller Empleado
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});