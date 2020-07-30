<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand text-white" href="/movies"><i class="fa fa-film"></i><b> Movie DB</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle text-white" href="/movies" id="peliculasDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Películas
                </a>
                <div class="dropdown-menu" aria-labelledby="peliculasDropdown">
                    <a class="dropdown-item" href="/movies">Populares</a>
                    <a class="dropdown-item" href="#">Recientes</a>
                    <a class="dropdown-item" href="#">Clásicos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" id="seriesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" href="#">Series</a>
                <div class="dropdown-menu" aria-labelledby="seriesDropdown">
                    <a class="dropdown-item" href="#">Populares</a>
                    <a class="dropdown-item" href="#">Recientes</a>
                    <a class="dropdown-item" href="#">Clásicos</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Búscar">
            <button class="btn btn-light my-2 my-sm-2" type="submit"><i class="fa fa-search"
                    aria-hidden="true"></i> Buscar</button>
        </form>
    </div>
</nav>
