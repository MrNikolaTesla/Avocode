<?php

require_once("modelo/Alumnos_modelo.php");

$productos = new Alumnos_modelo();

$matrizAlumnos = $productos->get_alumnos();

require_once("vista/Alumnos_view.php");

?>