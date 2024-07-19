<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <title>Mateos</title>
</head>
<body>
    <h2  class="text-center p-3" style="color: black">Mostrar datos de personas</h2> 
    <?php
    include ("conexion.php");
    include("eliminar.php");
    ?>
    <div class="container-fluifd row">
<form class="col-4 p-3" method="POST">
    <H3 class="text-center text-dark">Registro de Persona</H3>
         <?php 
  include("conexion.php");
  include("registro.php");
  ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Apellido de la persona</label>
    <input type="text" class="form-control" name="apellido">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-check-label">Usuario</label>    
  <input type="text" class="form-control" name="dni">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-check-label">Fecha de nacimiento</label>    
  <input type="date" class="form-control" name="fecha_nac">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Correo</label>
    <input type="email" class="form-control" name="correo">
  </div>
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
  <a href="menu.php" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to">Salir</i></a>
</form>
<div class="col-8 p-4">
<table class="table">
  <theaD class="bf-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">SEUDONIMO</th>
      <th scope="col">FECHA_NC</th>
      <th scope="col">CORREO</th>
      <th scope="col"></th>
    </tr>
</theaD>
  <tbody>
  <?php
  include ("conexion.php");
  $sql = $conexion->query ("select * from persona");
  while ($datos = $sql->fetch_object()) {?>
    <tr>
      <th><?=$datos->id_persona ?></th>
      <td><?=$datos->nombre ?></td>
      <td><?=$datos->apellido ?></td>
      <td><?=$datos->dni ?></td>
      <td><?=$datos->fecha_nac ?></td>
      <td><?=$datos->correo ?></td>
      <td><a href="modificacion.php?id=<?=$datos->id_persona?>">Editar</a>
  <a onclick="return eliminar()" href="loquesea.php?id=<?=$datos->id_persona?>">Eliminar</a>
</td>   
    
    </tr>
  </tbody>
  <?php }
  ?>
  </div>
</div>

</thead>
</table>    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</body>
</html>