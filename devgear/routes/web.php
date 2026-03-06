<?php

use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProduitController::class, 'index'])
    ->name('accueil');

Route::get("/panier", [PanierController::class, 'index'])
    ->name('panier');

Route::post("/panier", [PanierController::class, "ajouter"])
    ->name("panier.ajouter");

Route::post("/panier/modifier", [
    PanierController::class, "modifier"
])->name("panier.modifier");
