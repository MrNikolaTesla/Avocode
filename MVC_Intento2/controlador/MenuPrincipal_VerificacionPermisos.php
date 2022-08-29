<?php
session_start(); 
$permiso = $_SESSION['tipo'];

if($permiso == "cliente"){
   echo "<li style='float:left'><a href=''>Opcion1Nav</a></li>";
   echo "<li style='float:left'><a href=''>Opcion2Nav</a></li>";
   echo "<li style='float:left'><a href=''>Opcion2Nav</a></li>";
   echo "<li style='float:left'><a href=''>Opcion2Nav</a></li>";
}else if ($permiso == "empleado"){

}else{
    echo "<li style='float:left'><a href=''GestionDeUsuarios.php'>Gestor de Usuarios</a></li>";
    echo "<li style='float:left'><a href=''>Opcion2Nav</a></li>";
    echo "<li style='float:left'><a href=''>Opcion2Nav</a></li>";
    echo "<li style='float:left'><a href=''>Opcion2Nav</a></li>";
}

?>