<?php

namespace App\Http\Controllers;

use App\Models\Constantes;
use App\Models\Produit;
use App\Services\PanierService;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index() {

       $panier = (new PanierService)->calculer();

        return view('panier.index', [
            'items' => $panier['items'],
            'sousTotal' => $panier['sousTotal'],
            'totalTPS' => $panier['totalTPS'],
            'totalTVQ' => $panier['totalTVQ'],
            'total' => $panier['total'],
        ]);
    }

    public function ajouter(Request $request) {
        $id = $request->id;

        Produit::findOrFail($id);
        $panier = session()->get('panier', []);
        if (isset($panier[$id]) == true ) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }
        session()->put('panier', $panier);

        return redirect()->route('panier');
    }

    private function calculerMontants($sousTotal) {
        $totalTPS = $sousTotal * Constantes::$TPS;
        $totalTVQ = ($totalTPS + $sousTotal) * Constantes::$TVQ;
        $total = $sousTotal + $totalTPS + $totalTVQ;

        return [
            'tps' => number_format($totalTPS, 2, ','),
            'tvq' => number_format($totalTVQ, 2, ','),
            'total' => number_format($total, 2, ','),
        ];
        }
}
