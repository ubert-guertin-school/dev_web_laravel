<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index() {
        return view('produits.index', [
            "produits" => Produit::inRandomOrder()->limit(6)->get(),
            "categories" => Categorie::all()
        ]);
    }
}
