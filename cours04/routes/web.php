<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get("/", [CarteController::class, "index"])
    ->name("produits.index");

Route::get("/cartes/{id}", [CarteController::class, 'show'])
    ->whereNumber('id')
    ->name('carte.show');

Route::get("/panier", [AchatController::class, "index"])
    ->name("achat.index");
