<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{

    public function __construct()
    {
      $this->peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
        ];
    }

    public function buscarPeliculasId($id)
    {
      // $peliculas = [
      //   1 => "Toy Story",
      //   2 => "Buscando a Nemo",
      //   3 => "Avatar",
      //   4 => "Star Wars: Episodio V",
      //   5 => "Up",
      //   6 => "Mary and Max"
      //   ];

        if (isset($this->peliculas[$id])){
        return $this->peliculas[$id];
      }
      return response('No hay nada',404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscarPeliculaNombre($nombre)
    {
      $resultados = [];


      foreach ($this->peliculas as $pelicula) {
        if (stripos($pelicula,$nombre) !== false){
            $resultados[] = $pelicula;
        }
      }
        if (empty($resultados)){
          return response('no existe',404);
        }
        return response($resultados);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
