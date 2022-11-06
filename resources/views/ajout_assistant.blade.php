@extends('layout.mainlayout')

@section('content')
    <div class="w-container">
        <h2 class="heading-7">Ajout d'un assistant</h2>
        <div class="w-form">
            <form action="{{ route('assistant.store') }}" method="POST">
                @csrf
                <div class="div-block-11">
              <h3 class="heading-5">Informations personnelles</h3>
              <div class="html-embed w-embed">
                <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
              </div>
              <label for="nom">Nom</label>
              <input type="text" class="text-field-4 w-input" maxlength="256" name="nom"  placeholder="Entrez le nom" id="nom">
              <label for="prenom">Prenom</label>
              <input type="text" class="text-field-5 w-input" maxlength="256" name="prenom"  placeholder="Entrez le prenom" id="prenom">
              <div class="form-group">
              <label for="dateFin">Date de fin</label>
              <input type="date" class="text-field-6 w-input" maxlength="256" name="dateFin"  id="dateFin">
                <label for="dateNaissance">Date de naissance</label>
                    <input type="date" class="text-field-6 w-input" maxlength="256" name="dateNaissance"  id="dateNaissance">
                </div>
              <label for="tel">téléphone</label>
              <input type="text" class="text-field-7 w-input" maxlength="256" name="tel"  placeholder="Entrez le numero de téléphone" id="tel">
              <label for="adresse">Adresse</label>
              <input type="text" class="text-field-8 w-input" maxlength="256" name="adresse"  placeholder="Entrez  l'adresse" id="adresse">
              <label for="salaire">Salaire</label>
              <input type="num" class="text-field-8 w-input" maxlength="9" name="salaire"  placeholder="Entrez  le salairse" id="salaire">
              
             
            </div>
            <div class="div-block-11">
            <h3 class="heading-5">Informations de connexion</h3>
              <div class="html-embed w-embed">
                <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
              </div>
              <label for="email">Email</label>
              <input type="email" class="text-field w-input" autofocus="true" maxlength="256" name="email"  placeholder="Entrez l&#x27;adresse email" id="email" >

              <label for="password">Mot de passe</label>
              <input type="password" class="text-niveauScolaire w-input" maxlength="256" name="password"  placeholder="Entrez le mot de passe" id="password" >
              
              <label for="password-confirm">Confirmer le mot de passe</label><input type="password" class="text-field-3 w-input" maxlength="256" name="password-confirm"  placeholder="Entrez a nouveau le mot de passe" id="password-confirm" >
            </div>
            <div class="div-block-12 flex_div_center">
                <input type="submit" value="Valider" data-wait="Veuillez patienter..." class="submit-button w-button flex_div_center_item">
                <input type="reset" value="Reinitialiser" data-wait="Veuillez patienter..." class="w-button btn_annuler flex_div_center_item">
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
