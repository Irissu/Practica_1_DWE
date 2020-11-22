
<?php
// FUNCION LEER CSV Y GUARDARLO EN UN ARRAY
function leer_csv_array() {
    $archivo = fopen("bbdd/peliculas.csv", "r"); //modo de acceso r = modo lectura
        while(($datos = fgetcsv($archivo,",")) ==true ) {
            $id = $datos[0];
            $titulo = $datos[1];
            $anyo = $datos[2];
            $duracion = $datos[3];
        }
    fclose($archivo);
    }

// FUNCION PARA PASAR LOS ARRAYS OBTENIDOS AL LEER CSV A ARRAY ASOCIATIVO



// FUNCION EDITAR PELICULA (EN EL FICHERO CSV) - NO PUEDE BORRAR EL RESTO DE DATOS
function editar_pelicula($titulo,$anyo,$duracion) {


}

//BORRAR DATOS DE UNA PELICULA EN EL FICHERO CSV


//OBTENER DIRECTORES DE UNA PELICULA



//OBTENER ACTORES DE UNA PELICULA




?>