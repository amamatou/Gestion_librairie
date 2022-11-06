<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    public function store(Request $request){

        $request->validate([
            "nom_auteur"=>"required",
            "prenom_auteur"=>"required"
            
        ]);

        return Auteur::create([
            "personne_id"=>creerPersonne($request),
        ]);
    }


    public function delete(Request $request , Auteur $auteur){
        $auteur->delete();
        return redirect(route("testLister"));
    }

    public function index()
    {
        $auteurs=Auteur::all();
        return view("testLister",compact("auteurs"));
    }

    public function edit(Auteur $auteur)
    {
        return view("testEdit",compact("auteur"));
    }

    public function info()
    {
        echo 'info';
    }

    public function create()
    {
        
        return view("test");
    }
}
