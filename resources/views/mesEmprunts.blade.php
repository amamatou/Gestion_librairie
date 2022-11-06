@extends('layout.mainlayout')

@section('content')

<div class="table-responsive box_radio tous"> {{-- si(value="Tous") afficher Tous comme a gauche, pareil pour Payes et Non_payes--}}
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>titre</th>
                        <th>etat</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($emprunts as $emprunt)
                    @if($emprunt->abonne->supprimer != 1)
                        <tr>
                            <td>124537</td>
                            <td>{{$emprunt->exemplaire->volume->document->titre}}</td>
                            <td>{{$emprunt->exemplaire->volume->document->etat_exemplaire}} </td>
                        </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>   
@endsection