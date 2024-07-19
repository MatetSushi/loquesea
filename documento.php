<!DOCTYPE html>
<?php
include ("conexion.php");
if(isset($_POST['subir'])) {
    $nombre = $_POST['Archivo_Nombre'];
    $titulo = $_POST['Titulo'];
    $autor = $_POST['Autor'];
    $año = $_POST['Año'];
    $archivo = $_FILES ['Archivo']['name'];
    $ruta = $_FILES ['Archivo']['tmp_name'];
    $destino = "Archivo/" . $archivo;
    if($titulo!="") {
        if(copy($ruta, $destino)) {
            $db = new mysqli();
            $sql = "INSERT INTO documento(Archivo_Nombre, Titulo, Autor, Año, Archivo) VALUES ('$nombre', '$titulo', '$autor','$año', '$archivo')";
            $query = $conexion->query($sql);
            if($query){
                ?>
                //echo "Se guardo correctamente";
                <script type="text/javascript">
                alert("Archivo subido correctamente");
                window.location.href='';
                </script>
                <?php }
            } else {
                echo"Error";
        }
}
}
?>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">       
    <title>loquesea</title>
    <style type="text/css">
        @import url("css/mycss.css");
        </style>
        <link href="css/bosststrap.css" rel="styleheet" type="text/css">
    </head>
    <body>
        <h1 align="center"> Universidad Tecnologica de la Selva sede Rayon </h1>
        <div style="width: 500px; margin: auto;border:1px padding: 30px;">
            <h4>Registro de Archivo</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                <tr>
                        <td><label>Nombre</label></td>
                        <td><input type="text" name="Archivo_Nombre" placeholder="Registrar Nombre" required=""></input></td>
                    </tr>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="Titulo" placeholder="Registrar Titulo" required=""></input></td>
                    </tr>
                    <tr>
                        <td><label>Autor</label></td>
                        <td><input type="text" name="Autor" placeholder="Registrar Autor" required=""></input></td>
                    </tr><tr>
                        <td><label>Año</label></td>
                        <td><input type="text" name="Año" placeholder="Registrar Año" required=""></input></td>
                    </tr>
                    <tr>
                        <td>
                            <label> Archivo PDF: </label>
                            <td colspan="2"><input type="file" name="Archivo" required="">
                        </td>
                        <tr>
                           <td><br><input class='btn btn-success' type="submit" value="Subir Archivo" name="subir"></td>
                       
                        </tr> 

                </table>
                 <a href="menu.php" class="btn btn-small btn-warning"><i>Salir</i></a>

        </form>
</div>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>
