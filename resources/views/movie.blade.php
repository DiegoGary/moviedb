@extends('layout.main')
@section('content')
    <section class="fill-height">
        <div class="container py-4 fill-height">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="card" style="width: 13rem;">
                                    <img class="card-img-top" alt=""
                                        src={{ 'https://image.tmdb.org/t/p/w300/' . $pelicula["poster_path"] }} />
                                    <div class="card-body">
                                        <a href={{ '/movie' . $pelicula["id"] }} class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9">
                                <h2>{{ $pelicula["titulo"] ." (". $pelicula["fecha"] . ")"}}</h2>
                                <button type="button" class="btn btn-primary btn-circle">{{ $pelicula["votos"] }}</button>
                                <span>Ranking de Usuario</span>
                                <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                <button type="button" class="btn btn-primary btn-circle"><i
                                        class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-primary btn-circle"><i
                                        class="fa fa-bookmark"></i></button>
                                <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-star"></i></button>
                                <a href="#"><i class="fa fa-play ml-2" style="font-size:18px;"></i> <span class="text-dark">
                                        Ver Trailer</span></a>
                                <br><br>
                                <h6 class="text-secondary">{{ $pelicula["tagline"] }}</h6>
                                <h4 class="text-dark">Reseña</h4>
                                <p>
                                    {{ @$pelicula["resumen"] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<b></b>
