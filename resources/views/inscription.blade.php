@extends('layout.mainlayout')

@section('content')
    <div class="w-container">
        <h2 class="heading-7">Inscription</h2>
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get">
            <div class="div-block-11">
              <h3 class="heading-5">Informations personnelles</h3>
              <div class="html-embed w-embed">
                <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
              </div>
              <label for="nom">Nom</label>
              <input type="text" class="text-field-4 w-input" maxlength="256" name="nom" data-name="nom" placeholder="Entrez le nom" id="nom">
              <label for="prenom">Prenom</label>
              <input type="text" class="text-field-5 w-input" maxlength="256" name="prenom" data-name="prenom" placeholder="Entrez le prenom" id="prenom">
              <div class="form-group">
                <label for="date">Date de naissance</label>
                    <input type="date" class="text-field-6 w-input" maxlength="256" name="date" data-name="date" id="date">
                </div>
              <label for="telephone">Telephone</label>
              <input type="text" class="text-field-7 w-input" maxlength="256" name="telephone" data-name="telephone" placeholder="Entrez le numero de telephone" id="telephone">
              <label for="adresse">Adresse</label>
              <input type="text" class="text-field-8 w-input" maxlength="256" name="adresse" data-name="adresse" placeholder="Entrez a nouveau l'adresse" id="adresse">
            </div>
            <div class="div-block-11">
                <h3 class="heading-5">Informations d&#x27;abonnement</h3>
                <div class="html-embed w-embed">
                    <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
                </div>
                <div class="div-block-13">
                    <div class="div_radio flex_div_center">
                        <label class="flex_div_center_item"><input type="radio" name="tarif" value="Adulte" checked> Adulte(prix)</label>
                        <label class="flex_div_center_item"><input type="radio" name="tarif" value="Etudiant"> Etudiant(prix)</label>
                        <label class="flex_div_center_item"><input type="radio" name="tarif" value="Enfant"> Enfant(prix)</label>
                    </div>
                </div>
                <div class="Adulte box_radio"></div>
                <div class="Etudiant Enfant box_radio">
                    <div class="scolarite">
                        <h4>Scolarite</h4>
                        <hr class="part_line">
                        <div><img src="images/icons8-plus--24.png" loading="lazy" width="20" alt="" class="image"></div>
                            <label for="nom-2">Niveau scolaire</label>
                            <input type="text" class="text-field-9 w-input" maxlength="256" name="nom-2" data-name="Nom 2" placeholder="Entrez le niveau scolaire" id="nom-2">
                            <label for="nom-2">Etablissement</label>
                            <input type="text" class="text-field-10 w-input" maxlength="256" name="nom-2" data-name="Nom 2" placeholder="Entrez l&#x27;etablissement scolaire" id="nom-2">
                    </div>
                      <div class="titulaire">
                        <h4>Titulaire</h4>
                        <hr class="part_line">
                        <div><img src="images/icons8-plus--24.png" loading="lazy" width="20" alt="" class="image"></div>
                        <label for="nom-2">Nom</label><input type="text" class="text-field-11 w-input" maxlength="256" name="nom-2" data-name="Nom 2" placeholder="Entrez le nom" id="nom-2">
                        <label for="prenom-2">Prenom</label><input type="text" class="text-field-12 w-input" maxlength="256" name="prenom-2" data-name="Prenom 2" placeholder="Entrez le prenom" id="prenom-2">
                        <div class="form-group">
                            <label for="date">Date de naissance</label>
                                <input type="date" class="text-field-6 w-input" maxlength="256" name="date" data-name="date" id="date">
                            </div>
                        <label for="telephone-2">Telephone</label><input type="text" class="text-field w-input" maxlength="256" name="telephone-2" data-name="Telephone 2" placeholder="Entrez le numero de telephone" id="telephone-2">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="text-field-8 w-input" maxlength="256" name="adresse" data-name="adresse" placeholder="Entrez a nouveau l'adresse" id="adresse">
                      </div>
                </div>
            </div>
            <div class="div-block-11">
              <h3 class="heading-5">Informations de connexion</h3>
              <div class="html-embed w-embed">
                <hr style="display: block; height: 1px; border: 0; border-top: 1.5px solid black; margin: 0 0; padding: 0;">
              </div><label for="name">Email</label><input type="email" class="text-field w-input" autofocus="true" maxlength="256" name="name" data-name="Name" placeholder="Entrez l&#x27;adresse email" id="name" required=""><label for="email">Mot de passe</label><input type="password" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="Entrez le mot de passe" id="email" required=""><label for="email-2">Confirmer le mot de passe</label><input type="password" class="text-field-3 w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Entrez a nouveau le mot de passe" id="email-2" required="">
            </div>
            <div class="div-block-12"><input type="submit" value="Valider" data-wait="Veuillez patienter..." class="submit-button w-button"></div>
          </form>
          <div class="w-form-done">
            <div>Merci! Votre souscription a ete recu, veuillez vous diriger vers la bibliotheque pour payer l'abonnement et acceder a votre compte!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Une erreur est survenue.</div>
          </div>
        </div>
      </div>
@endsection