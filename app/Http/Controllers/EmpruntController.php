<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Exemplaire;
use App\Models\Abonne;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{

    function create(){
        $emprunts=Emprunt::all();
        return view("ajout_emprunt",compact('emprunts'));
    }

    public function empruntAbonne(){
        $abonnes = Abonne::all();
        $emprunts = Emprunt::all()->where('statut','en cours');
        return view("lesRetours",compact(['emprunts','abonnes']));
    }
    public function rendre(Emprunt $emprunt)
    {
        Emprunt::where('id',$emprunt->id)->update([
            'statut' => 'remis',
        ]);
       return redirect(route('emprunt.gestion'))->with("success", "Opération effectuéee avec succès!");
    }

    public function mesEmprunts()
    {
        $abonne = Abonne::where('user_id',auth()->id())->get();
        if(Emprunt::where('abonne_id',$abonne->first()->id)->get()->first() == null)
        return redirect(route('home'));
        $emprunts = Emprunt::where('abonne_id',$abonne->first()->id)->get();
        return view('mesEmprunts',compact('emprunts'));
    }

    function emprunter(Request $request){
        $request->validate([
            "code_abonne"=>"required",
            "code_exemplaire"=>"required"
            
        ]);

        Emprunt::create([
            "abonne_id"=>$request->code_abonne,
            "exemplaire_id"=>$request->code_exemplaire,
            "etat_exemplaire"=>$request->etat_exemplaire
        ]);

        update($request->code_exemplaire);
        return back()->with("success", "Emprunt realise avec success");
    }

    
}

