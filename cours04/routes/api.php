<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarteController;


Route::get('/cartes/{id}', [CarteController::class, "showAjax"])->name("showAjax");
