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

foreach($matrizAlumnos as $registro){

    //echo $registro['matricula'] . " - " . $registro['nombre']. " <br> " ;
}
?>
<h3 class="text-center">Tabla de alumnos</h3>
<table class="table table-striped">
<thead>
    <tr>
        <th scope="col">Matricula</th> 
        <th scope="col">Nombre</th> 
        <th scope="col">Apellido</th> 
        <th scope="col">Edad</th> 
        <th scope="col">Nota</th> 
        <th scope="col"></th>
    <tr>
</thead>
    <tbody>
<?php foreach($matrizAlumnos as $alumno): ?>
    <tr>
        <th scope="row"><?php echo $alumno['matricula']?></th>
        <td><?php echo $alumno['nombre']?></td>
        <td><?php echo $alumno['apellido']?></td>
        <td><?php echo $alumno['edad']?></td>
        <td><?php echo $alumno['nota']?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>

</html>