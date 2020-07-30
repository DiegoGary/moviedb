@extends('layout.main')
@section('content')
    <section class="text-left">
        <div class="container px-0 py-3 ml-5">
            <h2>Películas Populares</h2>
        </div>
        <div class="container px-3">
            <div class="row">
                <div class="col-2">
                    <form action="/movies" method="GET">
                        <div class="form-group">
                            <label for="sort_by">Ordenar Por:</label>
                            <select class="form-control" id="sort_by" name="sort_by">
                                <option value="popularity.desc">Popularidad Descendiente</option>
                                <option value="popularity.asc">Popularidad Ascendente</option>
                                <option value="title.asc">Titulo Ascendente</option>
                                <option value="title.desc">Titulo Descendiente</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Ordenar</button>
                    </form>
                </div>
                <div class="col-10">
                    <div class="container mt-4">
                        <div class="row">
                            @foreach($peliculas->getPeliculas() as $pelicula)
                                <div class="col-auto mb-3 px-2">
                                    <div class="card" style="width: 13rem;">
                                        <img class="card-img-top" alt=""
                                            src={{ 'https://image.tmdb.org/t/p/w300/' . $pelicula['poster_path'] }}
                                            width="200" height="300" />
                                        <div class=" h-100 card-body">
                                            <h6 class="card-title">{{ $pelicula['titulo'] }}</h6>
                                            <h7 class="card-subtitle mb-2 text-muted">{{ $pelicula['fecha'] }}</h7>
                                            <a href={{ 'movies/' . $pelicula['id'] }} class="stretched-link"></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script>
            window.onload = (event) => {
                var urlParams = new URLSearchParams(window.location.search);

                console.log(urlParams.has('post')); // true
                if(urlParams.has("sort_by")){
                    let dropdown = document.getElementById("sort_by");
                    dropdown.value = urlParams.get('sort_by');
                }
            };

        </script>
    </section>
@endsection
