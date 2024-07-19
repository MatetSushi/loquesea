<!doctype html>
<?php 
session_start();
if(empty($_SESSION["id_user"])){
  header("location: login.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Menu</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <nav>
      <ul class="nav nav-tabs">
        <?php
        echo $_SESSION["name"]." ". $_SESSION["lastname"];
        ?>        
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="loquesea.php">Registrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="documento.php">Subir Documento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view.php">Documentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-disabled="true" href="cerrar.php">Cerrar Sessión</a>
        </li>
      </ul>
    </nav>
    
      
    <!-- End Example Code -->
  <div class="col row justify-content-end">
   <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="IMG/3.jpg" class="d-block w-30" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/4.jpg" class="d-block w-85" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/2.jpg" class="d-block w-20" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   </div>  
    

  </body>
</html>