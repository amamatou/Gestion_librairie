<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function store(Request $request){

    $request->validate([
        "nom_genre"=>"required",
        
        
    ]);

   return Genre::create([
        "nom"=>$request->input('nom_genre'),
    ]);
    
    }

    public function update(Request $request , Genre $genre){
    Genre::where('id',$genre->id)->update([
        "nom"=>$request->nom_genre,
    ]);
     return redirect(route("testLister"));
     return back()->with("update","Editeur modifie  avec success");
    }

    public function delete(Genre $genre){
    $genre->delete();
    return redirect(route("testLister"));
    }

    public function index(){
    $genres=Genre::all();
    return view("testLister",compact("genres"));
    }

    public function create(){
    return view("testCreate");
    }

    public function edit(Genre $genre)
    {
    return view("testEdit",compact("genre"));
    }

}
