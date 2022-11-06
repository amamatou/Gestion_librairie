@extends('layout.mainAccueilLayout')

@section('content')
    <div class="w-container">
        <h2 class="heading-7">Inscription</h2>
        <div class="w-form">
          <form id="email-form"  action="{{ route('register') }}"  method="POST">
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
                <label for="date">Date de naissance</label>
                    <input type="date" class="text-field-6 w-input" maxlength="256" name="dateNaissance"  id="date">
                </div>
              <label for="tel">téléphone</label>
              <input type="text" class="text-field-7 w-input" maxlength="256" name="tel"  placeholder="Entrez le numero de téléphone" id="tel">
              <label for="adresse">Adresse</label>
              <input type="text" class="text-field-8 w-input" maxlength="256" name="adresse"  placeholder="Entrez  l'adresse" id="adresse">
            </div>
            <div class="div-block-11">
                <h3 class="heading-5">Informations d&#x27;abonnement</h3>
                <div class="html-embed w-embed">
                    <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
                </div>
                <div class="div-block-13">
                    <div class="div_radio flex_div_center">
                        <label class="flex_div_center_item"><input type="radio" name="tarif" value="adulte" checked> Adulte(prix)</label>
                        <label class="flex_div_center_item"><input type="radio" name="tarif" value="etudiant"> Etudiant(prix)</label>
                        <label class="flex_div_center_item"><input type="radio" name="tarif" value="enfant"> Enfant(prix)</label>
                    </div>
                </div>
                <div class="adulte box_radio"></div>
                <div class="etudiant enfant box_radio">
                    <div class="scolarite">
                        <h4>Scolarite</h4>
                        <hr class="part_line">
                        <div><img src="images/icons8-plus--24.png" loading="lazy" width="20" alt="" class="image"></div>
                            <label for="niveauScolaire">Niveau scolaire</label>
                            <input type="text" class="text-field-9 w-input" maxlength="256" name="niveauScolaire"  placeholder="Entrez le niveau scolaire" id="niveauScolaire">
                            <label for="etablissement">Etablissement</label>
                            <input type="text" class="text-field-10 w-input" maxlength="256" name="etablissement"  placeholder="Entrez l&#x27;etablissement " id="etablissement">
                      </div>
                    </div>
                    <div class="titulaire">
                        <div class=" enfant box_radio"> 
                        <h4>Titulaire</h4>
                        <hr class="part_line">
                        <div><img src="images/icons8-plus--24.png" loading="lazy" width="20" alt="" class="image"></div>
                        <label for="nomT">Nom</label><input type="text" class="text-field-11 w-input" maxlength="256" name="nomT"  placeholder="Entrez le nom" id="nomT">
                        <label for="prenomT">Prenom</label><input type="text" class="text-field-12 w-input" maxlength="256" name="prenomT"  placeholder="Entrez le prenom" id="prenomT">
                        <div class="form-group">
                            <label for="dateNaissanceT">Date de naissance</label>
                                <input type="date" class="text-field-6 w-input" maxlength="256" name="dateNaissanceT"  id="dateNaissanceT">
                          </div>
                        <label for="telT">téléphone</label><input type="text" class="text-field w-input" maxlength="256" name="telT"  placeholder="Entrez le numero de tel" id="telT">
                        <label for="adresseT">Adresse</label>
                        <input type="text" class="text-field-8 w-input" maxlength="256" name="adresseT"  placeholder="Entrez a nouveau l'adresse" id="adresseT">
                      </div>
                </div>
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

            <div class="div-block-12"> <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button></div>

          </form>
          <div class="w-form-done">
            <div>Merci! Votre souscription a été recue, veuillez vous diriger vers la bibliotheque pour payer l'abonnement et acceder a votre compte!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Une erreur est survenue.</div>
          </div>
        </div>
      </div>
@endsection