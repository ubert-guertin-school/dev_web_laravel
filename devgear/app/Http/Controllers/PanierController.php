<?php

namespace App\Http\Controllers;

use App\Models\Constantes;
use App\Models\Produit;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index() {

        $panier = session()->get('panier', []);

        $ids = array_keys($panier);

        $produits = [];
        if(!empty($ids)) {
            $produits = Produit::whereIn('id', $ids)->get();
        }

        $items = [];
        $sousTotal = 0.00;

        foreach($produits as $produit) {
            $quantite = $panier[$produit->id] ?? 0;
            $totalProduit = $quantite * $produit->prix;
            $sousTotal += $totalProduit;

            $items[] = [
                'produit' => $produit,
                "quantite" => $quantite,
                'totalProduit' => $totalProduit
            ];
        }

        $montants = $this->calculerMontants($sousTotal);

        session()->put('total', $montants['total']);

        return view('panier.index', [
            'items' => $items,
            'sousTotal' => $sousTotal,
            'totalTPS' => $montants['tps'],
            'totalTVQ' => $montants['tvq'],
            'total' => $montants['total'],
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
