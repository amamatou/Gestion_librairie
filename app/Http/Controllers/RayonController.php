<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function store(Request $request){

    $request->validate([
        "nom_rayon"=>"required",
        
        
    ]);

    return Rayon::create([
        "nom"=>$request->input('nom_rayon'),
    ]);

    }

    public function update(Request $request , Rayon $rayon){
        Rayon::where('id',$rayon->id)->update([
        "nom"=>$request->nom_rayon,
    ]);
     return redirect(route("testLister"));
     return back()->with("update","Editeur modifie  avec success");
    }

    public function delete(Rayon $rayon){
    $rayon->delete();
    return redirect(route("testLister"));
    }

    public function index(){
    $rayons=Rayon::all();
    return view("testLister",compact("rayons"));
    }

    public function create(){
    return view("testCreate");
    }

    public function edit(Rayon $rayon)
    {
    return view("testEdit",compact("rayon"));
    }

}
