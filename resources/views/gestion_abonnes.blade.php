@extends('layout.mainlayout')

@section('content')
@if(session()->has("success"))
          <div class="alert alert-success"> {{session()->get('success')}}</div>
          @endif

    <div class="container">
        <h2>Gestion des abonnes</h2>
        <div class="flex_div flex_div_space">
            <div class="div_radio flex_div">
                <label class="flex_div_item"><input type="radio" name="abonnement" value="tous" checked> Tous</label>
                <label class="flex_div_item"><input type="radio" name="abonnement" value="payes"> Payés</label>
                <label class="flex_div_item"><input type="radio" name="abonnement" value="nonPayes"> Non payés</label>
            </div>
            
            <ul class="pagination">
                <li class="page-item"><a class="page-link active" href="#">1</a></li> {{-- class="active" le numero choisit --}}
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">..</a></li>
            </ul>
        </div>
        <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Recherche..">
        <br>
        <div class="table-responsive box_radio tous"> {{-- si(value="Tous") afficher Tous comme a gauche, pareil pour Payes et Non_payes--}}
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($abonnes as $abonne)
                    <tr>
                        <td>124537</td>
                        <td>{{$abonne->user->personne->nom}}</td>
                        <td>{{$abonne->user->personne->prenom}} </td>
                        <td>{{$abonne->user->email}}</td>
                        <td>{{$abonne->user->personne->tel}} </td>
                        <td>
                            @if($abonne->paye == 0)
                            <a href="{{route('abonne.paye',$abonne->id)}}"><button type="button" class="btn_style btn-sm">Payer</button></a> {{-- afficher si value=("Non_payes") --}}
                            @endif
                            <a href="{{route('abonne.show',$abonne)}}"><button type="button" class="btn_style btn-sm">Details</button></a>
                            <a href="{{route('abonne.edit',$abonne)}}"><button type="button" class="btn_style btn-sm">Editer</button></a>   {{-- afficher si value=("Payes") --}}
                            <a href="{{route('abonne.delete',$abonne)}}"><button type="button" class="btn_style btn_rouge btn-sm">supprimer</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>   

        
        <div class="table-responsive box_radio nonPayes"> {{-- si(value="Tous") afficher Tous comme a gauche, pareil pour Payes et Non_payes--}}
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($abonnes as $abonne)
                    @if($abonne->paye == 0)
                    <tr>
                        <td>124537</td>
                        <td>{{$abonne->user->personne->nom}}</td>
                        <td>{{$abonne->user->personne->prenom}} </td>
                        <td>{{$abonne->user->email}}</td>
                        <td>{{$abonne->user->personne->tel}} </td>
                        <td>
                            <a href="{{route('abonne.paye',$abonne->id)}}"><button type="button" class="btn_style btn-sm">Payer</button></a> {{-- afficher si value=("Non_payes") --}}
                            <a href="{{route('abonne.show',$abonne)}}"><button type="button" class="btn_style btn-sm">Details</button></a>
                            <a href="{{route('abonne.edit',$abonne)}}"><button type="button" class="btn_style btn-sm">Editer</button></a>   {{-- afficher si value=("Payes") --}}
                            <a href="{{route('abonne.delete',$abonne)}}"><button type="button" class="btn_style btn_rouge btn-sm">supprimer</button></a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>  

        <div class="table-responsive box_radio payes"> {{-- si(value="Tous") afficher Tous comme a gauche, pareil pour Payes et Non_payes--}}
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($abonnes as $abonne)
                    @if($abonne->paye == 1)
                    <tr>
                        <td>124537</td>
                        <td>{{$abonne->user->personne->nom}}</td>
                        <td>{{$abonne->user->personne->prenom}} </td>
                        <td>{{$abonne->user->email}}</td>
                        <td>{{$abonne->user->personne->tel}} </td>
                        <td>
                            <a href="{{route('abonne.show',$abonne)}}"><button type="button" class="btn_style btn-sm">Details</button></a>
                            <a href="{{route('abonne.edit',$abonne)}}"><button type="button" class="btn_style btn-sm">Editer</button></a>   {{-- afficher si value=("Payes") --}}
                            <a href="{{route('abonne.delete',$abonne)}}"><button type="button" class="btn_style btn_rouge btn-sm">supprimer</button></a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>   

</div>

@endsection