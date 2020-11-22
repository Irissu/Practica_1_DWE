<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <style>
    .card {
        width: 23%;
        margin-right: 20px;
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <!-- Menu -->
    <div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
        <a href="./index.html" class="btn btn-primary">Inicio</a>&nbsp;&nbsp;
    </div>
     <!-- Contenido -->
    <div class="container">
        <div class="row mx-auto">
            
            <!-- INCLUIR CÓDIGO PHP -->
            <?php
                $linea = 0;
                //Abrimos nuestro archivo
                $archivo = fopen("bbdd/peliculas.csv", "r");
                //Lo recorremos
                while (($datos = fgetcsv($archivo, ",")) == true) 
                {
                    $linea++;
                    echo '<div class="card">';
                    echo '<a href="peliculas_ficha.php">';
                    echo '<img class="card-img-top" src="imgs/peliculas/'.$datos[0].'.jpg" alt="'.$datos[1].'">';
                    echo '</a>';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">'. $datos[1].'</h5>';
                    echo '<a style="margin-right:10px" href="peliculas_form.php?titulo='.$datos[1].'&anyo='.$datos[2].'&duracion='.$datos[3].'" class="btn btn-primary">Editar</a>';
                    echo '<a href="peliculas_borrado.php" class="btn btn-danger">Borrar</a>';
                    echo '</div>';
                    echo '</div>';
                }
                //Cerramos el archivo
                fclose($archivo);
            ?>
            
        </div>
    </div>
</body>

</html>