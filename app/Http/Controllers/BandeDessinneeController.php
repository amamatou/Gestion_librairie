<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Auteur;
use App\Models\BandeDessinnee;
use App\Models\Categorie;
use App\Models\Dessinateur;
use App\Models\Editeur;
use App\Models\Etagere;
use App\Models\Genre;
use App\Models\Rayon;
use App\Models\Volume;
use Illuminate\Http\Request;

class BandeDessinneeController extends Controller
{
    public function store(Request $request){

        $request->validate([
            "nom_dessinateur"=>"required",
            "prenom_dessinateur"=>"required",   
        ]);

        $VC= new VolumeController;
        $volume_id= $VC->store($request)->id;
        $DC= new DessinateurController;
        $dessinateur_id= $DC->store($request)->id;


     return BandeDessinnee::create([
        "volume_id"=>$volume_id,
        "dessinateur_id"=>$dessinateur_id,
    ]);
    // return redirect(route("testLister"));
  }

//   public function index(){
//     $bandeDessinees=BandeDessinnee::all();
//     return view("testLister",compact("bandeDessinees"));
// }
public function create(){
    $auteurs=Auteur::all();
    $editeurs=Editeur::all();
    $genres=Genre::all();
    $categories=Categorie::all();
    $dessinateurs=Dessinateur::all();
    return view("ajout_bd",compact("auteurs","editeurs","genres","categories","dessinateurs"));
}





// public function delete(Dessinateur $dessinateur){
//     $dessinateur->delete();
   
// }



// public function ajouterExemplaire(Request $request , BandeDessinnee $bandeDessinee){
//     $EC = new ExemplaireController;
//     $EC->store($request,$bandeDessinee->volume->id);
   
// }
//     public function editExemplaire( BandeDessinnee $bandeDessinee){
//     $rayons=Rayon::all();
//     $etageres=Etagere::all();
//     return view("creerExemplaire",compact("rayons","etageres","bandeDessinee"));  
//     }

}
