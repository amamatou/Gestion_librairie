@extends('layout.mainlayout')

@section('content')
<div class="container">
  <div data-delay="4000" data-animation="slide" class="w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
    <div class="w-slider-mask">
      <div class="slide3 w-slide"></div>
      <div class="slide1 w-slide"></div>
      <div class="slide-2 w-slide"></div>
    </div>
    <div class="w-slider-arrow-left">
      <div class="w-icon-slider-left"></div>
    </div>
    <div class="w-slider-arrow-right">
      <div class="w-icon-slider-right"></div>
    </div>
    <div class="slide2 w-slider-nav w-round"></div>
</div>
<div class="container-4 w-container">
    

  <h2>Catalogue</h2>
  <div class="w-embed">
    <hr style="display: block; height: 1px; border: 0; border-top: 1px solid #bcbcbc; margin: 1em 0; padding: 0;">
  </div>
  <div class="w-layout-grid grid">
    <a href="#" class="link_block_accueil w-inline-block"><img src="img/ombreduvent.jpg" loading="lazy" width="250" height="300" alt="">
      <h4>L&#x27;ombre du vent</h4>
      <p>premier roman destiné à un public adulte de l’auteur espagnol Carlos Ruiz Zafón. </p>
    </a>
    <a href="#" class="link_block_accueil w-inline-block"><img src="img/télécharger-2.jpg" loading="lazy" width="250" height="300" alt="">
      <h4>Dragon Ball</h4>
      <p>manga d&#x27;Akira Toriyama librement inspiré de Sun Wukong, personnage d&#x27;un roman chinois de la fin du XVI siècle</p>
    </a>
    <a href="#" class="link_block_accueil w-inline-block"><img src="img/tim-alex-xG5VJW-7Bio-unsplash.jpg" loading="lazy" width="250" height="300" srcset="img/tim-alex-xG5VJW-7Bio-unsplash-p-500.jpeg 500w, img/tim-alex-xG5VJW-7Bio-unsplash-p-800.jpeg 800w, img/tim-alex-xG5VJW-7Bio-unsplash-p-1080.jpeg 1080w, img/tim-alex-xG5VJW-7Bio-unsplash-p-1600.jpeg 1600w, img/tim-alex-xG5VJW-7Bio-unsplash-p-2000.jpeg 2000w, img/tim-alex-xG5VJW-7Bio-unsplash-p-2600.jpeg 2600w, img/tim-alex-xG5VJW-7Bio-unsplash-p-3200.jpeg 3200w, img/tim-alex-xG5VJW-7Bio-unsplash.jpg 3786w" sizes="(max-width: 479px) 84vw, 250px" alt="">
      <h4>The chronicles of narnia</h4>
      <p>œuvre littéraire en sept tomes de l&#x27;écrivain britannique C. S. Lewis.</p>
    </a>
  </div>

  
  <div>
    <a href="catalogue.html" class="voirplus w-button">Voir plus</a>
  </div>
</div>
<div class="container-4 w-container">
  <h2>Actualites</h2>
  <div class="w-embed">
    <hr style="display: block; height: 1px; border: 0; border-top: 1px solid #bcbcbc; margin: 1em 0; padding: 0;">
  </div>
  <div class="w-layout-grid grid">
    <a href="#" class="link_block_accueil w-inline-block"><img src="img/dl_umbertoeco-1-1536x864.jpg" loading="lazy" height="150" sizes="(max-width: 479px) 86vw, 266.66668701171875px" srcset="img/dl_umbertoeco-1-1536x864-p-500.jpeg 500w, img/dl_umbertoeco-1-1536x864-p-800.jpeg 800w, img/dl_umbertoeco-1-1536x864-p-1080.jpeg 1080w, img/dl_umbertoeco-1-1536x864.jpg 1536w" alt="">
      <h4>Umberto Eco et le plaisir de raconter des histoires</h4>
      <p>En ce début de nouvelle année qui ressemble drôlement à la précédente, il semble bien que figurent encore en bonne place... </p>
    </a>
    <a href="#" class="link_block_accueil w-inline-block"><img src="img/télécharger-4.jpg" loading="lazy" width="439" height="150" srcset="img/télécharger-4-p-500.jpeg 500w, img/télécharger-4.jpg 1200w" sizes="(max-width: 767px) 91vw, 439px" alt="">
      <h4>Molinet. Une nouvelle activité à la bibliothèque</h4>
      <p>La bibliothèque propose une nouvelle activité pour les enfants de moins de 3 ans...</p>
    </a>
    <a href="#" class="link_block_accueil w-inline-block"><img src="img/dossier-reouverture-bpi-600x400-2.jpg" loading="lazy" width="244" height="150" alt="">
      <h4>Depuis maintenant plus d&#x27;une semaine, la bibliothèque municipale ouvre ses portes tous les jeudis</h4>
      <p>La crise sanitaire a-t-elle laissé des traces dans le travail des bibliothécaires ?</p>
    </a>
  </div>
  <a href="connexion.html" class="voirplus w-button">Voir plus</a>
</div>
<div class="container-4 w-container">
  <h2>Services et tarifs</h2>
  <div class="w-embed">
    <hr style="display: block; height: 1px; border: 0; border-top: 1px solid #bcbcbc; margin: 1em 0; padding: 0;">
  </div>
  <div class="w-layout-grid grid">
    <a href="#" class="link_block_accueil w-inline-block"><img src="img/11950_default_block_widget.jpg" loading="lazy" height="250" alt="">
      <h4>Enfant</h4>
    </a>
    <a href="#" class="link_block_accueil w-inline-block"><img src="img/Bourse-en-Finance-UNIL-Master’s-Grants.jpg" loading="lazy" width="439" height="250" alt="">
      <h4>Etudiant</h4>
    </a>
    <a href="#" class="link_block_accueil w-inline-block"><img src="img/trouble-du-spectre-de-l-autiste-signes-et-caracteristique-adultes.jpg" loading="lazy" width="244" height="250" alt="">
      <h4>Adulte</h4>
    </a>
  </div>
  <a href="infos-pratiques.html" class="voirplus w-button">Voir plus</a>
</div>
</div>
@endsection