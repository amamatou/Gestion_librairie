<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RayonController;
use App\Models\Etagere;
use App\Models\Rayon;
use Illuminate\Http\Request;

class EtagereController extends Controller
{
    public function store(Request $request){

        $request->validate([
        "nom_etagere"=>"required",
    ]);

    if($request->filled('nom_rayon'))
    {
        $RC = new RayonController();
        return Etagere::create([
            "nom"=>$request->input('nom_etagere'),
            "rayon_id"=>$RC->store($request)->id,
        ]);
    }
    else if($request->filled('rayon_id'))
     return Etagere::create([
        "nom"=>$request->input('nom_etagere'),
        "rayon_id"=>$request->input('rayon_id'),
    ]);
    }

    public function update(Request $request , Etagere $etagere){
        Etagere::where('id',$etagere->id)->update([
        "nom"=>$request->nom_etagere,
    ]);
     return redirect(route("testLister"));
     return back()->with("update","Editeur modifie  avec success");
    }

    public function delete(Etagere $etagere){
    $etagere->delete();
    return redirect(route("testLister"));
    }

    public function index(){
    $etageres=Etagere::all();
    $rayons=Rayon::all();
    return view("testLister",compact("etageres","rayons"));
    }

    public function create(){
     $rayons=Rayon::all();
    return view("testCreate",compact("rayons"));
    }

    public function edit(Etagere $etagere)
    {
      $rayons=Rayon::all();
    return view("testEdit",compact("etagere","rayons"));
    }

}
