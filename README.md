# Movie DB
Prueba de programación con Laravel y PHP
## Herramientas Utilizadas
PHP 7.2
Laravel 6.2
Bootstrap 4.5
Font awesome para los íconos
## Instrucciones para correr
Antes de poder correr la aplicación, es necesario correr los siguientes comandos:

    1. composer update
    2. npm install
    3. Agregar una línea en el archivo .env con la clave de la API de TheMovieDB:
        ```API_KEY=<Clave de la API>```
    4. Correr ```php artisan serve``` en el folder raiz
## Estructura
En el folder de Resources están ubicadas las Clases de ```Pelicula``` y ```ColeccionPeliculas``` las cuales son utilizadas
por ```App\Http\Api\ApiPeliculas``` para generar los objectos desde la API. El ```ControladorPeliculas``` tiene dos rutas:
* "/movies" para la lista de peliculas
* "/movie/{id}" para ver los detalles de alguna pelicula con el ID

Hay dos vistas las cuales utilizan fragmentos. El archivo main.blade.php contiene el layout principal,
la movie.blade.php contiene el detalle de la vista de pelicula y movies.blade.php contiene la cuadricula de peliculas.

En el folder views.layout.partials se encuentran 4 archivos que componen diferentes partes del layout general para hacerlo más sencillo de mantener

