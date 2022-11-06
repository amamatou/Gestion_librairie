@extends('layout.mainAccueilLayout')

@section('content')
<div class="container-6 w-container">
    <div class="w-layout-grid grid-4 login_div">
      <div id="w-node-bd074abe-e067-c491-3de2-62c35e2b0527-faf12a89" class="div-block-17">
        <div class="form-block w-form">
          <h2>Connexion</h2>
          <form id="email-form" action="{{ route('login') }}" name="email-form" data-name="Email Form" method="POST" class="form">
            <label for="email">Email</label>
            <input type="email" class="w-input" maxlength="256" name="email" data-name="email" placeholder="Entrez l&#x27;adresse email" id="email" required>
            
            <label for="password">Mot de passe</label><input type="password" class="w-input" maxlength="256" name="password" data-name="password" placeholder="Entrez le mot de passe" id="password" required>
            @csrf  
          <a href="{{ route('password.request') }}">Mot de passe oublié?<br>‍</a>
            <div class="div-block-20"><input type="submit" value="Se connecter" data-wait="Please wait..." class="btn_submit w-button"></div>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="div-block-17">
        <div class="div-block-20">
          <div class="text-block-6">Pas encore inscrit?</div>
        </div>
        <div class="div-block-20">
          <a href="{{route('register')}}" class="button-2 w-button">S&#x27;abonner</a>
        </div>
        <p><strong>Pourquoi s&#x27;inscrire ?<br>‍<br></strong>Votre compte d&#x27;abonné vous permettra de:<strong><br></strong></p>
        <ul role="list">
          <li>Emprunter des documents</li>
          <li>Rejoignez une communauté de passionnés et échangez sur vos lectures</li>
          <li>consulter votre historique d&#x27;emprunts a tout moment depuis chez vous</li>
        </ul>
      </div>
    </div>
  </div>
@endsection