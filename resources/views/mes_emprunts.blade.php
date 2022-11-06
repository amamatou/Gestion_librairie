@extends('layout.mainlayout')

@section('content')
    <div class="container">
        <h2>Mes emprunts</h2>
        <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Recherche..">
    <br>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date emprunt</th>
                            <th>Date de retour</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-danger"> <!-- ligne rouge --> 
                            <td>Les roses epineuses de mon jardin</td>
                            <td>12-01-2022</td>
                            <td>12-02-2022</td>
                            <td>En retard</td>
                        </tr>
                        <tr> <!-- ligne normale --> 
                            <td>Les roses epineuses de mon jardin</td>
                            <td>12-01-2022</td>
                            <td>12-02-2022</td>
                            <td>En cours</td>
                        </tr>
                    </tbody>
                </table>
            </div>   
    </div> 
@endsection