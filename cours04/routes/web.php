<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProduitController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\CarteController;

Route::get('/', [CarteController::class, "index"])
    ->name("home.index");

Route::get("/achat", [AchatController::class, "index"])
    ->name("achat.index");
