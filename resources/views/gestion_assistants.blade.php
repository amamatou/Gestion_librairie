@extends('layout.mainlayout')

@section('content')
@if(session()->has("success"))
          <div class="alert alert-success"> {{session()->get('success')}}</div>
          @endif
    <div class="container">
        <h2>Gestion des assistants</h2>
            
        </div>
        <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Recherche..">
        <br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date naissance</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Adresse</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        @foreach($assistants as $assistant)
                        <td>124537</td>
                        <td>({{$assistant->personnel->user->personne->nom}})</td>
                        <td>{{$assistant->personnel->user->personne->prenom}}</td>
                        <td>{{$assistant->personnel->user->personne->DateNaissance}}</td>
                        <td>{{$assistant->personnel->user->email}}</td>
                        <td>{{$assistant->personnel->user->personne->tel}}</td>
                        <td>{{$assistant->personnel->user->personne->adresse}}</td>
                        <td>
                            <a href="{{route('assistant.show',$assistant)}}"><button type="button" class="btn_style btn_rouge btn-sm">voir plus</button></a>
                            <a href="{{route('assistant.edit',$assistant)}}"><button type="button" class="btn_style btn-sm">Editer</button></a>  
                            <a href="{{route('assistant.delete',$assistant)}}"><button type="button" class="btn_style btn_rouge btn-sm">Supprimer</button></a>
                       </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
  </div>
@endsection