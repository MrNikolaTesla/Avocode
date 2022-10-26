<?php
class Mesa
{
    private $con;
    private $mesa;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = conectar::conexion();
    }

    public function set_mesa()
    {
        $sql = "INSERT INTO mesa (estado) VALUES ('Libre')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function listar_mesas()
    {

        $sql = "SELECT * FROM mesa ORDER BY id_mesa";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->mesa[] = $filas;
        }

        return $this->mesa;
    }

    public function eliminar_mesa ($id) {
        //ESTO TENDRIA QUE ESTAR LLAMANDO A OTRO MODELO//
        $sql1 = "UPDATE orden set mesa_orden=null WHERE mesa_orden = $id";
        mysqli_query($this->con, $sql1);
        $sql2 = "UPDATE reserva set mesa=null WHERE mesa = $id";
        mysqli_query($this->con, $sql2);
        //////////////////////////////////////////////

        $sql3 = "DELETE FROM mesa WHERE id_mesa = $id";
        $query = mysqli_query($this->con, $sql3);
        //Impedir vacio numerico
        $m = $this->listar_mesas();
        $numero_listado = 1;
        foreach($m as $mesa){
        if($numero_listado == $mesa['id_mesa']){
            //Vacio Existencial
        }else{
            $original_id = $mesa['id_mesa'];
            $idupdate = "UPDATE mesa set id_mesa = '$numero_listado' WHERE id_mesa = $original_id";
            mysqli_query($this->con,$idupdate);
        }
        $numero_listado = $numero_listado + 1;
        }
        return $query;
    }

    public function update_mesa ($id) {
        $estado_original = "SELECT * FROM mesa WHERE id_mesa = '$id'";
        $origin_state = mysqli_query($this->con,$estado_original);
        foreach($origin_state as $origin){
        if($origin['estado']=="Libre"){
            $nuevo_estado = 'Ocupada';
        }else if($origin['estado']=="Ocupada"){
            $nuevo_estado = 'Reservada';
        }else{
            $nuevo_estado = 'Libre';
        }
        $sql = "UPDATE mesa set estado = '$nuevo_estado' WHERE id_mesa = $id";
        $query = mysqli_query($this->con,$sql);
        return $query;
        }
    }

    public function set_estado_mesa ($id,$estado) {
        $sql = "UPDATE mesa set estado = '$estado' WHERE id_mesa = $id";
        $query = mysqli_query($this->con,$sql);
        return $query;
    }
}

?>