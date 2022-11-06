<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Genre;
use App\Models\Auteur;
use App\Models\Exemplaire;
use App\Models\Livre;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{
    // public function search(Request $request){
    //     if($request->filled('titre'))
    //     $titre=$request->titre;
    //     if($request->filled('categorie'))
    //     $categorie=$request->categorie;
    //     if($request->filled('genre'))
    //     $genre=$request->genre;
    //     $resultats = DB::table('volumes')
    //         ->join('documents', 'documents.id', '=', 'volumes.document_id')
    //         ->join('categories', 'categories.id', '=', 'volumes.categorie_id')
    //         ->join('auteur_volumes', 'volumes.id', '=', 'auteur_volumes.volume_id')
    //         ->join('auteurs', 'auteurs.id', '=', 'auteur_volumes.auteur_id')
    //         ->join('personnes', 'personnes.id', '=', 'auteurs.personne_id')
    //         ->join('genres', 'genres.id', '=', 'documents.genre_id')
    //         ->where('titre', 'like', '%'.$titre.'%')
    //         ->orwhere('personnes.nom', 'like', '%'.$titre.'%')
    //         ->orwhere('empruntable', '=', 1)
    //         ->orwhere('genres.nom', 'like', '%'.$genre.'%')
    //         ->orwhere('categories.nom', 'like', '%'.$categorie.'%')
    //         ->select('titre', 'couverture','personnes.nom')
    //         ->get();
    //         return $resultats;


    

    public function Search(Request $request){
        if( $request->filled('titre') && $request->filled('categorie')&& $request->filled('genre') )
        $resultats=search_all($request->titre,$request->categorie,$request->genre);
        else if($request->filled('titre') && $request->filled('categoriee'))
        $resultats=search_titre_categorie($request->titre,$request->categorie);
        else if($request->filled('titre') && $request->filled('genre'))
        $resultats=search_titre_genre($request->titre,$request->genre);
        else if($request->filled('categorie') && $request->filled('genre'))
        $resultats=search_categorie_genre($request->categorie,$request->genre);
        else if($request->filled('titre'))
        $resultats=search_titre($request->titre);
        else if($request->filled('genre'))
        $resultats=search_genre($request->genre);
        else if($request->filled('categorie'))
        $resultats=search_categorie($request->categorie);

        $volumes= $resultats;
        $genres=Genre::all();
        $categories=Categorie::all();
        return view("catalogue",compact("genres","categories","volumes"));
    }



    public function getCatalogue(){
        $volumes=Volume::limit(10)->get();
        $genres=Genre::all();
        $categories=Categorie::all();
        return view("catalogue",compact("genres","categories","volumes"));
    }

    public function catalogueItem(Volume $volume){
        $count=Exemplaire::where('volume_id','=',$volume->id)->count();
        return view("catalogue-item",compact("volume","count"));
    }
   
}
