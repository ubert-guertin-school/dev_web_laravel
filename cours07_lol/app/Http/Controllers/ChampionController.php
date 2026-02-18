<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    public function index(Request $request) {
        // Verif si recherche
        if ($request->has('recherche')) {
            $recherche = $request->recherche;
            $champions = Champion::whereLike('nom', "%$recherche%")->orWhereLike('description', "%$recherche%")->get();
        } else {
            $champions = Champion::all();
        }
 
        return view('champions.index', [ "champions" => $champions ]);
    }

    public function show(int $id) {
        $champion = Champion::findOrFail($id);
        return view('champions.show', [
            "champion" => $champion,
            "suivant" => Champion::where("id", ">", $id)->orderBy('id')->first()
        ]);
    }
}
