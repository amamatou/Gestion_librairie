@extends('layout.mainlayout')

@section('content')
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
                        <th>salaire</th>
                        <th>date de debut</th>
                        <th>date de fin</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>124537</td>
                        <td>({{$assistant->personnel->user->personne->nom}})</td>
                        <td>{{$assistant->personnel->user->personne->prenom}}</td>
                        <td>{{$assistant->personnel->user->personne->DateNaissance}}</td>
                        <td>{{$assistant->personnel->user->email}}</td>
                        <td>{{$assistant->personnel->user->personne->tel}}</td>
                        <td>{{$assistant->personnel->user->personne->adresse}}</td>
                        <td>{{$assistant->salaire}}</td>
                        <td>{{$assistant->personnel->dateDebut}}</td>
                        <td>{{$assistant->personnel->dateFin}}</td>
                        <td>
                            <a href="{{route('assistant.show',$assistant)}}"><button type="button" class="btn_style btn_rouge btn-sm">voir plus</button></a>
                            <a href="{{route('assistant.show',$assistant)}}"><button type="button" class="btn_style btn-sm">Editer</button></a>  
                            <a href="{{route('assistant.delete',$assistant)}}"><button type="button" class="btn_style btn_rouge btn-sm">Supprimer</button></a>
                       </td>
                    </tr>
                </tbody>
            </table>
            <a href="{{route('assistant.index')}}"><button type="button" class="btn_style btn-sm">retour</button></a>
@endsection