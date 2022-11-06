@extends('layout.mainlayout')

@section('content')
<div class="container-7 w-container">
    <div class="div-block-24">
      <div><img src="{{asset($volume->document->couverture)}}" loading="lazy" height="300" width="250" alt=""></div>
      <div class="div-block-22">
        <h2>Titre</h2>
        <div class="w-layout-grid grid-7">
          <div id="w-node-_8cfad335-7ba5-919a-60df-eaf26493a941-cc77e4ee">
            <h5 id="w-node-_8cfad335-7ba5-919a-60df-eaf26493a942-cc77e4ee">Statut</h5>
          </div>
          <div id="w-node-_8cfad335-7ba5-919a-60df-eaf26493a944-cc77e4ee">
            <div id="w-node-_8cfad335-7ba5-919a-60df-eaf26493a945-cc77e4ee">@if ($count > 0)
                {{ "disponible" }} @else {{"Indisponible"}}
            @endif</div> 
          </div>
        </div>
        <div class="w-layout-grid grid-7">
          <div id="w-node-_1016e50b-1442-65c3-cc50-658412e58d0b-cc77e4ee">
            <h5 id="w-node-d21aecfa-4466-30f0-5bcd-8fd35f07dd71-cc77e4ee">Nombre de pages</h5>
          </div>
          <div id="w-node-_5eaf8adc-0e74-4e64-8bdb-c40050bb9092-cc77e4ee">
            <div id="w-node-_5c66f218-4c09-faa2-376d-d6510ae55e74-cc77e4ee">{{$volume->nombrePages}}</div>
          </div>
        </div>
        <div class="w-layout-grid grid-7">
          <div id="w-node-b0b8e302-13f2-4b50-1ee5-72975f017132-cc77e4ee">
            <h5 id="w-node-b0b8e302-13f2-4b50-1ee5-72975f017133-cc77e4ee">Auteur</h5>
          </div> 
          <div id="w-node-b0b8e302-13f2-4b50-1ee5-72975f017135-cc77e4ee">
            <div id="w-node-b0b8e302-13f2-4b50-1ee5-72975f017136-cc77e4ee"> {{$volume->auteur->personne->nom}}
          </div>
        </div>
        <div class="w-layout-grid grid-7">
          <div id="w-node-_81090241-878a-9657-37ba-507d11107e74-cc77e4ee">
            <h5 id="w-node-_81090241-878a-9657-37ba-507d11107e75-cc77e4ee">Editeur</h5>
          </div>
          <div id="w-node-_81090241-878a-9657-37ba-507d11107e77-cc77e4ee">
            <div id="w-node-_81090241-878a-9657-37ba-507d11107e78-cc77e4ee">{{$volume->document->editeur->personne->nom}}</div>
          </div>
        </div>
        <div class="w-layout-grid grid-7">
          <div id="w-node-dd451238-754a-13bc-f0b5-3f20f3df84c1-cc77e4ee">
            <h5 id="w-node-dd451238-754a-13bc-f0b5-3f20f3df84c2-cc77e4ee">Genre</h5>
          </div>
          <div id="w-node-dd451238-754a-13bc-f0b5-3f20f3df84c4-cc77e4ee">
            <div id="w-node-dd451238-754a-13bc-f0b5-3f20f3df84c5-cc77e4ee">{{$volume->document->genre->nom}}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-block-25">
      <h3>Synopsis</h3>
      <p>{{$volume->document->description}}</p>
    </div>
  </div>
@endsection