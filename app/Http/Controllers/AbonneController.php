<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonne;
use App\Models\User;
use App\Models\Enfant;
use App\Models\Adulte;
use App\Models\Personne;
use App\Http\Requests\AssistantRequest;
use Illuminate\Support\Facades\Hash;

class AbonneController extends Controller
{
    /**AbonneController
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnes = Abonne::all()->where('supprimer','0');
        $payes = $this->abonnePaye();
        $nonPayes = $this->abonneNonPaye();
        return view('gestion_abonnes',compact(['abonnes','payes','nonPayes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajout_abonne');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd("merci"); 
        ajouterUnAbonne($request);
        return redirect(route('abonne.index'))->with("success", "Inscription réussie!");
    }

    public function delete(Abonne $abonne)
    {
       
        Abonne::where('id',$abonne->id)->update([
            'supprimer' => 1,
        ]);

        // dd("Lelement est normalement supprime");

        return redirect(route('abonne.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Abonne $abonne)
    {
        return view('abonneShow',compact('abonne'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonne $abonne)
    {
        return view('modif_infos',compact('abonne'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssistantRequest $request, Abonne $abonne)
    {
        // Abonne::where('id',$abonne->id)->update([
        //     'dateRenouvellement' => $request->dateRenouvellement,
        // ]);
        $user = User::where('id',$abonne->user_id)->first();
        Personne::where('id',$user->personne_id)->update([
            'adresse' => $request->adresse,
            'tel' => $request->tel,
        ]);
        return redirect(route('abonne.show',$abonne));
    }

    public function abonneNonPaye()
    {
        $abonnes = Abonne::all()->where('paye',0)->where('supprimer',0);
        return $abonnes;
        // $abonnes = Abonne::all()->where('paye',0);
        // return view('abonne/abonneNonPaye',compact('abonnes'));
    }

    private function abonnePaye()
    {
        // $abonnes = Abonne::all()->where('paye',1);
        // return view('abonne/abonnePaye',compact('abonnes'));
        $abonnes = Abonne::all()->where('paye',1)->where('supprimer',0);
        return $abonnes;
    }

    public function payer(Abonne $abonne)
    {
        $changer = Abonne::where('id',$abonne->id)->update([
            'paye' => 1,
        ]);
        return redirect(route("abonne.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    
}
