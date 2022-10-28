<?php
class Usuario
{

    private $con;
    private $usuario;

    public function __construct()
    {
        require_once("conexion.php");
        $this->con = Conectar::conexion();
        $this->usuario = array();
    }
    
    //LISTA TODOS LOS USUARIOS Y SUS DATOS
    public function listar_usuarios()
    {

        $sql = "SELECT * FROM usuario ORDER BY id_usuario";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->usuario[] = $filas;
        }

        return $this->usuario;
    }

    //SE LLEVA TODOS LOS DATOS DE UN USUARIO QUE TENGA EL MISMO CORREO QUE EL CORREO ENVIADO
    public function get_correo($correo)
    {
        $sql = "SELECT * FROM usuario WHERE correo = '$correo'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }

    //VERIFICA CORREO IDENTICO
    public function get_usuario($id, $correo)
    {
        $query = "SELECT * FROM usuario WHERE correo = '$correo'";
        $query_veri = mysqli_query($this->con, $query);
        $veri = mysqli_fetch_array($query_veri);
        if($veri){
        if($veri['id_usuario'] == $id){
            //Se puede
            $repetido = 2;
        return $repetido;
    }else{
        //Algo crasheo
        $repetido = 1;
        return $repetido;
    }
    //DIRECTAMENTE NO HAY NINGUN CORREO IDENTICO
    }else{
    $repetido = 2;
    return $repetido;
    }
    }

    public function set_usuario($nombre, $apellido, $correo, $password, $direccion, $telefono, $tipo)
    {
        $permiso = $_SESSION['tipo'];
        if($tipo == "administrador" || $tipo == "empleado" && $permiso == "empleado"){
        $estado=2;
        return $estado;
        }else{
        $sql = "INSERT INTO usuario (nombre, apellido, correo, password, direccion, telefono, tipo) VALUES ('$nombre', '$apellido', '$correo', '$password', '$direccion', '$telefono', '$tipo')";
        $query = mysqli_query($this->con, $sql);
        $estado=1;
        return $estado;
        }
    }

    public function set_cliente ($nombre, $apellido, $correo, $password) {
        $sql = "INSERT INTO usuario (nombre, apellido, correo, password) VALUES ('$nombre', '$apellido', '$correo', '$password')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function get_data($id)
    {
        $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function eliminar_usuario ($id) {
        $permiso = $_SESSION['tipo'];
        $id_personal = $_SESSION['id'];
        $verificacion = "SELECT * FROM usuario WHERE id_usuario = '$id'";
        $query_veri = mysqli_query($this->con, $verificacion);
        $tipo = mysqli_fetch_array($query_veri);
    
        if($id_personal == $id){
            $estado=2;
            return $estado;
    
            }else if($tipo['tipo'] == "administrador" || $tipo['tipo'] == "empleado" && $permiso == "empleado"){
            $estado=0;
            return $estado;
            
        }else{
            require_once("../modelo/Orden.php");
            $limpiar_usuario_ordenes = new Orden();
            require_once("../modelo/Reserva.php");
            $limpiar_usuario_reserva = new Reserva();
            $limpiar_usuario_ordenes->null_usuario($id);
            $limpiar_usuario_ordenes->null_cliente($id);
            $limpiar_usuario_reserva->null_usuario($id);
            $limpiar_usuario_reserva->null_cliente($id);
            $sql5 = "DELETE FROM usuario WHERE id_usuario = $id";
                $query = mysqli_query($this->con, $sql5);
                $estado=1;
                return $estado;
        }
    }

    public function eliminar_cuenta ($id) {
            $sql5 = "DELETE FROM usuario WHERE id_usuario = $id";
            $query = mysqli_query($this->con, $sql5);
            return $query;
    }

    public function buscar_usuarios ($nombre)
    {
        $sql = "SELECT * FROM usuario WHERE nombre LIKE '%$nombre%'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function update_usuario ($id, $nombre, $apellido, $correo, $direccion, $telefono, $tipo) {
        //Guarda el tipo de permiso y la id del usuario a modificar.
        $permiso = $_SESSION['tipo'];
        $id_personal = $_SESSION['id'];
        //Verifica que usuario estamos tratando de modificar, si somos nosotros mismos, de ser ese el caso, va a tener que dejar que un empleado modifique un empleado (Lo mismo pasa como admin) para que nos podamos modificar
        $verificacion = "SELECT * FROM usuario WHERE id_usuario = '$id'";
        $query_veri = mysqli_query($this->con, $verificacion);
        $tipo_veri = mysqli_fetch_array($query_veri);
        
        if($permiso != "administrador"){
            if($tipo_veri['tipo'] == "administrador" || $tipo_veri['tipo'] == "empleado"){
                $estado=2; //No puede modificar otras entidades a su mismo o mayor nivel
                return $estado;
            }else if($tipo_veri['tipo'] == "cliente" && $permiso == "empleado" && $tipo=="administrador" || $tipo=="empleado"){
                $estado=2; //No puede modificar otras entidades a su mismo o mayor nivel
                return $estado;
            }else{
                $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id_usuario = $id";
                $query = mysqli_query($this->con,$sql);
                $estado=1;
                return $estado;
            }
        }else{
            if($tipo_veri['tipo'] == "administrador" && $id_personal != $id){
                $estado=3;
                return $estado;
            }else{
                $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id_usuario = $id";
                $query = mysqli_query($this->con,$sql);
                $estado=1;
                return $estado;  
            }
        }
    }

        //LISTA TODOS LOS USUARIOS Y SUS DATOS
        public function listar_clientes()
        {

            $sql = "SELECT * FROM usuario WHERE tipo='cliente' ORDER BY id_usuario";
            $query = mysqli_query($this->con, $sql);

            while ($filas = mysqli_fetch_array($query)) {
                $this->usuario[] = $filas;
            }

            return $this->usuario;
   }

    public function update_perfil ($id, $nombre, $apellido, $correo, $direccion, $telefono) {
            $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', direccion = '$direccion', telefono = '$telefono' WHERE id_usuario = $id";
            $query = mysqli_query($this->con,$sql);
            if($query){
                $resultado = 1;
                return $resultado;
            }else{
                $resultado = 0;
                return $resultado;
            }
        } 
}

?>