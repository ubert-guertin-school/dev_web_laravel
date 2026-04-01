<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(Request $request) {
        $filtres = collect([]);
        if($request->has("recherche")) {
            $recherche = $request->recherche;
            $produits = Produit::whereLike("nom", "%{$request->recherche}%")->orWhereLike("description", "%{$request->recherche}%")->get();
        } else if($request->has("categories")) {
            $produits = Produit::whereIn("categorie_id", $request->categories)->get();
            $filtres = collect($request->categories);
        } else {
            $produits = Produit::inRandomOrder()->get();
        }
        return view('produits.index', [
            "produits" => $produits,
            "categories" => Categorie::all(),
            "filtres" => $filtres
        ]);
    }

    public function show(int $id) {
        return view('produits._show', [
            "produit" => Produit::findOrFail($id)
        ]);
    }
}

