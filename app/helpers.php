<?php

use App\Models\User;
use App\Models\Abonne;
use App\Models\Adulte;
use App\Models\Enfant;
use App\Models\Etudiant;
use App\Models\Personne;
use App\Models\Exemplaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

    if(!function_exists('joinUserTo'))
    {
        function joinUserTo($assistant)
        {
            DB::table('users')
            ->join('assistants','users.id','=','assistants.user_id')
            ->select('users.*','assistants.dateDebut','assistants.dateFin','assistants.dateDebut','assistants.salaire')
            ->where('assistants.user_id',$assistant->user_id)
            ->get();
        }
    }

    if(!function_exists('inscrireUnAbonne'))
    {
        function inscrireUnAbonne($data)
        {
            
            
            $personne = Personne::create([
                'nom' => $data['nom'],
                'prenom' => $data['prenom'],
                'tel' => $data['tel'],
                'DateNaissance' => $data['dateNaissance'],
                'adresse' => $data['adresse'],
                    
            ]); 
            $user = User::create([
                'name' => $data['nom'],
                'email' => $data['email'],
                'personne_id' => $personne->id,
                'password' => Hash::make($data['password']),
                'login' => $data['email']     
            ]);
    
            $user->roles()->sync([3]);
    
            $abonne = Abonne::create([
                'user_id' => $user->id,
                'dateInscription' => $user->created_at,
                'dateRenouvellement' => $user->created_at
            ]);
    
            switch ($data['tarif']) {
                case "enfant":
                    ajoutEnfant($abonne,$data);
                    break;
                case "etudiant":
                    ajoutEtudiant($abonne,$data);
                    break;
                case "adulte":
                    ajoutAdulte($abonne);
                    break;
            }
            
            return $user;
        }
    }

    if(!function_exists('ajouterUnePersonne'))
    {
        function ajouterUnePersonne($request)
        {
            
        
            $personne = Personne::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'tel' => $request->tel,
                'DateNaissance' => $request->dateNaissance,
                'adresse' => $request->adresse,                    
            ]); 

            $user = User::create([
                'name' => $request->nom,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'personne_id' => $personne->id,
                'login' => $request->email,      
            ]);
                return $user;
        }
    
        
    }

    if(!function_exists('ajouterUnAbonne'))
    {
        function ajouterUnAbonne($request)
        {
          $user = ajouterUnePersonne($request);
    
            $user->roles()->sync([3]);
    
            $abonne = Abonne::create([
                'user_id' => $user->id,
                'dateInscription' => $user->created_at,
                'dateRenouvellement' => $user->created_at
            ]);

            
        switch ($request->tarif) {
            case "enfant":
                ajouterEnfant($abonne,$request);
                break;
            case "etudiant":
               ajouterEtudiant($abonne,$request);
                break;
            case "adulte":
                ajoutAdulte($abonne);
                break;
        }
        }
    }

    if(!function_exists('ajoutEnfant'))
    {
        function ajoutEnfant($abonne,$data)
        {
           $personne = Personne::create([
                'nom' => $data['nomT'],
                'prenom' => $data['prenomT'],
                'tel' => $data['telT'],
                'DateNaissance' => $data['dateNaissanceT'],
                'adresse' => $data['adresse']
            ]);

                Enfant::create([
                    'niveauScolaire' => $data['niveauScolaire'],
                    'etablissement' => $data['etablissement'],
                    'abonne_id' => $abonne->id,
                    'titulaire_id' => $personne->id
                ]);

              
        }
    }

    if(!function_exists('ajoutAdulte'))
    {
        function ajoutAdulte($abonne)
        {
            Adulte::create([
                'abonne_id' => $abonne->id,
            ]);
        }
    }

    if(!function_exists('ajoutEtudiant'))
    {
        function ajoutEtudiant($abonne,$data)
        {
            Etudiant::create([
                'etablissement' => $data['etablissement'],
                'niveauScolaire' => $data['niveauScolaire'],
                'abonne_id' => $abonne->id,
                
            ]);
        }
    }
    
    

if(!function_exists('ajouterEnfant'))
{
    function ajouterEnfant($abonne,$request)
    {
        $personne = Personne::create([
            'nom' => $request->nomT,
            'prenom' => $request->prenomT,
            'DateNaissance' => $request->dateNaissanceT,
            'tel' => $request->telT,
            'adresse' => $request->adresseT,
        ]);

        Enfant::create([
            'niveauScolaire' => $request->niveauScolaire,
            'etablissement' => $request->etablissement,
            'titulaire_id' => $personne->id,
            'abonne_id' => $abonne->id,
        ]);
    }
}



