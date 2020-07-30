<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pelicula extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource['id'],
            'titulo' => $this->resource['title'],
            'poster_path' => $this->resource['poster_path'],
            'votos' => $this->resource['vote_average'],
            'resumen' => $this->resource['overview'],
            'fecha' => $this->resource['release_date'],
            'popularidad' => $this->resource['popularity'],
            'tagline' => isset($this->resource['tagline']) ? $this->resource['tagline'] : "",
        ];
    }
}
