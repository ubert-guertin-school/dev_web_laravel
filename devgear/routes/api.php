<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/produits/{id}", [ProduitController::class, "show"])->whereNumber("id")->name("produits.show");
