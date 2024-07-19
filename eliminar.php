<?php
if (!empty ($_GET["id"])) {
    $id=$_GET ["id"];
    $sql=$conexion->query("delete from persona where id_persona=$id");
    if($sql==1) {
        echo '<div class="alert alert-danger"><h3>Datos de la persona eliminado</h3></div>';
    } else {
        echo '<div class="alert alert-danger">Datos no eliminado</h3></div>';
    }
    
}
?>