<?php
session_start();

if (!empty($_POST["btningresar"])) 
{
    if (!empty($_POST["usuario"]) and !empty($_POST["contraseña"]))

{
$usuario=$_POST["usuario"];
$clave=$_POST["contraseña"]; 
$sql=$conexion->query("select * from usuario where user='$usuario' and clave='$clave' ");

if ($datos=$sql->fetch_object()){
    $_SESSION["id_user"]=$datos->id_user;
    $_SESSION["name"]= $datos->name;
    $_SESSION["lastname"]= $datos->lastname;
    header("location:menu.php");


} else {
    echo '<div class="alert alert-danger"><h3>Acceso denegado</h3></div>';
}
} else {
    echo '<div class="alert alert-danger"><h4>Los campos estan vacios</h4></div>';
}
   }

?>