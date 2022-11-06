<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Etagere;
use App\Models\Exemplaire;
use App\Models\Rayon;
use Illuminate\Http\Request;

class ExemplaireController extends Controller
{
    public function store(Request $request,int $id){

        // $request->validate([
        //     "statut_exemplaire"=>"required",
        // ]);

        if($request->filled('nom_etagere'))
        {$EC = new EtagereController;
        $etagere_id=$EC->store($request)->id;}

        else if($request->filled('etagere_id'))
        $etagere_id=$request->etagere_id;

        $vol=Exemplaire::create([
            "etat"=>$request->input('statut_exemplaire'),
            "disponibilite"=>1,
            "volume_id"=>$id,
            "etagere_id"=>$etagere_id,
        ]);
        return back()->with("success", "Exemplaire  ajoute avec succes");
    }
}
