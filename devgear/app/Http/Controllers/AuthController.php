<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Afficher le formulaire d'inscription
     * 
     * @return View
     */
    public function registerForm() {
        return view('auth.register');
    }

    /**
     * Traite le formulaire d'inscription
     * 
     * @param Request $request
     * @return Redirect
     */
    public function register(RegisterRequest $request) {
        // Valider
        $donnes = $request->validated();
        
        // Créer le client et le persister (ajouter à la BDD)
        $client = new Client();
        $client->nom = $donnes["name"];
        $client->email = $donnes["email"];
        $client->password = Hash::make($donnes["password"]);
        $client->save();

        // Le "logger"
        Auth::guard('client')->login($client);

        // Rediriger
        return redirect()->route("accueil")->with("succes", "Votre compte a été créé! Bon magasinage!");
    }

    /**
     * Affiche le formulaire de connexion
     * 
     * @return View
     */
    public function loginForm() {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        $donnees = $request->validated();

        // Essayer de connecter le client
        if (Auth::guard('client')->attempt($donnees)) {
            $request->session()->regenerate();
            return redirect()->intended(route("accueil"));
        } 

        // Retourner le formulaire
        return back()->withErrors(["email" => "le courriel ou le mot de passe est invalide."]);
    }

    public function logout(Request $request) {
        Auth::guard('client')->logout();

        // On ne veut pas reconnecter l'utilisateur avec le même ID
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("accueil")->with("succes", "Vous êtes déconnecté avec succès!");
    }
}
