<?php
class ConsultasMMK
{
    private $con;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

//Empleados 

//Listar todos los empleados y la categoría/ tipo a la que pertenece.


//Productos 

//listar todos los productos y la categoría a la que pertenece.

//mostrar los 5 productos más caros y la categoría a la que pertenece 

//para cada categoría de productos mostrar  la información de producto mas caro.

//para cada categoría de productos mostrar  la información de los 5 productos más baratos .

//Pedidos para delivery 

//listar el nombre del cliente que más pedidos para delivery realizó , junto con la cantidad.

//para cada repartidor , indicar cuantas entregas ha realizado.

//dado un id (ej: 002) de reparto determinado listar los productos que le corresponden 

//Reservas

///listar las reservas ordenadas por fecha y mostrar  el nombre del cliente que la realizó.

//listar las reservas ordenadas cantidad comensales

//listar las reservas que aún no fueron realizadas (fecha posterior a hoy) 

//Órdenes 

//contar cuantas órdenes se realizan por cada día

//contar las órdenes agrupadas por  id  de mesa 

//calcular el promedio de platos por orden

//calcular el promedio de precio por orden 

//listar el detalle de platos de la orden con mayor cantidad de platos 

//dado el nombre de un plato  (ej : pizza) listar todas las ordenes que lo contienen
} ?>