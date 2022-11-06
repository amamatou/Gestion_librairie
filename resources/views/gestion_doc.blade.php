@extends('layout.mainlayout')

@section('content')
    <div class="container">
        <h2>Gestion des documents</h2>
        <div class="flex_div flex_div_space">
            <div class="div_radio flex_div">
                <label class="flex_div_item"><input type="radio" name="empruntable" value="Tous" checked> Tous</label>
                <label class="flex_div_item"><input type="radio" name="empruntable" value="oui"> Empruntables</label>
                <label class="flex_div_item"><input type="radio" name="empruntable" value="non"> Non empruntables</label>
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
        <div class="table-responsive box_radio Tous"> {{-- si(value="Tous") afficher Tous comme a gauche, pareil pour Payes et Non_payes--}}
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Titre</th>
                        <th>genre</th>
                        <th>categorie</th>
                        <th>Auteur</th>
                        <th>Editeur</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach ($volumes as $volume)
                    <tr>
                        <td>{{$volume->document->code}}</td>
                        <td>{{$volume->document->titre}}</td>
                        <td>{{$volume->document->genre->nom}}</td>
                        <td>{{$volume->categorie->nom}}</td>
                        <td>auteur</td>
                        <td>{{$volume->document->editeur->personne->nom}}</td>
                        <td>
                            <form action="{{ route('doc.delete', $volume)}}" method="post">
                                @csrf
                                @method('DELETE') 
                             <button class="btn_style btn_rouge btn-sm" type="submit">Supprimer</button>
                             <a href="{{route("doc.modif",$volume)}}" class="btn_style btn-sm"> Editer</a>
                             <a href="{{route("doc.gestion.exemplaire.edit",$volume)}}" class="btn_style btn-sm"><span class="fa fa-plus"></span>Exemplaire</a>
                             </form>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>   
  </div>
@endsection

