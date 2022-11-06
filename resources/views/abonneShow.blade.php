@extends('layout.mainlayout')

@section('content')
<div class="container">
<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>adresse</th>
                        <th>date d'inscription</th>
                        <th>date de renouvellement</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>{{$abonne->user->personne->nom}}</td>
                        <td>{{$abonne->user->personne->prenom}} </td>
                        <td>{{$abonne->user->email}}</td>
                        <td>{{$abonne->user->personne->tel}} </td>
                        <td>{{$abonne->user->personne->adresse}} </td>
                        <td>{{$abonne->dateInscription}} </td>
                        <td>{{$abonne->dateRenouvellement}} </td>
                    </tr>
                </tbody>
            </table>
            <a href="{{route('abonne.index')}}"><button type="button" class="btn_style btn-sm">retour</button></a>
</div>

@endsection