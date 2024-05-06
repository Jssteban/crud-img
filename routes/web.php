<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/empleado/create', [EmpleadoController::class , 'create']);
*/
Route::resource('/empleado', EmpleadoController::class);