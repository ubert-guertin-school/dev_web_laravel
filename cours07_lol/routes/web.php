<?php

use App\Http\Controllers\ChampionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChampionController::class, "index"])
    ->name("accueil");

Route::get('/champions/{id}', [ChampionController::class, 'show'])
    ->whereNumber('id')
    ->name('champions.show');
