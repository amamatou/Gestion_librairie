<?php

namespace App\Http\Controllers;

use App\Models\Editeur;
use Illuminate\Http\Request;

class EditeurController extends Controller
{
    public function store(Request $request){

        $request->validate([
            "nom_editeur"=>"required",
            "adresse_editeur"=>"required"
            
        ]);

       return Editeur::create([
            "personne_id"=>creerEditeur($request),
        ]);
    }

    // public function update(Request $request , Editeur $editeur){
    //     Editeur::where('id',$editeur->id)->update([
    //         "nom"=>$request->nom,
    //         "adresse"=>$request->adresse
    //     ]);
    //      return redirect(route("testLister"));
    //      return back()->with("update","Editeur modifie  avec success");
    // }

    public function delete(Editeur $editeur){
        $editeur->delete();
        return redirect(route("testLister"));
    }

    public function index(){
        $editeurs=Editeur::all();
        return view("testLister",compact("editeurs"));
    }

    public function create(){
        return view("testCreate");
    }

    // public function edit(Editeur $editeur)
    // {
    //     return view("testEdit",compact("editeur"));
    // }

}
