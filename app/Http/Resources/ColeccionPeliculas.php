<?php

namespace App\Http\Resources;

/**
 * Esta clase es una coleccion de peliculas para hacer el manejo de datos mas sencillo
 */
class ColeccionPeliculas
{
    /**
     * Array interno para guardar las peliculas. Especificamente es un arreglo de Peliculas
     */
    protected $peliculas;

    /**
     * Constructor
     *
     * @param $results toma como argumento el arreglo de resultados de ApiPeliculas,
     * para todas las peliculas mapea un recurso Pelicula
     */
    function __construct($results)
    {
        $peliculas = [];
        $i=0;
        foreach($results as $result ){
            $peliculas[$i] = Pelicula::make($results[$i])->resolve();
            $i++;
        }
        $this->peliculas = $peliculas;
    }

    /**
     * Regresa las peliculas contenidas en esta coleccion
     * @return peliculas un arreglo de peliculas
     */
    function getPeliculas(){
        return $this->peliculas;
    }
}
