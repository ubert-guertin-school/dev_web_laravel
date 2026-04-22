<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Models\Commande;
use App\Models\Constantes;
use App\Models\Produit;
use App\Services\PanierService;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class CommandeController extends Controller
{
    public function checkout() {

        $panier = (new PanierService)->calculer();

        // Vérifier si le panier est vide
        if (! $panier["items"]) {
            return redirect()->route('panier')->with('erreur', 'Votre panier est vide.');
        }

        return view('commandes.index', [
            'items' => $panier['items'],
            'sousTotal' => $panier['sousTotal'],
            'totalTPS' => $panier['totalTPS'],
            'totalTVQ' => $panier['totalTVQ'],
            'total' => $panier['total'],
            'stripeKey' => config('services.stripe.key')
        ]);
    }

    public function payer(Request $request) {
        $panier = session()->get('panier', []);

        $panier = (new PanierService)->calculer();

        $total = (int) round($panier['total'] * 100);

        Stripe::setApiKey(config('services.stripe.secret'));

        $intent = PaymentIntent::create([
            'amount' => $total,
            'currency' => 'cad',
            'metadata' => ['user_id' => auth('client')->id()]
        ]);

        $commande = new Commande();
        $commande->client_id = auth('client')->id();
        $commande->montant_total = $total;
        $commande->status = 'en_attente';
        $commande->stripe_payment_intent_id = $intent->id;
        $commande->save();

        return response()->json(['clientSecret' => $intent->client_secret]);
    }

    public function confirmer(Request $request) {
        $id = $request->payment_intent;

        // Cette approche fonctionnne pour un projet académique, mais on l'éviterait en prod:
        // c'est seulement la redirection du navigateur qui détermine la MAJ


        if($id) {
            $commande = Commande::where('stripe_payment_intent_id', $id)->first();

            $commande->status = 'complete';
            $commande->save();

            $panier = (new PanierService)->calculer();
            foreach($panier['items'] as $item) {
                $achat = new Achat();
                $achat->commande_id = $commande->id;
                $achat->produit_id = $item['produit']->id;
                $achat->nom_produit = $item['produit']->nom;
                $achat->prix_unitaire = $this->convertirEnSous($item['produit']->prix);
                $achat->total = $this->convertirEnSous($item['totalProduit']);
                $achat->save();
            }
        }

        session()->forget('panier');
        session()->forget('total');

        return view('commandes.confirmation');
    }

    public function historique() {
        $commandes = auth('client')->user()->commandes()->latest()->get();

        return view('commandes.historique', [
            'commandes' => $commandes
        ]);
    }

    private function convertirEnSous($montant) {
        return (int) round($montant * 100);
    }
}
