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



Route::get('/', 'KitaBasisController@showHomepage')->name('kita.start');


/** KITA ROUTES */
Route::prefix('kita')->group(function () {
	Route::get( '/kita_insert', 'KitaBasisController@showInsertForm' )->name( 'kita.create' );
	Route::get( '/kita_list', 'KitaBasisController@showAllKitas' )->name( 'kita.list' );
	Route::get( '/kita_detail/{id}', 'KitaBasisController@showDetail' )->name( 'kita.details' );
	Route::post( '/kita_insert_post', 'KitaBasisController@insert' )->name( 'kita.post' );
});

/** KINDER ROUTES  */
Route::prefix('kind')->group(function () {
	Route::get( '/kinder_insert', 'KinderBasisController@showInsertKind' )->name( 'kind.create' );
	Route::get( '/kinder_list', 'KinderBasisController@getAllKinder' )->name( 'kind.list' );
	Route::get( '/kinder_detail/{id}', 'KinderBasisController@getKindById' )->name( 'kind.details' );
	Route::post( '/kinder_insert_post', 'KinderBasisController@createKind' )->name( 'kind.post' );
	Route::post( '/kinder_update_post', 'KinderBasisController@updateKind' )->name( 'kind.update' );
	Route::get( '/kinder_delete/{id}', 'KinderBasisController@deleteKind' )->name( 'kind.delete' );
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
