<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CarteController extends Controller
{
    public function index(Request $request) {
        $filtres = collect();

        if ($request->has('recherche')) {
            $recherche = $request->recherche;
            $cartes = Carte::whereLike('nom', "%$recherche%")->orWhereLike('description', "%$recherche%")->get();

        } else if ($request->has("categories")) {
            $categories = $request->categories;
            $cartes = Carte::whereIn('categorie_id', $categories)->get();
            $filtres = collect($request->categories);

        } else {
            $cartes = Carte::all();
        }

        $categories = Categorie::all();

        return view('produits.index', [
            "cartes" => $cartes,
            "categories" => $categories,
            "filtres" => $filtres
        ]);
    }

    // Ici le parametre de l'URL sera automatiquement mis dans les arguments
    public function show(int $id) {
        return view('produits.show', [
            "carte" => Carte::findOrFail($id),
            "categories" => Categorie::all(),
        ]);
    }

    public function showAjax(int $id) {
        $carte = Carte::findOrFail($id);
        return view("produits._show",
        ["carte" => $carte]);
    }
}
// // Récupérer une carte spécifique selon l'id
        // $carte = Carte::findOrFail(1);

        // // Récupérer les cartes qui valent 200$ et plus
        // $cartes = Carte::where('prix', '>=', 200)->get();
        // $cartes = Carte::where('nb_cartes', '<', 50)->get();

        // // LIKE nom carte contain SPx
        // $cartes = Carte::whereLike('nom', '%SPx%')->get();

        // // Get les ids
        // $cartes = Carte::Where('categorie_id', 3)->get();

        // $cartes = Carte::WhereIn('categorie_id', [1, 2])->whereLike('nom', '%2022%')->get();

        // // Récuperer les cartes en ordre decroissant du plus chère au moins chère
        // $cartes = Carte::orderBy('prix', 'desc')->get();

        // // Les 3 cartes les plus chères
        // $cartes = Carte::orderBy('prix', 'desc')->limit(3)->get();

        // // Prix moyen des cartes
        // $moyenne = Carte::avg('prix');

        // // La carte la moins chère
        // $carte = Carte::orderBy('prix', 'asc')->first();

        // // Les cartes comprises entre 150$ et 300$
        // $cartes = Carte::whereBetween('prix', [150, 300])->get();

        // // Compter les cartes
        // $nbCartes = Carte::count();
