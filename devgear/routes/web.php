<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Command\Command;

Route::get('/', [ProduitController::class, 'index'])
    ->name('accueil');

Route::get('/panier', [PanierController::class, 'index'])
    ->middleware('auth:client')
    ->name('panier');

Route::post('/panier', [PanierController::class, 'ajouter'])
    ->name('panier.ajouter');

Route::post('/panier/modifier', [PanierController::class, 'modifier'])
    ->name('panier.modifier');

// Auth
Route::middleware("guest:client")->group(function () {
    Route::get("/register", [AuthController::class, 'registerForm'])
        ->name('registerForm');

    Route::post("/register", [AuthController::class, "register"])
        ->name("register");

    Route::get("/login", [AuthController::class, "loginForm"])
        ->name("loginForm");

    Route::post("/login", [AuthController::class, "login"])
        ->middleware('throttle:5,1')
        ->name("login");
});

// Déconnection POST
Route::post("/logout", [AuthController::class, "logout"])
    ->middleware('auth:client')
    ->name("logout");

// Commandes Stripe
Route::middleware('auth:client')->group(function() {
    Route::get("/checkout", [CommandeController::class, "checkout"])
        ->name("commande.checkout");
    
    Route::post("/checkout", [CommandeController::class, "payer"])
        ->name("commande.payer");
    
    Route::get("/commande/confirmation", [CommandeController::class, 'confirmer'])
        ->name('commande.confirmation');
    
    Route::get("/commande/annulation", [CommandeController::class, 'annuler'])
        ->name('commande.annulation');
    
});