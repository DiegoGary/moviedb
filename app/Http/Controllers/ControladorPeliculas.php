<?php

namespace App\Http\Controllers;

use App\Http\Api\ApiPeliculas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ControladorPeliculas extends Controller
{
    protected $api_peliculas;
    /**
     * Regresa la vista de todas las peliculas, haciendo una request a la
     * API de peliculas para obtener los datos
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index(Request $request)
    {
        //Lazy inicializacion
        if(!isset($this->api_peliculas)){
            $this->api_peliculas = new ApiPeliculas();
        }
        $sort_by = $request->query('sort_by');
        $peliculas = $this->api_peliculas->getPeliculas(1,$sort_by);
        return view('movies',[
            'peliculas'=> $peliculas,
            'sort_by'=>$sort_by,
        ]);
    }


    /**
     * Despliega la vista de detalles de una pelicula.
     *
     * @param  int  $id el id de la pelicula
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!isset($this->api_peliculas)){
            $this->api_peliculas = new ApiPeliculas();
        }
        $pelicula = $this->api_peliculas->getPelicula($id);
        return view('movie',[
            'pelicula' => $pelicula
        ]);
    }

}
