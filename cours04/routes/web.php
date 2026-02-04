<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\AchatController;

Route::get('/', [ProduitController::class, "index"])
    ->name("home.index");

Route::get("/achat", [AchatController::class, "index"])
    ->name("achat.index");
