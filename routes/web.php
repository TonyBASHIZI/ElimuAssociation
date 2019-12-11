<?php

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



Route::get('/', 'welcomeController@index');
Route::get('admin', 'adminController@index');
Route::get('menu', 'menuController@index')->name('menu');
Route::get('actualite', 'actualiteController@index')->name('actualite');
Route::get('editActual/{id}', 'actualiteController@edit')->name('editActual');
Route::post('store_menu', 'menuController@update')->name('store_menu');
Route::post('store.data', 'actualiteController@store')->name('store.data');
Route::post('store.put', 'actualiteController@modifier')->name('store.put');
Route::get('deleteActual/{id}', 'actualiteController@supprimer')->name('deleteActual');
Route::get('partennaire', 'partennaireController@index')->name('partennaire');
Route::post('store.part', 'partennaireController@store')->name('store.part');
Route::get('editparte/{id}', 'partennaireController@edit')->name('editparte');
Route::post('store.in', 'partennaireController@Modifier')->name('store.in');
Route::get('projet', 'projetController@index')->name('projet');
Route::post('store.pro', 'projetController@store')->name('store.pro');
Route::get('editpro/{id}', 'projetController@edit')->name('editpro');

Route::post('proedit', 'projetController@Modifier')->name('proedit');
Route::get('deleteparte/{id}', 'partennaireController@supprimer')->name('deleteparte');
Route::get('deletepro/{id}', 'projetController@supprimer')->name('deletepro');
//membre
Route::get('membre', 'membreController@index')->name('membre');
Route::post('store_m', 'membreController@store')->name('store_m');
Route::get('editmembre/{id}', 'membreController@edit')->name('editmembre');
Route::post('store_editmember', 'membreController@Modifier')->name('store_editmember');
Route::post('store_deletemember', 'membreController@Modifier')->name('store_deletemember');
Route::get('rel', 'projetController@realise')->name('rel');
Route::get('datailActua/{id}', 'detailActualiteController@index')->name('datailActua');

Route::get('parte', 'partennaireController@parte')->name('parte');
Route::get('datailParte/{id}', 'detailParteController@index')->name('datailParte');

Route::get('datailProjet/{id}', 'projetController@detailProjet')->name('datailProjet');

Route::get('nous', 'sommenousController@index')->name('nous');
Route::get('membres', 'sommenousController@membre')->name('membres');
Route::get('statut', 'sommenousController@statut')->name('statut');
Route::get('reglement', 'sommenousController@reglement')->name('reglement');

Route::get('adhesion', 'adhesionController@index')->name('adhesion');
Route::post('adhesion', 'adhesionController@store')->name('adhesion.store');


Route::post('store_don', 'donController@store')->name('store_don');

Auth::routes();

Route::get('/register', function(){
    abort('404');
});
Route::get('/steph', function(){
    view('auth/register');
});
// Route::get('/home', 'HomeController@index')->name('home');




Route::get('contacter', 'gpsController@index')->name('contacter');

 Route::get('adherer', 'adhererController@index')->name('adherer');
 Route::get('n', 'sommenousController@edit')->name('n');
 Route::post('store_nous', 'sommenousController@update')->name('store_nous');

 Route::get('etu', 'etudiantController@index')->name('etu');
 Route::post('store_etu', 'etudiantController@store')->name('store_etu');

 Route::get('editEtu/{id}', 'etudiantController@edit')->name('editEtu');
 Route::post('store_editEtu', 'etudiantController@update')->name('store_editEtu');
 Route::get('deleteEtu/{id}', 'etudiantController@supprimer')->name('deleteEtu');

 Route::get('alletu', 'etudiantController@getTOUT')->name('alletu');

 Route::get('contact', 'contactController@index')->name('contact');
 Route::post('store_logo', 'contactController@store')->name('store_logo');
 
 Route::get('cour', 'projetController@cours')->name('cour');
 Route::get('venir', 'projetController@Avenir')->name('venir');

Route::get('nume', 'numeroController@index')->name('nume');
Route::get('store_nume', 'numeroController@store')->name('store_nume');
