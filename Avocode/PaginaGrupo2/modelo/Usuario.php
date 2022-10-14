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
            $sql = "DELETE FROM usuario WHERE id_usuario = $id";
                $query = mysqli_query($this->con, $sql);
                $estado=1;
                return $estado;
        }
    }

    public function buscar_usuarios ($nombre)
    {
        $sql = "SELECT * FROM usuario WHERE nombre LIKE '%$nombre%'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function update_usuario ($id, $nombre, $apellido, $correo, $direccion, $telefono, $tipo) {
        //Guarda el tipo de permiso y la id del usuario a modificar.
        session_start();
        $permiso = $_SESSION['tipo'];
        $id_personal = $_SESSION['id'];
        //Verifica que usuario estamos tratando de modificar, si somos nosotros mismos, de ser ese el caso, va a tener que dejar que un empleado modifique un empleado (Lo mismo pasa como admin) para que nos podamos modificar
        $verificacion = "SELECT * FROM usuario WHERE id_usuario = '$id'";
        $query_veri = mysqli_query($this->con, $verificacion);
        $tipo_veri = mysqli_fetch_array($query_veri);
        //Si el usuario a modificar es administrador o empleado, y el tipo de NUESTRO usuario es empleado, y no se esta intentando modificar ↓ a si mismo, entonces.
        if($tipo_veri['tipo'] == "administrador" || $tipo_veri['tipo'] == "empleado" && $permiso != "administrador"){
            $estado=2; //No puede modificar otras entidades a su mismo o mayor nivel
            return $estado;
            //Si un empleado esta tratando de modificar otro empleado para volverlo admin ↓
            }else if($tipo_veri['tipo'] == "cliente" && $permiso == "empleado" && $tipo=="administrador" || $tipo=="empleado"){
                $estado=2; //No puede modificar otras entidades a su mismo o mayor nivel
                return $estado;
        }else{
            //Coso, todo de pana
            $sql = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', correo = '$correo', direccion = '$direccion', telefono = '$telefono', tipo = '$tipo' WHERE id_usuario = $id";
            $query = mysqli_query($this->con,$sql);
            $estado=1;
            return $estado;
        }
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