<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

  Route::resources([
        'btis' => 'AjouterpiecesController',
    ]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('listepiece', 'AjouterpiecesController@create')->name('home');
Route::get('/home', 'HomeController@index');
Route::post('savepieces', 'HomeController@store');


Route::get('piece/create', 'HomeController@create');
Route::get('entree/retour', 'HomeController@createretour');
Route::get('piece/{id}/edit', 'HomeController@edit');
Route::get('barcode/{id}/', 'HomeController@barcode');
Route::put('piece/{id}', 'HomeController@update');
Route::delete('piece/{id}', 'HomeController@destory');


Route::get('/vers-chantier-ou-harbil', 'AjoutersortieController@index');

Route::get('/vers-vente', 'AjoutersortieController@vente');

Route::get('/vers-reparation', 'AjoutersortieController@sortiereparation');
Route::get('/retour-non-conformite', 'AjoutersortieController@conformite');


Route::get('/sortieprint', 'AjoutersortieController@sortieprint');

Route::get('/newAjouterpieces', 'AjouterpiecesController@Store');

Route::get('/listebl', 'AjouterpiecesController@listePieces');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/print-pdf/{id}','HomeController@printPDF');
Route::post('savesortie', 'AjoutersortieController@newAjoutersortie');
Route::get('valideBtinetrene/{id}/', 'AjoutersortieController@valideBtinetrene');


Route::get('addpieces', 'AjouterpiecesController@index');
Route::get('addpieces/{id}', 'AjouterpiecesController@edit');

Route::get('inventaires', 'AjouterpiecesController@inventaires');
Route::get('inventaires_initial', 'AjouterpiecesController@inventaires_initial');
Route::get('inventaires_final', 'AjouterpiecesController@inventaires_final');
Route::post('addpiecesc', 'AjouterpiecesController@addpiecec');
Route::post('inventaire_actuel', 'AjouterpiecesController@inventaire_actuel');


Route::get('/print-sortie/{id}','AjoutersortieController@printPDF');
Route::get('/bontransfertinternt', 'AjoutersortieController@btintern');
Route::get('/newBtinetrene', 'AjoutersortieController@newBtinetrene');
/* Ajax URL*/


Route::post('/getmsg','AjaxController@index');
Route::post('/ajouterbla','AjaxController@ajouterbla');
Route::post('/getsfamille','AjaxController@getsfamille');
Route::post('/ajaxinventaire','AjaxController@ajaxinventaire');
Route::post('/ajaxinventairef','AjaxController@ajaxinventairef');
Route::post('/ajaxinventairesf','AjaxController@ajaxinventairesf');
Route::post('/detailbti','AjaxController@detailbti');

/* Fin Ajax URL*/

/* Famille and sous Famille*/

Route::get('addfamille', 'FamilleController@index');
Route::get('addsousfamille', 'SousFamilleController@index');
Route::post('/newFamille', 'FamilleController@newFamille');
Route::post('addsfamille', 'SousFamilleController@addsfamille');
Route::get('listefamille', 'SousFamilleController@listeFamille');
/* Fin Famille and sous Famille*/