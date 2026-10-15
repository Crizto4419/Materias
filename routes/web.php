<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('materia', MateriaController::class)->parameters([
    'materia' => 'materia'
]);
