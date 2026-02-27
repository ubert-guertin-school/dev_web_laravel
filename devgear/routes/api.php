<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 Route::get('/produit/{id}', [ProduitController::class, "show"])
    ->whereNumber("id")
    ->name("produits.show");
