<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{

	public function getIndex(){
		$arrayPeliculas = Movie::all();

		return view('catalog.index', array('arrayPeliculas'=>$arrayPeliculas));
	}

	public function getShow($id){
		$pelicula = Movie::find($id);

		return view('catalog.show', array('pelicula'=>$pelicula));
	}

	public function getCreate(){

		return view('catalog.create');
	}

	public function getEdit($id){
		$pelicula = Movie::find($id);

		return view('catalog.edit', array('pelicula'=>$pelicula));
	}

	public function update(Request $request, $id){
		$pelicula = Movie::find($id);
		$pelicula->title = $request->input('title');
		$pelicula->year = $request->input('year');
		$pelicula->director = $request->input('director');
		$pelicula->poster = $request->input('poster');
		$pelicula->synopsis = $request->input('synopsis');
		$pelicula->save();

		return view('catalog.show', array('pelicula'=>$pelicula));
	}

	public function rented($id){
		$pelicula = Movie::find($id);

		if ($pelicula->rented == 0) {
			$pelicula->rented = 1;
		}else{
			$pelicula->rented = 0;
		}
		$pelicula->save();

		return view('catalog.show', array('pelicula'=>$pelicula));
	}
	
}
