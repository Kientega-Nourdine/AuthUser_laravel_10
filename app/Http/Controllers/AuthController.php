<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use function PHPSTORM_META\map;

class AuthController extends Controller
{
    // Methode d'affichage de la page signup
    public function register() {

        return view('auth.register');
    }

    // Methode de sauvegarde d'inscription
    public function registerSave(Request $request) {

        // Validation des donnees de l'utilisateur
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:4', 'max:20'],
            'password_confirmation' => ['required'],
        ], [
            // Configuration de messages personnelles
            'required' => 'Ce champ doit etre rempli',
            'email' => 'Ce champ doit contenir un email valide',
            'confirmed' => 'Les champs ne se correspondent pas',
            'min' => 'Ce champ doit contenir au minimum :min caracateres',
            'max' => 'Ca champ doit contenir au maximum :max caracteres'
        ]);

        dd($request->all());

        // Sauvegarde de l'utilisateur
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirection vers la page de connexion
        return to_route('login')->with('Inscription reussie');
    }


    // Affichage de la page dashboard
    // public function dashboard() {

    //     return view('dashboard');
    // }

}
