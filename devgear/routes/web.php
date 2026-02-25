<?php

use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProduitController::class, 'index'])
    ->name('accueil');

Route::get("/panier", [PanierController::class, 'index'])
    ->name('panier');

