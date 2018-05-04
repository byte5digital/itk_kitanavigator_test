<?php

namespace App\Http\Controllers;

use App\kinder_base;
use Illuminate\Http\Request;

class KinderBasisController extends Controller {
	public function getAllKinder() {
		$alleKinder = kinder_base::all();

		return View( 'kinder.listview_kind', [ 'data' => $alleKinder ] );
	}

	public function getKindById( int $id, Request $request ) {
		$aktuellesKind = kinder_base::whereId( $id )->first();
		if ( $aktuellesKind instanceof kinder_base ) {
			return View( 'kinder.detail_kind', [ 'data' => $aktuellesKind ] );
		}

		return View( 'welcome' );
	}

	public function createKind( Request $request ) {
		$kind = new kinder_base( $request->input() );
		$kind->save();
		return self::showListView();
	}

	protected static function showListView() {
		$data = kinder_base::all();
		return View( 'kinder.listview_kind', [ 'data' => $data ] );
	}

	public function showInsertKind( Request $request ) {
		return View( 'kinder.new_kind' );
	}

	public function updateKind( Request $request ) {
		$aktuellesKind = kinder_base::whereId( $request->input( 'id' ) )->first();
		//$aktuellesKind->update($request->input());
		$aktuellesKind->vorname = $request->input( 'vorname' );
		$aktuellesKind->save();
		return self::showListView();
	}

	public function deleteKind(int $id, Request $request ) {
		$aktuellesKind = kinder_base::whereId( $id )->first();
		$aktuellesKind->delete();
		return self::showListView();
	}
}
