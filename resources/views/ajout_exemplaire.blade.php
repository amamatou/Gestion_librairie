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
  
  <div class="w-container">
    <h2 class="heading-7">Ajout d'un exemplaire</h2>
    <div class="w-form">
      
        <form action="{{route("doc.gestion.exemplaire.ajout",$volume)}}" method="POST">
          @csrf
          @method('post')
          <h3 class="heading-5">Localisation</h3>
          <div class="html-embed w-embed">
            <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
          </div>
          <div class="flex_div">
            <div class="select_show_hide">
                <label for="rayon">Selectionnez le rayon</label>
                <select class="form_style" id="rayon" name="rayon_id">
                  <option value="" >Choisissez</option>
                  @foreach ($rayons as $rayon)
                  {{$rayon->name}}
                      <option value="{{$rayon->id}}">{{$rayon->nom}}</option>
                  @endforeach
                </select>
            </div>
            <span class="flex_div_item">ou</span>
            <button type="button" class="flex_div_item btn btn-light" data-toggle="collapse" data-target="#ajout_rayon">Nouveau Rayon</button>    
          </div>
          <div id="ajout_rayon" class="collapse flex_div_item">
            <label for="nom_rayon">Nom du rayon</label>
            <input type="text" class="text-field-4 w-input" maxlength="256" name="nom_rayon" data-name="nom_rayon" placeholder="Entrez le nom du rayon" id="nom_rayon">
        </div>
        <div class="flex_div">
          <div class="select_show_hide">
              <label for="etagere_id">Selectionnez l'étagère</label>
              <select class="form_style" id="etagere_id" name="etagere_id">
                <option value="" >Choisissez</option>
                @foreach ($etageres as $etagere)
                    <option value="{{$etagere->id}}">{{$etagere->nom}}</option>
                @endforeach 
              </select>
          </div>
          <span class="flex_div_item">ou</span>
          <button type="button" class="flex_div_item btn btn-light" data-toggle="collapse" data-target="#ajout_etagere">Nouvelle étagère</button>    
        </div>
        <div id="ajout_etagere" class="collapse flex_div_item">
          <label for="nom_etagere">Nom du rayon</label>
          <input type="text" class="text-field-4 w-input" maxlength="256" name="nom_etagere" data-name="nom_etagere" placeholder="Entrez le nom de l'etagère" id="nom_etagere">
      </div>
      <h3 class="heading-5">Etat de l'exemplaire</h3>
      <div class="html-embed w-embed">
        <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
      </div>
      <label for="statut_exemplaire">Selectionnez l'état de l'exemplaire</label>
      <select class="form_style" id="statut_exemplaire" name="statut_exemplaire">
        <option value="" >Choisissez</option>
        <option value="bon">bon</option>
        <option value="moyen">moyen</option>
        <option value="mauvais">mauvais</option>
      </select>
        <div class="div-block-12 flex_div_center">
            <input type="submit" value="Valider" data-wait="Veuillez patienter..." class="submit-button w-button flex_div_center_item">
            <input type="reset" value="Reinitialiser" data-wait="Veuillez patienter..." class="w-button btn_annuler flex_div_center_item">
        </div>
        </form>
        <div class="w-form-done">
            <div>Ajout effectué!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Une erreur est survenue.</div>
        </div>
    </div>
</div>
@endsection

