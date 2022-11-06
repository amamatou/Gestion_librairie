<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Auteur;
use App\Models\Categorie;
use App\Models\Dessinateur;
use App\Models\Editeur;
use App\Models\Etagere;
use App\Models\Genre;
use App\Models\Livre;
use App\Models\Rayon;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function store(Request $request){
        $VC= new VolumeController;
        $volume_id= $VC->store($request)->id;
     Livre::create([
        "volume_id"=>$volume_id,
    ]);
    return back()->with("success", "Livre ajoute avec succes");
  }

  public function delete(Livre $livre){
    $livre->delete();
    return redirect(route("testLister"));
}

public function index(){
    $livres=Livre::all();
    return view("testLister",compact("livres"));
}
public function create(){
    $auteurs=Auteur::all();
    $editeurs=Editeur::all();
    $genres=Genre::all();
    $categories=Categorie::all();
    return view("ajout_doc",compact("auteurs","editeurs","genres","categories"));
}

public function ajouterExemplaire(Request $request , Livre $livre){
    $EC = new ExemplaireController;
    $EC->store($request,$livre->volume->id);
   
}
    public function editExemplaire( Livre $livre){
    $rayons=Rayon::all();
    $etageres=Etagere::all();
    return view("creerExemplaire",compact("rayons","etageres","livre"));  
    }


}
