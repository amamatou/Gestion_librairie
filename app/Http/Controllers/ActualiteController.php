<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Http\Requests\AssistantRequest;

class ActualiteController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
            $photo = $photos->last();
            return view('actualite',compact('photo'));
        
    }

    public function create()
    {
        return view('ajout_actu');
    }

    public function store(AssistantRequest $request)
    {
         
        // $validatedData = $request->validate([
        //  'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //   'titre' => 'required|min:3',
        //   'contenu' => 'required|min:10'  
        // ]);
 
        $name = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->storeAs('images/',$name);

        $request->image->move(public_path('images'),$name);
 
        // $path = $request->file('image')->storeAs('public/',$name);

        $actualite = Actualite::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu 
        ]);
    
        $photo = Photo::create([
            'nom' => $name,
            'path' => $path,
            'actualite_id' =>$actualite->id
        ]);
        // dd("actualité postée!");
        return  redirect(route('actualite.index'));
    }
}
