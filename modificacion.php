<?php
include("conexion.php");
$id=$_GET["id"];
$sql=$conexion->query("select * from persona where id_persona='$id' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Modificar Datos</h3>           
       <input type="hidden" name="id" value="<?=$_GET["id"]?>">
<?php
include ("modificar.php");
while ($datos = $sql->fetch_object()) { ?>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
<input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
<input type="text" class="form-control" name="apellido" value="<?= $datos->apellido?>">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">SEUDONIMO</label>
<input type="text" class="form-control" name="dni" value="<?= $datos->dni?>">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
<input type="date" class="form-control" name="fecha_nac" value="<?= $datos->fecha_nac?>">
<label for="exampleInputEmail1" class="form-label">Correo</label>
<input type="text" class="form-control" name="correo" value="<?= $datos->correo?>">
</div>
  <?php
}
?>
  <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
  </form> 
  
</body>
</html>