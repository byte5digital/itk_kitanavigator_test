<?php

namespace App\Http\Controllers;

use App\kita_basis;
use Illuminate\Http\Request;


class KitaBasisController extends Controller {
	public function showHomepage() {
		$counter = array();
		for ($i = 1; $i<11; $i++){
			array_push($counter, $i);
		}
		return View( 'welcome', ['ueberschrift' => 'ITK_RHEINLAND', 'counter' => $counter] );
	}

	public function showInsertForm(){
		return View('newKita');
	}

	public function showAllKitas(){
		$alleKitas = kita_basis::all();
		return View('listview', ['data' => $alleKitas]);
	}

	public function showDetail(int $id, Request $request){
		$aktuelleKite = kita_basis::whereId($id)->first();
		return View('detail', ['data'=>$aktuelleKite]);
	}

	public function insert(Request $request){
		$aktuelleKita = new kita_basis($request->input());
		$aktuelleKita->postleitzahl = $request->input('postleitzahl');
		$aktuelleKita->save();
		return View('welcome', ['ueberschrift' => "ERFOLG"]);
	}

}
