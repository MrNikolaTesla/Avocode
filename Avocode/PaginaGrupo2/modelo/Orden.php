<?php
class Orden
{
    private $con;
    private $orden;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function creando_orden($id_cliente)
    {
        $busqueda_de_id = "SELECT max(id_orden) from orden";
        $mayor_id = mysqli_query($this->con, $busqueda_de_id);
        $resultado = mysqli_fetch_array($mayor_id);
        $bucle = true;
        foreach($resultado as $mayor_id_orden){
        if($bucle == true){
        $id_nueva_orden = $mayor_id_orden + 1;
        $bucle = false;
        }
        }
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $hora = date('h:i');
        $fecha = date('y-m-d');
        $orden_prefix = "INSERT INTO orden (id_orden, cliente_orden, empleado_orden, mesa_orden, tipo_orden, hora, direccion, fecha, observacion, estado_orden)
        VALUES ('$id_nueva_orden', '$id_cliente', null, null, null, '$hora', null, '$fecha', null, 'Generandose...')";
        $salida = mysqli_query($this->con, $orden_prefix);
        if($salida){
        $estado = 1;
        $_SESSION['orden_iniciada'] = "true";
        $_SESSION['id_orden_actual'] = $id_nueva_orden;
        return $estado;
        }else{
        $estado = 0;
        return $estado;
        }
    }

    public function crear_fila_orden($id_orden, $id_producto, $cantidad)
    {
        $sql = "INSERT INTO detalles_orden(orden, producto, cantidad_producto) VALUES
        ('$id_orden', '$id_producto', '$cantidad')";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function completar_orden()
    {
        $_SESSION['orden_iniciada'] = "false";
        $_SESSION['id_orden_actual'] = null;
    }

    public function nueva_orden($cliente, $mesa, $tipo_orden, $direccion, $observacion)
    {
        //ALTA DE ORDEN PARA USUARIO EMPLEADO/ADMINISTRADOR
        //$empleado_id = $_SESSION['id'];
        //date_default_timezone_set('America/Argentina/Buenos_Aires');
        //$hora = date('h:i');
        //$fecha = date('y-m-d');
        //$sql = "INSERT INTO orden(cliente_orden, empleado_orden, mesa_orden, tipo_orden, hora, direccion, fecha, observacion, estado_orden)
        //VALUES ('$cliente', '$empleado_id', '$mesa', '$tipo_orden', $hora, $direccion, $fecha, $observacion, 'Pendiente')";
        //$result = mysqli_query($this->con, $sql);
        //return $result;

    }

    public function update_orden($cliente_orden, $empleado_orden, $mesa_orden, $tipo_orden, $direccion, $observacion, $estado_orden)
    {
        //$hora = date('h:i');
        //$fecha = date('y-m-d');
        //$sql = "UPDATE orden set cliente_orden = '$cliente_orden', empleado_orden = '$empleado_orden', mesa_orden = '$mesa_orden', tipo_orden  = '$tipo_orden'
        //, hora  = '$hora', direccion  = '$direccion', fecha = '$fecha', observacion = 'observacion', estado_orden = '$estado_orden'
        //WHERE id_orden = $id";
        //$result = mysqli_query($this->con, $sql);
        //return $result;
        //MODIFICAR ORDEN, TAMBIEN UTILIZADO PARA REEMPLAZAR LOS DATOS DE LA ORDEN GENERANDOSE POR LOS REALES
    }

    public function listar_productos_orden()
    {
        $orden_cargada = $_SESSION['id_orden_actual'];
        $sql = "SELECT detalles_orden.producto,id_producto as identificador_producto, detalles_orden.producto,nombre as nombre_producto, detalles_orden.producto,precio as precio
        FROM [detalles_orden] , producto WHERE orden = $orden_cargada ORDER BY id_detalle_orden";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function eliminar_productos_orden($id)
    {
        $orden_cargada = $_SESSION['id_orden_actual'];
        $sql = "DELETE FROM detalles_orden WHERE orden = $orden_cargada AND id_detalle_orden = $id";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function listar_ordenes()
    {
        $sql = "SELECT *
        FROM orden ORDER BY id_orden";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->orden[] = $filas;
        }
        return $this->orden;
    }
}

?>