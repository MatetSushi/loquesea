<?php
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha_nac"];
        $correo=$_POST["correo"];
        $sql=$conexion->query("update persona set nombre='$nombre', apellido='$apellido', dni='$dni', fecha_nac='$fecha', correo='$correo' where id_persona='$id' ");
        if ($sql==1) {
            header("location:loquesea.php");
            echo '<div class="alert alert-success">Error  al modificar datos</div>';
        } else {
            echo '<div class="alert alert-danger">Error de registro de persona</div>';
        }
    } 
    else {
        echo '<div class="alert alert-warning">Campo vacio</div>';

    }
}
?>