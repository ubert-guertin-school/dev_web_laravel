<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CarteController extends Controller
{
    public function index() {
        $cartes = Carte::all();
        //dd($cartes[0]->nom); // dump & die

        $categories = Categorie::all();
        //dd($categories);

        // Récupérer une carte spécifique selon l'id
        $carte = Carte::findOrFail(1);
        //dd($carte);

        // Récupérer les cartes qui valent 200$ et plus
        $cartes = Carte::where('prix', '>=', 200)->get();
        //dd($cartes);

        $cartes = Carte::where('nb_cartes', '<', 50)->get();
        // dd($cartes);

        // LIKE nom carte contain SPx
        $cartes = Carte::whereLike('nom', '%SPx%')->get();
        dd($cartes);

        return view('home.index');

    }
    //
}
