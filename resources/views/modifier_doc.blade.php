@extends('layout.mainlayout')

@section('content')
<div class="container mt-3">
    <form action="#">
        <h2>Modification du document</h2>
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Informations Document</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Informations Auteur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Informations Editeur</a>
        </li>
        </ul>
    
        <!-- Tab panes -->
        <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>
            <div class="table-responsive">
                <table class="table table-bordered table_info">
                    <tbody>
                        <tr>
                            <th>Couverture</th>
                            <td>
                                <div class="form-group">
                                    <div class="choose_file">
                                        <span><img href="#" alt="couverture image"></i></span>
                                        <input name="image_document" type="file" accept="image/*" />
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur" name = "genre_nom">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Categorie</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur" name = "categorie_nom">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Empruntable</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur" name="emprunrable_document">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur" value="description_document" value="descriptiom document">
                                </div>
                            </td>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <div class="table-responsive">
                <table class="table table-bordered table_info">
                    <tbody>
                        <tr>
                            <th>Nom de l'auteur</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur" name="ahteur->nom">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Prenom de l'auteur</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            <div class="table-responsive">
                <table class="table table-bordered table_info">
                    <tbody>
                        <tr>
                            <th>Nom de l'editeur</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Prenom de l'editeur</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
        <div class="flex_div_center">
            <a href="#"><button type="submit" class="btn_style flex_div_center_item">Valider</button></a> {{-- afficher si value=("Non_payes") --}}
            <a href="#"><button type="button" class="btn_style btn_annuler  flex_div_center_item">Reinitiliser</button></a> {{-- actualise juste la page --}}
            <a href="#"><button type="button" class="btn_style btn_rouge flex_div_center_item">Supprimer</button></a>
        </div>
    </form>
</div>
@endsection