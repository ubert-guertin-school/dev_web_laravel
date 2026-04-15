<?php

namespace App\Http\Controllers;

use App\Models\Constantes;
use App\Models\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function checkout() {
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

        // Vérifier si le panier est vide
        if (!$items) {
            return redirect()->route('panier')->with('erreur', "Votre panier est vide.");
        }

        return view('commandes.index', [
            'items' => $items,
            'sousTotal' => $sousTotal,
            'totalTPS' => $montants['tps'],
            'totalTVQ' => $montants['tvq'],
            'total' => $montants['total'],
            "stripeKey" => config('services.stripe.key'),
        ]);
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
