<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Auteur;
use App\Models\AuteurVolume;
use App\Models\BandeDessinnee;
use App\Models\Categorie;
use App\Models\Editeur;
use App\Models\Etagere;
use App\Models\Genre;
use App\Models\Livre;
use App\Models\Rayon;
use App\Models\Volume;
use Illuminate\Http\Request;

class VolumeController extends Controller
{
    public function store(Request $request){

        $request->validate([
            "isbn_volume"=>"required",
            "nbr_page_volume"=>"required", 
            
        ]);

        $categorie_id=null;
        
        if($request->filled('nom_auteur'))
        {
            $EC= new AuteurController;
            $auteur_id=$EC->store($request)->id;
        }
        else if($request->filled('auteur_id'))
        {
            $auteur_id=$request->auteur_id;
        }

        if($request->filled('nom_categorie'))
            {
                $CC= new CategorieController;
                $categorie_id=$CC->store($request)->id;
                
            }
            else if($request->filled('categorie_id'))
            {
                $categorie_id=$request->categorie_id;
            }

        $DC= new DocumentController;
        $document_id= $DC->store($request)->id;
        $vol=Volume::create([
            "isbn"=>$request->input('isbn_volume'),
            "nombrePages"=>$request->input('nbr_page_volume'),
            "document_id"=>$document_id,
            "categorie_id"=>$categorie_id,
            "auteur_id"=>$auteur_id
        ]);
        // $EC = new ExemplaireController;
        // $EC->store($request,$vol->id);

        // AuteurVolume::create([
        //     "auteur_id"=> $auteur_id,
        //     "volume_id"=>$vol->id
        // ]);

        return $vol;
    }

    public function create(){
        $auteurs=Auteur::all();
        $editeurs=Editeur::all();
        $genres=Genre::all();
        $categories=Categorie::all();
        return view("testCreate",compact("auteurs","editeurs","genres","categories"));
    }

    public function delete(Volume $volume){
        $volume->delete();
        return redirect(route("doc.gestion"));
    }
    public function gestion(){
        $volumes=Volume::all();
        return view("gestion_doc",compact("volumes"));
    }

    public function modif(){
        return view("modifier_doc");
    }

    public function index(){
        $volumes=Volume::all();
        return view("gestion_doc",compact("volumes"));
    }

    public function creerExemplaire(){
        return view("ajout_exemplaire");
    }

    public function ajoutExemplaire(Request $request , Volume $volume){
        // dd($volume);
        $EC = new ExemplaireController;
        $EC->store($request,$volume->id);
        return back()->with("success", "Exemplaire  ajoute avec succes");
       
    }
        public function editExemplaire( Volume $volume){
        $rayons=Rayon::all();
        $etageres=Etagere::all();
        return view("ajout_exemplaire",compact("rayons","etageres","volume"));  
        }

}