if(!function_exists('ajouterEtudiant'))
{
    function ajouterEtudiant(Request $request,$abonne)
    {
        Etudiant::create([
            'etablissement' => $request->etablissement,
            'niveauScolaire' => $request->niveauScolaire,
            'abonne_id' => $abonne->id,
        ]);
    }
}

if(!function_exists('creerPersonne'))
{
    function creerPersonne(Request $request){
        return Personne::create([
            "nom"=>$request->nom_auteur,
            "prenom"=>$request->prenom_auteur,
        ])->id;
    }
}

function creerDessinateur(Request $request){
    return Personne::create([
        "nom"=>$request->nom_dessinateur,
        "prenom"=>$request->prenom_dessinateur,
    ])->id;
}

function creerEditeur(Request $request){
    return Personne::create([
        "nom"=>$request->nom_editeur,
        "adresse"=>$request->adresse_editeur,
    ])->id;
}

function search_titre(string $titre){
    $resultats = DB::table('volumes')
    ->join('documents', 'documents.id', '=', 'volumes.document_id')
     ->join('auteurs', 'auteurs.id', '=', 'volumes.auteur_id')
     ->join('personnes', 'personnes.id', '=', 'auteurs.personne_id')
    ->where('titre', 'like', '%'.$titre.'%')
    ->orwhere('personnes.nom', 'like', '%'.$titre.'%')
    ->get();
    return $resultats;
}

 function search_titre_genre(string $titre , int $genre_id){
 $resultats = DB::table('volumes')
 ->join('documents', 'documents.id', '=', 'volumes.document_id')
 ->join('genres', 'genres.id', '=', 'documents.genre_id')
 ->join('auteurs', 'auteurs.id', '=', 'volumes.auteur_id')
 ->join('personnes', 'personnes.id', '=', 'auteurs.personne_id')
 ->where('titre', 'like', '%'.$titre.'%')
 ->orwhere('personnes.nom', 'like', '%'.$titre.'%')
 ->orwhere('genres.id', '=', $genre_id)
 ->get();
 return $resultats;
}
      function search_titre_categorie(string $titre , int $categorie_id){
 $resultats = DB::table('volumes')
 ->join('documents', 'documents.id', '=', 'volumes.document_id')
 ->join('categories', 'categories.id', '=', 'volumes.categorie_id')
 ->join('auteurs', 'auteurs.id', '=', 'volumes.auteur_id')
 ->join('personnes', 'personnes.id', '=', 'auteurs.personne_id')
 ->where('titre', 'like',$titre)
 ->orwhere('personnes.nom', 'like', '%'.$titre.'%')
 ->where('categories.id', '=',$categorie_id)
 ->get();
 return $resultats;
 }


 function search_categorie( int $categorie_id ){
 $resultats = DB::table('volumes')
 ->join('documents', 'documents.id', '=', 'volumes.document_id')
 ->join('categories', 'categories.id', '=', 'volumes.categorie_id')
 ->where('categories.id', '=', $categorie_id)
 ->get();
 return $resultats;       
}

 function search_categorie_genre( int $categorie_id , int $genre_id){
 $resultats = DB::table('volumes')
 ->join('documents', 'documents.id', '=', 'volumes.document_id')
 ->join('categories', 'categories.id', '=', 'volumes.categorie_id')
 ->join('genres', 'genres.id', '=', 'documents.genre_id')
 ->where('categories.id', '=', $categorie_id)
 ->orwhere('genres.id', '=', $genre_id)
 ->get();
 return $resultats;       
}

 function search_genre(int $genre_id){
 $resultats = DB::table('volumes')
 ->join('documents', 'documents.id', '=', 'volumes.document_id')
 ->join('genres', 'genres.id', '=', 'documents.genre_id')
 ->where('genres.id', '=',$genre_id)
 ->get();
 return $resultats;
}

 function search_all(string $titre, int $categorie_id , int $genre_id){
    $resultats = DB::table('volumes')
    ->join('auteurs', 'auteurs.id', '=', 'volumes.auteur_id')
    ->join('personnes', 'personnes.id', '=', 'auteurs.personne_id')
    ->join('documents', 'documents.id', '=', 'volumes.document_id')
    ->join('categories', 'categories.id', '=', 'volumes.categorie_id')
    ->join('genres', 'genres.id', '=', 'documents.genre_id')
    ->where('categories.id', '=', $categorie_id)
    ->orwhere('genres.id', '=', $genre_id)
    ->get();
    return $resultats;       
   }

    function update(int $exemplaire_id){
    Exemplaire::where('id',$exemplaire_id)->update([
        "disponibilite"=>false
    ]);}


?>