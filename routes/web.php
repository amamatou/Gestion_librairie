<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\VolumeController;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\BandeDessinneeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/','TemplateController@index');


Route::post('/document/livre/ajouter',[LivreController::class,"store"])->name("livre.store");
Route::get('/document/livre/creer',[LivreController::class,"create"])->name("livre.create");
Route::post('/document/bd/ajouter',[BandeDessinneeController::class,"store"])->name("bd.store");
// Route::post('/document/bd/edit/exmplaire',[BandeDessinneeController::class,"editExemplaire"])->name("bd.edit.exemplaire");
Route::get('/document/bd/creer',[BandeDessinneeController::class,"create"])->name("bd.create");
Route::get('/document/gestion',[VolumeController::class,"gestion"])->name("doc.gestion");
Route::get('/document/gestion/editExemplaire/{volume}',[VolumeController::class,"editExemplaire"])->name("doc.gestion.exemplaire.edit");
Route::post('/document/gestion/ajoutExemplaire/{volume}',[VolumeController::class,"ajoutExemplaire"])->name("doc.gestion.exemplaire.ajout");
Route::get('/document/modifier',[VolumeController::class,"modif"])->name("doc.modif");
Route::delete('/document/delete/{volume}',[VolumeController::class,"delete"])->name("doc.delete");

Route::post('/catalogue/search',[CatalogueController::class,"Search"])->name("catalogue.search");
Route::get('/catalogue/get',[CatalogueController::class,"getCatalogue"])->name("catalogue.get");
Route::get('/catalogue/get/{volume}',[CatalogueController::class,"catalogueItem"])->name("catalogue.item.show");

Route::post('/emprunt/ajouter',[EmpruntController::class,"emprunter"])->name("emprunt.ajouter");
Route::get('/emprunt/get',[EmpruntController::class,"create"])->name("emprunt.get");
//
Route::get('/emprunt/gestion',[EmpruntController::class,"empruntAbonne"])->name("emprunt.gestion");
Route::get('/emprunt/rendre/{emprunt}',[EmpruntController::class,"rendre"])->name("emprunt.rendre");
Route::get('/emprunt/mesEmprunts',[EmpruntController::class,"mesEmprunts"])->name("emprunt.mesEmprunts");

// Route::get('/emprunt/gestion',[EmpruntController::class,"gestionEmprunt"])->name("emprunt.gestion.get");

// Route::get('/catalogue/get/{volume}',[CatalogueController::class,"catalogueItem"])->name("catalogue.item.show");

// Authentification
Auth::routes();
//FinAuthentification

//Assistant
Route::get('/assistantCreate', [App\Http\Controllers\AssistantController::class, 'create'])->name('assistant.create');
Route::post('/assistantStore', [App\Http\Controllers\AssistantController::class, 'store'])->name('assistant.store');
Route::get('/assistantIndex', [App\Http\Controllers\AssistantController::class, 'index'])->name('assistant.index');
Route::get('/assistantShow/{assistant}', [App\Http\Controllers\AssistantController::class, 'show'])->name('assistant.show');
Route::get('/assistantEdit/{assistant}', [App\Http\Controllers\AssistantController::class, 'edit'])->name('assistant.edit');
Route::get('/assistantDelete/{assistant}', [App\Http\Controllers\AssistantController::class, 'delete'])->name('assistant.delete');
Route::put('/assistantUpdate/{assistant}', [App\Http\Controllers\AssistantController::class, 'update'])->name('assistant.update');
//FinAssistant


//Actualité
Route::get('/actualiteCreate', [App\Http\Controllers\ActualiteController::class, 'create'])->name('actualite.create');
Route::post('/actualiteStore', [App\Http\Controllers\ActualiteController::class, 'store'])->name('actualite.store');
Route::get('/actualiteIndex', [App\Http\Controllers\ActualiteController::class, 'index'])->name('actualite.index');
//FinActualité

//ABONNE
Route::get('/abonneIndex', [App\Http\Controllers\AbonneController::class, 'index'])->name('abonne.index');
Route::get('/abonneCreate', [App\Http\Controllers\AbonneController::class, 'create'])->name('abonne.create');
Route::post('/abonneStore', [App\Http\Controllers\AbonneController::class, 'store'])->name('abonne.store');
Route::get('/abonneDelete/{abonne}', [App\Http\Controllers\AbonneController::class, 'delete'])->name('abonne.delete');
Route::get('/abonneEdit/{abonne}', [App\Http\Controllers\AbonneController::class, 'edit'])->name('abonne.edit');
Route::put('/abonneUpdate/{abonne}', [App\Http\Controllers\AbonneController::class, 'update'])->name('abonne.update');
Route::get('/abonneShow/{abonne}', [App\Http\Controllers\AbonneController::class, 'show'])->name('abonne.show');
Route::get('/abonneNayantPasPaye', [App\Http\Controllers\AbonneController::class, 'abonneNonPaye'])->name('abonne.abonneNonPaye');
Route::get('/abonneQuiOntPaye', [App\Http\Controllers\AbonneController::class, 'abonnePaye'])->name('abonne.abonnePaye');
Route::get('/abonnepayer/{abonne}', [App\Http\Controllers\AbonneController::class, 'payer'])->name('abonne.paye');
Route::get('/mesInformations/{abonne}', [App\Http\Controllers\AbonneController::class, 'payer'])->name('abonne.paye');
//FinAbonne

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

