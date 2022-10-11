<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de Usuario</title>
</head>

<body>
    <div class="col-xs-4">
        <form method="POST">
            <div class="search-box">
                <?php require_once("controlador/Controlador_Buscar_Usuario.php"); ?>
                <div class="input-group" type="text" name="busqueda">
                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                    <input type="text" name="usuario" class="form-control" placeholder="Buscar&hellip;">
                    <input hidden class="buttons" type="submit" name="busqueda" value="Buscar"></input>
                </div>
            </div>
    </div>
    <div><input class="button-3" type="submit" value="Reiniciar búsqueda"></input> </div>
    </div>
    </form>
    </div>
</body>

</html>