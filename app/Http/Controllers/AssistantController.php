<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Abonne;
use App\Models\Assistant;
use App\Models\Personne;
use App\Models\Personnel;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\AssistantRequest;

class AssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assistants = Assistant::all();
        return view('gestion_assistants',compact('assistants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('ajout_assistant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssistantRequest $request)
    {
        
        $user = ajouterUnePersonne($request);
    
        $user->roles()->sync([2]);
        
        $personnel = Personnel::create([
            'dateDebut' => $user->created_at,
            'dateFin' => $request->dateFin,
            'salaire' => $request->salaire,
            'user_id' => $user->id
        ]);
        Assistant::create([
                'personnel_id' => $personnel->id,
            ]);
        
        return redirect(route("assistant.index"))->with("success", "Inscription réussie!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Assistant $assistant)
    {
        return view('assistantShow',compact('assistant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Assistant $assistant)
    {
        return view('abonne_edit',compact('assistant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssistantRequest $request, Assistant $assistant)
    {
        // dd("test");
        
        Assistant::where('id',$assistant->id)->update([
            'dateFin' => $request->dateFin,
            'salaire' => $request->salaire
        ]);
        
        return redirect(route("assistant.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
    }
    public function delete(Assistant $assistant)
    {
        $assistant->delete();
        return redirect(route('assistant.index'));
    }
}
