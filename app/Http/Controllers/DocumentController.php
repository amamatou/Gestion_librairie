<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Auteur;
use App\Models\Document;
use App\Models\Editeur;
use App\Models\Genre;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    public function store(Request $request){

        $request->validate([
            "code_document"=>"required",
            "titre_document"=>"required", 
            "description_document"=>"required" ,
            "empruntable_document"=>"required",
            "annee_publication_document"=>"required",
            "image_document"=>"required"
        ]);


        $name=$request->file('image_document')->getClientOriginalName();
        $path=$request->file('image_document')->storeAs("images/",$name); 
        $request->image_document->move(public_path('images'),$name);
        
        if($request->filled('nom_editeur'))
        {
            $EC= new EditeurController;
            $editeur_id=$EC->store($request)->id; 
        }
        else if($request->filled('editeur_id'))
        {
            $editeur_id=$request->editeur_id;
        } 
        
        if($request->filled('nom_genre'))
        {
            $GC= new GenreController;
            $genre_id=$GC->store($request)->id;
            
        }

        else if($request->filled('genre_id'))
        {
            $genre_id=$request->genre_id;
        } 
        return Document::create([
            "code"=>$request->input('code_document'),
            "titre"=>$request->input('titre_document'),
            "couverture"=>$path,
            "description"=>$request->input('description_document'),
            "empruntable"=>$request->input('empruntable_document'),
            "anneePublication"=>$request->input('annee_publication_document'),
            "editeur_id"=>$editeur_id, 
            "genre_id"=>$genre_id,
            
        ]);

        //return redirect(route("testLister"));
    }

    // public function update(Request $request , Document $document){
    //     Document::where('id',$document->id)->update([
    //         "nom"=>$request->nom,
    //         "adresse"=>$request->adresse
    //     ]);
    //      return redirect(route("testLister"));
    //      return back()->with("update","Editeur modifie  avec success");
    // }

    // public function delete(Document $document){
    //     $document->delete();
    //     return redirect(route("testLister"));
    // }

    // public function index(){
    //     $documents=Document::all();
    //     return view("testLister",compact("documents"));
    // }

    public function create(){
        $auteurs=Auteur::all();
        $editeurs=Editeur::all();
        $genres=Genre::all();
        return view("testCreate",compact("auteurs","editeurs","genres"));
    }

    // public function edit(Document $document)
    // {
    //     return view("testEdit",compact("document"));
    // }

}