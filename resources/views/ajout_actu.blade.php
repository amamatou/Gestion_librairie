@extends('layout.mainlayout')

@section('content')
<div class="w-container">

    <h2 class="heading-7">Ajout d'un article</h2>
    <div class="w-form">
    <form method="POST" action="{{ route('actualite.store') }}" enctype="multipart/form-data">
      @csrf

            <label for="titre">Titre</label>
            <input type="text" class="text-field-4 w-input" maxlength="256" name="titre" data-name="titre" placeholder="Entez le titre de l'article" id="titre">
            <label for="contenu">Contenu:</label>
            <textarea id="contenu" name="contenu" maxlength="5000" placeholder="Example Text" data-name="field" class="w-input" required></textarea>
            <div class="form-group">
                <label></label>
                <div class="choose_file">
                    <span>Choisir une image <i class="fa fa-upload"></i></span>
                    <input name="image" type="file" accept="image/*" />
                </div>
            </div>
        </div>
        <div class="center_block">  
            <div class="div-block-12 flex_div_center">
                <input type="submit" value="Valider" data-wait="Veuillez patienter..." class="submit-button w-button flex_div_center_item">
                <input type="reset" value="Reinitialiser" data-wait="Veuillez patienter..." class="w-button btn_annuler flex_div_center_item">
            </div>
        </div>
        </form>
        <div class="w-form-done">
            <div>Merci! Votre souscription a été reçue, veuillez vous diriger vers la bibliotheque pour payer l'abonnement et acceder a votre compte!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Une erreur est survenue.</div>
        </div>
    </div>
</div>
@endsection