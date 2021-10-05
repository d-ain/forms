<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'index']);
Route::post('/', [FormController::class, 'create']);
Route::get('/add', [FormController::class, 'thanks']);