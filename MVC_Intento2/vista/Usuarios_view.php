<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=devide-width, initial-scale=1.0">

<title>Index no tan loco</title>

</head>
<body>
<?php

foreach($matrizUsuario as $registro){

    //echo $registro['matricula'] . " - " . $registro['nombre']. " <br> " ;
}
?>
<h3 class="text-center">Tabla de usuarios</h3>
<table class="table table-striped">
<thead>
    <tr>
        <th scope="col">ID</th> 
        <th scope="col">Nombre</th> 
        <th scope="col">Apellido</th> 
        <th scope="col">Tipo de Usuario</th> 
        <th scope="col">Correo</th> 
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Eliminar</th>
        <th scope="col">Editar</th>
    <tr>
</thead>
    <tbody>
<?php foreach($matrizUsuario as $usuario): ?>
    <tr>
        <th scope="row"><?php echo $usuario['id']?></th>
        <td><?php echo $usuario['nombre']?></td>
        <td><?php echo $usuario['apellido']?></td>
        <td><?php echo $usuario['tipo']?></td>
        <td><?php echo $usuario['correo']?></td>
        <td><?php echo $usuario['telefono']?></td>
        <td><?php echo $usuario['direccion']?></td>
        <td><?php echo $usuario['password']?></td>
        <td><a href="../controlador/eliminar_Usuario_controlador.php?id=<?php echo $usuario['id']?>" class="btn btn-danger"> Eliminar</a></td>
        <td>Cosas del editar</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>

</html>