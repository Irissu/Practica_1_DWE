<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edición de películas</title>
</head>

<body>
    <div class="container">
        <h1>Edición de películas</h1>
		 <!-- INCLUIR CÓDIGO PHP -->
        
            <form action="peliculas_edicion.php" method="GET">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="<?php echo htmlspecialchars($_GET["titulo"]) ?>">
                </div>
                <div class="form-group">
                    <label for="anyo">Año</label>
                    <input type="text" class="form-control" id="anyo" name="anyo" placeholder="<?php echo htmlspecialchars($_GET["anyo"]) ?>">
                </div>
                <div class="form-group">
                    <label for="duracion">Duración</label>
                    <input type="text" class="form-control" id="duracion" name="duracion" placeholder="<?php echo htmlspecialchars($_GET["duracion"]) ?>">
                </div>
                <input type="submit" value="Guardar" class="btn btn-primary"></input>
            </form>


    </div>

</body>

</html>