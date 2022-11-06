@extends('layout.mainAccueilLayout')

@section('content')
<div class="container">
  <h2 class="heading-4">ACTUALITES</h2>
  <div class="w-layout-grid grid-3">
    @isset($photo->path)
    <a href="#" class="link-block-2 w-inline-block"><img src="{{asset($photo->path)}}" loading="lazy" sizes="100vw"  alt=""></a>
    @endisset
    <div id="w-node-_8f8bb0d4-5817-02c9-1cbd-2847d5c13bf9-0b1b981b" class="div-block-7">
      <div class="div-block-6">
        <a href="#" class="h3_link">
        @isset($photo->actualite->titre)  
        {{$photo->actualite->titre}}
      @endisset</a>
      </div>
      @isset($photo->actualite->contenu)
      <p class="paragraph-2">{{$photo->actualite->contenu}}</p>
      @endisset
    </div>
  </div>
  </div>
  @can("assistant")
  <a href="{{route('actualite.create')}}"><button type="button" class="btn_style btn-sm">Poster une actualité</button></a>
  <a href="{{route('home')}}"><button type="button" class="btn_style btn-sm">annuler</button></a>
  @endcan
</div>
  
@endsection