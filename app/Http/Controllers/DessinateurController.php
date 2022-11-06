<?php

namespace App\Http\Controllers;

use App\Models\Dessinateur;
use Illuminate\Http\Request;

class DessinateurController extends Controller
{
    public function store(Request $request){

        $request->validate([
            "nom_dessinateur"=>"required",
            "prenom_dessinateur"=>"required"
            
        ]);

        return Dessinateur::create([
            "personne_id"=>creerPersonne($request),
        ]);
    }

    
}
