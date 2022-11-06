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
        <h2>Ajouter un document</h2>
        <form action="{{route("livre.store")}}" class="needs-validation" novalidate method="post" enctype="multipart/form-data">
            @csrf
           @method('post')
            <h3>Information du livre</h3>
            <hr class="part_line"/>
            <div class="form-group">
                <label for="code_doc">Code</label>
                <input type="text" class="form-control" placeholder="Entez le code du document" name="code_document" required>
                <div class="invalid-feedback">Champ obligatoire.</div>
            </div>
            <div class="form-group">
                <label for="titre_document">Titre</label>
                <input type="text" class="form-control" placeholder="Entez le titre du document" name="titre_document" required>
                <div class="invalid-feedback">Champ obligatoire.</div>
            </div>
            <div class="form-group">
                <label for="titre_document">Annee Publication</label>
                <input type="text" class="form-control" placeholder="Entez le titre du document" name="annee_publication_document" required>
                <div class="invalid-feedback">Champ obligatoire.</div>
            </div>
            <div class="form-group">
                <label for="desc_document">Description</label>
                <input type="text" class="form-control" placeholder="Entez la description du document" name="description_document" required>
                <div class="invalid-feedback">Champ obligatoire.</div>
            </div>
            <div class="form-group">
                <label for="desc_document">ISBN</label>
                <input type="text" class="form-control" placeholder="Entez la description du document" name="isbn_volume" required>
                <div class="invalid-feedback">Champ obligatoire.</div>
            </div>
            <div class="form-group">
                <label for="desc_document">NOMBRE PAGES</label>
                <input type="text" class="form-control" placeholder="Entez la description du document" name="nbr_page_volume" required>
                <div class="invalid-feedback">Champ obligatoire.</div>
            </div>
            <div>
                <label for="titre_document">Document empruntable??</label>
                <div class="div_radio">
                    <label><input type="radio" name="empruntable_document" value="1" checked> Oui</label>
                    <label><input type="radio" name="empruntable_document" value="0"> Non</label>
                </div>
            </div>
            <div class="form-group">
                <label for="couverture_document">Couverture</label>
                <div class="choose_file">
                    <span>Choisir la couverture <i class="fa fa-upload"></i></span>
                    <input name="image_document" type="file" accept="image/*" />
                </div>
            </div>
            <div class="flex_div">
                <div class="select_show_hide">
                    <label for="genre">Selectionnez le genre</label>
                    <select class="form_style" id="genre_id" name="genre_id">
                        <option value="" >Choisissez</option>
                        @foreach ($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <span class="flex_div_item">ou</span>
                <button type="button" class="btn btn-light flex_div_item" data-toggle="collapse" data-target="#ajout_genre">Nouveau genre</button>    
            </div>
            <div id="ajout_genre" class="collapse flex_div_item">
                <div class="form-group">
                    <label>Genre</label>
                    <input type="text" name="nom_genre" class="form_style" placeholder="Entez le genre">
                </div>
            </div> 
            <div class="flex_div">
                <div class="select_show_hide">
                    <label for="categorie_id">Selectionnez la categorie</label>
                    <select class="form_style" id="categorie" name="categorie_id">
                        <option value="" >Choisissez</option>
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <span class="flex_div_item">ou</span>
                <button type="button" class="btn btn-light flex_div_item" data-toggle="collapse" data-target="#ajout_categorie">Nouvelle categorie</button>    
            </div>
            <div id="ajout_categorie" class="collapse flex_div_item">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom_categorie" class="form_style" placeholder="Entez le nom de la categorie">
                </div>
                <div class="form-group">
                    <label>Durée d'emprunt</label>
                    <input type="text" name="duree_categorie" class="form_style" placeholder="Entez le nom de la categorie">
                </div>
                <div class="form-group">
                    <label for="categorie">Quantite empruntable</label>
                    <select class="form_style" id="categorie" name="quantite_empruntable_categorie">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div> 
            <h3>Information de l'auteur</h3>
            <hr class="part_line"/>
            <div class="flex_div">
                <div class="select_show_hide">
                    <label for="auteur">Selectionnez l'auteur</label>
                    <select class="form_style" id="auteur" name="auteur_id">
                        <option value="" >Choisissez</option>
                        @foreach ($auteurs as $auteur)
                        {{$auteur->nom}}
                            <option value="{{$auteur->id}}">{{$auteur->personne->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <span class="flex_div_item">ou</span>
                <button type="button" class="flex_div_item btn btn-light" data-toggle="collapse" data-target="#ajout_auteur">Nouvel Auteur</button>    
            </div>
            <div id="ajout_auteur" class="collapse flex_div_item">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom_auteur" class="form_style" placeholder="Entez le nom de l'auteur">
                </div>
                <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" name="prenom_auteur" class="form_style" placeholder="Entez le prenom de l'auteur">
                </div>
            </div>
            <h3>Information de l'editeur</h3>
            <hr class="part_line"/>
            <div class="flex_div">
                <div class="select_show_hide">
                    <label for="editeur">Selectionnez l'editeur</label>
                    <select class="form_style" id="editeur"name="editeur_id">
                        <option value="" >Choisissez</option>
                        @foreach ($editeurs as $editeur)
                            <option value="{{$editeur->id}}">{{$editeur->personne->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <span class="flex_div_item">ou</span>
                <button type="button" class="btn btn-light flex_div_item" data-toggle="collapse" data-target="#ajout_editeur">Nouvel Editeur</button>    
            </div>
            <div id="ajout_editeur" class="collapse flex_div_item">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom_editeur" class="form_style" placeholder="Entez le nom de l'editeur">
                </div>
                <div class="form-group">
                    <label>Adresse</label>
                    <input type="text" name="adresse_editeur" class="form_style" placeholder="Entez l'adresse de la maison d'edition">
                </div>
            </div>
            <div class="center_block">   
                <div class="flex_div_center">
                    <button type="submit" class="btn_style flex_div_center_item">Enregistrer</button>
                    <button type="reset"class="btn_style btn_annule flex_div_center_item">Renitialiser</button>
                </div>
            </div>
        </form>
    <div>
@endsection