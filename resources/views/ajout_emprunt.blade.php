@extends('layout.mainlayout')

@section('content')

@if($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li> </ul>

@endforeach
@endif

@if(session()->has("success"))
          <div class="alert alert-success"> {{session()->get('success')}}</div>
          @endif

    <div class="container">
        <h2>Ajouter un emprunt</h2>
        <form action="{{route('emprunt.ajouter')}}" class="needs-validation" novalidate method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="code_abonne">Code abonne</label>
                <input type="text" class="form-control"  placeholder="Entez l'identifiant de l'abonne" name="code_abonne" required>
                <div class="invalid-feedback">Champ obligatoire.</div>
            </div>
            <div class="form-group">
                <label for="code_document">Code document</label>
                <input type="text" class="form-control" placeholder="Entez l'identifiant du document" name="code_exemplaire" required>
                <div class="invalid-feedback">Champ obligatoire.</div>
            </div>
            <label for="etat_exemplaire">Selectionnez l'état de l'exemplaire</label>
             <select class="form_style" id="statut_exemplaire" name="etat_exemplaire">
             <option value="" >Choisissez</option>
             <option value="bon">bon</option>
             <option value="moyen">moyen</option>
             <option value="mauvais">mauvais</option>
             </select> &nbsp;
                <div class="d-flex justify-content-between mb-3">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="reset"class="btn btn-outline-secondary">Reinitialiser</button>
                </div>
        </form>
        <div>
        <table class="table table-bordered table-hover liste">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Date emprunt/Etat</th>
                    <th>Date de retour/Etat</th>
                    <th>Categorie</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach($emprunts as $emprunt)
                @if ($emprunt->statut==" retard")
                <tr class="table-danger"> <!-- ligne rouge --> 
                    <td>{{$emprunt->exemplaire}}</td>
                    <td>{{$emprunt->created_at}}/{{$emprunt->exemplaire->etat}}</td>
                    <td>12-02-2022/Etat retour</td>
                    <td>{{$emprunt->exemplaire->volume->categorie->nom}}</td>
                    <td>{{$emprunt->statut}}</td>
                </tr>   
                @else
                <tr> <!-- ligne normale --> 
                    <td>{{$emprunt->exemplaire->volume->document->titre}}</td>
                    <td>{{$emprunt->created_at}}/{{$emprunt->exemplaire->etat}}</td>
                    <td>12-02-2022</td>
                    <td>{{$emprunt->exemplaire->volume->categorie->nom}}</td>
                    <td>{{$emprunt->statut}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>    
@endsection