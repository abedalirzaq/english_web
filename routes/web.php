<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', [StepController::class, 'test']);