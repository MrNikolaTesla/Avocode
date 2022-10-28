<?php
class Orden
{
    private $con;
    private $orden;
    private $detalles_orden;

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
        $sql = "INSERT INTO detalles_orden(orden, producto_det, cantidad_producto) VALUES
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

    public function eliminar_orden_incompleta($orden_cargada)
    {
        $eliminar_detalles = "DELETE FROM detalles_orden WHERE orden = $orden_cargada";
        mysqli_query($this->con, $eliminar_detalles);
        $sql = "DELETE FROM orden WHERE id_orden = $orden_cargada AND estado_orden = 'Generandose...'";
        $_SESSION['orden_iniciada'] = "false";
        $_SESSION['id_orden_actual'] = null;
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function update_orden_avanzar($id_orden)
    {
        $estado_original = "SELECT * FROM orden WHERE id_orden = '$id_orden'";
        $origin_state = mysqli_query($this->con, $estado_original);
        foreach ($origin_state as $origin) {
            if ($origin['estado_orden'] == "Generandose...") {
                $estado=3;
                return $estado;
            } else if ($origin['estado_orden'] == "Pendiente") {
                $nuevo_estado = 'En Proceso';
            }else if ($origin['estado_orden'] == "En Proceso") {
                $nuevo_estado = 'Completada';
            }else if ($origin['estado_orden'] == "Completada") {
                $estado=2;
                return $estado;
            }else{
                $estado=0;
                return $estado;
            }
        }
        if($estado != 0 || $estado != 2 || $estado != 3){
        $sql = "UPDATE orden set estado_orden = '$nuevo_estado' WHERE id_orden = $id_orden";
            $query = mysqli_query($this->con, $sql);
            return $query;
        }
    }

    public function update_orden_local($id, $mesa_orden, $tipo_orden, $observacion, $estado_orden)
    {
        $sql = "UPDATE orden set mesa_orden = '$mesa_orden', tipo_orden  = '$tipo_orden'
        , observacion = '$observacion', estado_orden = '$estado_orden'
        WHERE id_orden = $id";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function nombre_cliente($id_cliente)
    {
        $sql = "SELECT nombre FROM usuario
        WHERE $id_cliente = id_usuario";
        $query = mysqli_query($this->con, $sql);
        $resultado = mysqli_fetch_array($query);
        return $resultado;
    }

    public function nombre_empleado($id_empleado)
    {
        $sql = "SELECT nombre FROM usuario
        WHERE $id_empleado = id_usuario";
        $query = mysqli_query($this->con, $sql);
        $resultado = mysqli_fetch_array($query);
        return $resultado;
    }

    public function update_orden_delivery($id, $direccion, $tipo_orden, $observacion, $estado_orden)
    {
        $sql = "UPDATE orden set direccion = '$direccion', tipo_orden  = '$tipo_orden'
        , observacion = '$observacion', estado_orden = '$estado_orden'
        WHERE id_orden = $id";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function update_orden_takeaway($id, $hora, $fecha, $tipo_orden, $observacion, $estado_orden)
    {
        $sql = "UPDATE orden set hora = '$hora', fecha = '$fecha', tipo_orden  = '$tipo_orden'
        , observacion = '$observacion', estado_orden = '$estado_orden'
        WHERE id_orden = $id";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function listar_productos_orden($id_orden)
    {
        $sql = "SELECT producto.id_producto as id_producto, detalles_orden.id_detalle_orden as identificador_detalle,
        producto.nombre as nombre,
        detalles_orden.cantidad_producto as cantidad,
        producto.precio as precio_linea, producto.precio*detalles_orden.cantidad_producto as total_linea 
        FROM detalles_orden , producto 
        WHERE detalles_orden.orden = $id_orden AND detalles_orden.producto_det = producto.id_producto ORDER BY id_detalle_orden";
        $result = mysqli_query($this->con, $sql);
        while ($filas = mysqli_fetch_array($result)) {
            $this->detalles_orden[] = $filas;
        }
        return $this->detalles_orden;
    }

    public function eliminar_linea_orden($orden_cargada, $id)
    {
        $sql = "DELETE FROM detalles_orden WHERE orden = $orden_cargada AND id_detalle_orden = $id";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function eliminar_orden($id)
    {
        $sql1 = $this->null_detalles_orden($id);

        $sql = "DELETE FROM orden WHERE id_orden = $id";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function null_orden_detalles_orden($id)
    {
        $sql1 = "UPDATE detalles_orden set orden=null WHERE orden = $id";
        mysqli_query($this->con, $sql1);
    }

    public function null_producto_detalles_orden($id)
    {
        $sql1 = "UPDATE detalles_orden set producto_det=null WHERE producto_det = $id";
        mysqli_query($this->con, $sql1);
    }

    public function null_mesas($id)
    {
        $sql1 = "UPDATE orden set mesa_orden=null WHERE mesa_orden = $id";
        mysqli_query($this->con, $sql1);
    }

    public function null_usuario($id)
    {
        $sql1 = "UPDATE orden set cliente_orden=null WHERE cliente_orden = $id";
        mysqli_query($this->con, $sql1);
    }

    public function null_cliente($id)
    {
        $sql1 = "UPDATE orden set empleado_orden=null WHERE empleado_orden = $id";
        mysqli_query($this->con, $sql1);
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

    public function listar_datos_de_orden($orden_cargada)
    {
        $sql = "SELECT *
        FROM orden WHERE id_orden = $orden_cargada";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
}

?>