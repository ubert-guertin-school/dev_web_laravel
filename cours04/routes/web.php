<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarteController;

Route::get('/', [CarteController::class, 'index'])->name('home.index');
