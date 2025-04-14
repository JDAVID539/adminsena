<?php

use App\Http\Controllers\OrmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('ormconsultas',[OrmController::class,'index'])->name('ormconsultas.index');

