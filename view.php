<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Buscar</title>
    <style>
        #suggestions {
            border: 1px solid #ddd;
            max-height: 200px;
            overflow-y: auto;
            position: absolute;
            background-color: white;
            width: 100%;
            z-index: 1000;
        }
        .suggestion-item {
            padding: 8px;
            cursor: pointer;
        }
        .suggestion-item:hover {
            background-color: #f0f0f0;
        }
        </style>
    <script>
        function buscar() {
            var input = document.getElementById('search').value.toLowerCase();
            var table = document.getElementById('documentTable');
            var rows = table.getElementsByTagName('tr');

            for (var i = 1; i < rows.length; i++) { // Start from 1 to skip the table header
                var cells = rows[i].getElementsByTagName('td');
                var match = false;

                for (var j = 0; j < cells.length; j++) {
                    if (cells[j]) {
                        var cellValue = cells[j].innerText.toLowerCase();
                        if (cellValue.indexOf(input) > -1) {
                            match = true;
                            break;
                        }
                    }
                }

                if (match) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    </script>
</head>
<body class="container">
<h2 class="text-center p-3" style="color: #000080;">ARCHIVOS</h2>

<div class="row justify-content-center">
    <div class="input-group mb-3 position-relative" id="suggestions">
        <input type="text" class="form-control" id="search" name="search" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2" onkeyup="buscar()">
        
    </div>
   <table class="table table-success table-striped-columns" id="documentTable">
        <thead class="table-light">
            <tr>
            <th scope="col">ID_DOC</th>
           <th scope="col">NOMBRE</th>
           <th scope="col">TITULO</th>
            <th scope="col">AUTOR</th>
           <th scope="col">AÑO</th>
            <th scope="col">ARCHIVOS</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            include("conexion.php");

            $search = isset($_GET['search']) ? $_GET['search'] : '';
            $sql = $conexion->query("SELECT * FROM documento WHERE Titulo LIKE '%$search%' OR Autor LIKE '%$search%' OR Año LIKE '%$search%'");

            while ($datos = $sql->fetch_object()) { ?>
                <tr>
                <th><?=$datos->id_doc ?></th>
        <td><?=$datos->Archivo_Nombre ?></td>
        <td><?=$datos->Titulo ?></td>
        <td><?=$datos->Autor ?></td>
        <td><?=$datos->Año ?></td>
        <td><?=$datos->Archivo ?></td> 
                  
                </tr>

    
  </tbody>
  <?php }
  ?>
  </div>
</div>
</thead>

</table>  
<a href="menu.php" class="btn btn-small btn-warning"><i>Salir</i></a>  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</body>
</html>