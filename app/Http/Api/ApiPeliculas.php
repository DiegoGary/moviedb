<?php

namespace App\Http\Api;

use App\Http\Resources\Pelicula;
use App\Http\Resources\ColeccionPeliculas;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use function PHPSTORM_META\map;
/**
 * Esta clase realiza las llamadas a la API the tmdb para obtener los resultados
 */
class ApiPeliculas {
    protected $url_populares =
    'https://api.themoviedb.org/3/discover/movie';
    protected $idioma = "es";
    protected $peliculas_por_pagina=20;
    protected $client;
    protected $url_pelicula =
    'https://api.themoviedb.org/3/movie/';

    /**
     * Constructor, toma la llave de la API desde el archivo de .env
     */
    function __construct()
    {
        $this->api_key = config('services.tmdb.api_key');
    }

    /**
     * Regresa las peliculas de la API
     *
     * @param [integer] $pagina la pagina (en este caso solo estamos usando las primeras 20, pero para el futuro)
     * @param string $sort el parametro para ordenar los resultados (posibles valores son: popularity.desc, popularty.asc, title.asc, title.desc)
     * @return ColeccionPeliculas la coleccion de Peliculas
     */
    public function getPeliculas($pagina,$sort="popularity.desc"){
        if(!isset($this->client)){
            $this->client = new Client();
        }
        $query = ['api_key'=>$this->api_key,
            'language'=>$this->idioma,
            'page'=>$pagina,
            'size'=>$this->peliculas_por_pagina,
            'sort_by'=>$sort,
        ];
        //Obtener la respuesta del GET a la tmdb
        $respuesta = $this->client->request('GET',$this->url_populares,['query'=>$query]);
        $data = json_decode((string)$respuesta->getBody ()->getContents(),true);
        //Regresa la coleccion de peliculas
        return new ColeccionPeliculas($data["results"]);
    }

    /**
     * Obtiene la pelicula con el ID especificado
     *
     * @param [integer] $id the ID de la pelicula
     * @return Pelicula el objecto de las peliculas
     */
    public function getPelicula($id){
        if(!isset($this->client)){
            $this->client = new Client();
        }
        $query = ['api_key'=>$this->api_key,
            'language'=>$this->idioma,
        ];
        $respuesta = $this->client->request('GET',$this->url_pelicula . $id,['query'=>$query]);
        $data = json_decode((string)$respuesta->getBody()->getContents(),true);
        return Pelicula::make($data)->resolve();

    }
}
