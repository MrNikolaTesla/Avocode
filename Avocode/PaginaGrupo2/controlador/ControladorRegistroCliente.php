<?php
require_once("modelo/Usuario.php");
$usuario = new Usuario();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["passwordRegistro1"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $password = $_POST["passwordRegistro1"];

        $repetido = $usuario->get_correo($correo);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $usuario->set_cliente($nombre, $apellido, $correo, $password);
    }

if($estado==1) {
    echo '<div class="alert alert-sucess alert-dismissible fade show" role="alert">
    Usuario registrado correctamente!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}else if($estado==0 && $repetido){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    El correo ya esta en uso.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}else{
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    El correo ya esta en uso.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    echo '<div class="alert alert-danger">Algo ha ocurrido, intente de nuevo mas tarde.</div>';
}

} else {
    echo '<div class="alert alert-danger">Alguno de los campos está vacio.</div>';
}
}

?>