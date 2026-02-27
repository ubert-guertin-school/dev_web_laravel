<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(Request $request) {
        $filtres = collect([]);

        // Recherche
        if($request->has("recherche")) {
            $recherche = $request->recherche;
            $produits = Produit::whereLike("nom", "%$recherche%")->orWhereLike("description")>get();

        // Filtre par catégorie
        } else if ($request->has("categories")) {
            dd($request->categories);
            $produits = Produit::whereIn("categorie_id");
            $filtres = collect($request->categories);
            // Tous les produits
        } else {
            $produits = Produit::inRandomOrder()->limit(6)->get();
        }

        return view('produits.index', [
            "produits" => Produit::inRandomOrder()->limit(6)->get(),
            "categories" => Categorie::all(),
            "filtres" => $filtres
        ]);
    }

    public function show(int $id) {
        return view("produits._show", [
            "produit" => Produit::findOrFail($id)
        ]);
    }
}
