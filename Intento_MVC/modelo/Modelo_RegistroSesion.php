<?php
include("conexionBD.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$query = "INSERT INTO datos(nombre, apellido, correo, password) VALUES ('$nombre', '$apellido', '$correo', '$contraseña')";
$result = mysqli_query($connection, $query);
if(!$result){
header("Location: ../Inicio_Fallido.php");
}else{
header("Location: ../algo.php");
}
?>
