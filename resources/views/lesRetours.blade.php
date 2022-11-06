@extends('layout.mainlayout')

@section('content')
@if(session()->has("success"))
          <div class="alert alert-success"> {{session()->get('success')}}</div>
@endif
<div>
    @foreach($abonnes as $abonne)
        @php
        $count = 0 
        @endphp
        @foreach($emprunts as $emprunt) 
            @if($abonne->id == $emprunt->abonne_id)          
                @php
                $count = 1
                @endphp
            @endif
        @endforeach
        @if($abonne->supprimer != 1 && $count == 1)
            <h1>{{$abonne->user->personne->prenom}}</h1>
            @foreach($emprunts as $emprunt) 
                @if($abonne->id == $emprunt->abonne_id)          
                    <h4>{{$emprunt->exemplaire->volume->document->titre}}</h4>
                <a href="{{route('emprunt.rendre',$emprunt)}}"><button type="button" class="btn_style btn-sm">rendre</button></a>
                @endif
            @endforeach
        @endif
    @endforeach    
</div>    
@endsection

