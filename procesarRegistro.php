<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<form method="POST" action="procesarRegistro.php">

<?php
include("conexionBD.php");
$POSTnombre=$_POST['nombre'];
$POSTapellido=$_POST['apellido'];
$POSTcorreo=$_POST['correo'];
$POSTpassword=$_POST['password'];

$query = "INSERT INTO datos(nombre, apellido, correo, password) VALUES (nombre, apellido, correo, password)";
$result = mysqli_query($connection, $query);

if($result){
?>
<div class="div-regular">
    <h4>Sesión iniciada</h4>
    <p>Esta es la página inicial</p>
</div>

<?php } ?>
</form>
</body>
</html>