@extends('layout.mainlayout')

@section('content') 


<div class="section wf-section">
    <div class="div-block-5">
      <h3 class="heading-3">Filtre</h3>
      <div class="w-form flex_div_center">
        <form id="email-form" name="email-form" data-name="Email Form" method="post" action={{route("catalogue.search")}}>
         
          @csrf
          <input type="text" class="w-input flex_div_center_item" maxlength="256" name="titre" data-name="Field 5" placeholder="Titre, Auteur..." id="field-5">
          
          
          {{-- <select id="field" name="field" data-name="Field" class="select-field w-select"> --}}
            {{-- <option value="">Type</option>
            <option value="First">Livre</option>
            <option value="Second">Audio</option>
            <option value="Third">Video</option> --}}
          {{-- </select> --}}
          {{-- <select id="field-4" name="field-4" data-name="Field 4" class="select-field w-select">
            <option value="">Disponibilite</option>
            <option value="First">Disponible</option>
            <option value="Second">Non disponible</option>
          </select> --}}
          <select id="field-3" name="categorie" data-name="Field 3" class="select-field w-select flex_div_center_item">
            <option value="">Categorie</option>
            @foreach($categories as $categorie)
            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
            @endforeach
          </select>
          <select id="field-6" name="genre" data-name="Field 6" class="select-field w-select flex_div_center_item">
            <option value="">Genre</option>
            @foreach($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->nom}}</option>
            @endforeach
          </select>
          <button type="submit" class="flex_div_center_item">Submit</button>
        </form>
        {{-- <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div> --}}
      </div>
    </div>
    <div class="w-container">
     
      <h1 class="heading-2">Catalogue</h1>
      <div class="w-layout-grid grid-2 flex_div">
        @foreach ($volumes as $volume)
        <a id="w-node-_9ea2801c-5108-f9b3-12f3-78ed38a2daa7-45ec8cd9" href="{{route("catalogue.item.show",$volume)}}" class="link-block w-inline-block flex_div_item"><img src="{{asset($volume->document->couverture)}}" loading="lazy" width="250" height="300" sizes="250px" alt="" class="image-4">
          <h4>{{$volume->document->titre}}</h4>
        </a>
        @endforeach
        </a>
      </div>
    </div>
  </div>
  
  </div>
@endsection