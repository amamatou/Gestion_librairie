<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function store(Request $request){

        $request->validate([
            "nom_categorie"=>"required",
            "duree_categorie"=>"required",
            "quantite_empruntable_categorie"=>"required"
            
        ]);

       return  Categorie::create([
            "nom"=>$request->input('nom_categorie'),
            "dureeEmprunt"=>$request->input('duree_categorie'),
            "quantiteEmpruntable"=>$request->input('quantite_empruntable_categorie'),
        ]);
    }

    public function update(Request $request , Categorie $categorie){
        Categorie::where('id',$categorie->id)->update([
            "nom"=>$request->input('nom_categorie'),
            "dureeEmprunt"=>$request->input('duree_categorie'),
            "quantiteEmpruntable"=>$request->input('quantite_empruntable_categorie')
        ]);
         return redirect(route("testLister"));
         return back()->with("update","Categorie modifie  avec success");
        
    }

    public function delete(Categorie $categorie){
      $categorie->delete();
        return redirect(route("testLister"));
    }

    public function index(){
        $categories=Categorie::all();
        return view("testLister",compact("categories"));
    }

    public function create(){
        return view("testCreate");
    }

    public function edit(Categorie $categorie)
    {
        return view("testEdit",compact("categorie"));
    }


}
