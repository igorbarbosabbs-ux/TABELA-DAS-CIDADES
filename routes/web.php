<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cities', [CidadesController::class, 'index']);
