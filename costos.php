<?php
include "layout/menu.php";
include "layout/header.php";
?>

<!-- Page Heading -->
    <!-- <div class="h3 text-gray">
        <h1 class="h3 mb-0 ">Costos de piezas de auto</h1>
    </div>

    <div>
        <style>
            .h3 {
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transform: translate(0%, -7%);
            }
        </style>
    </div>
<table border="1">
    <tr>
        <th>Pieza</th>
        <th>Costo</th>
    </tr>
    <tr>
        <td>Llantas</td>
        <td>$200</td>
    </tr>
    <tr>
        <td>Frenos</td>
        <td>$150</td>
    </tr>
    <tr>
        <td>Batería</td>
        <td>$100</td>
    </tr>
    <tr>
        <td>Amortiguadores</td>
        <td>$300</td>
    </tr>
</table> -->
<!-- Finalización de la tabla -->
<!-- Comenzar a crear la conexion y el ciclo para anexar las tablas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        #centro{
            margin: 150px;
            background-color:lightblue;
        }
        #fondo{
            background-color:#DCF5F6; 
        }
    </style>
</head>
<body id="fondo">
    <div id="centro">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">numero_de_placa</th>
        <th scope="col">Kilometraje</th>
        <th scope="col"> </th>
        <th scope="col"></th>
        <th scope="col"></th>
        <!-- <th scope="col">Fecha nacimiento</th>
        <th scope="col">Genero</th>
        <th scope="col">Correo</th>
        <th scope="col">Password</th>
        <th scope="col">Estatus</th>
        <th scope="col">Foto</th> -->
        </tr>
    </thead>
    <tbody>
    <?php 
        $conexion = mysqli_connect("localhost","root","","utilizada");
        $query = "SELECT * FROM vehiculos";
        $result = mysqli_query($conexion, $query);
        while($row = $result ->fetch_array()){
            $id_vehiculo = $row['id_vehiculo'];
            $clave = $row['nu_placa'];
            $nombre = $row['kilometraje'];
            // $app = $row['app'];
            // $apm = $row['apm'];
            // $fecha_nac= $row['fecha_nac'];
            // $genero= $row['genero'];
            // $email= $row['email'];
            // $pass= $row['pass'];
            // $activo= $row['activo'];
            // $img = $row['img'];
    ?>
        <tr>
        <td><?php echo $id_vehiculo;?></td>
        <td><?php echo $clave;?></td>
        <td><?php echo $nombre;?></td>
        <td>
            <a href="">
            <button class="btn btn-primary" type="button">
             <i class="fas fa-pen fa-sm text-white-50"></i>
             </BUTton>
             </a>
            </td>
            <td>
            <a href="./app/controllers/vizualizar/vizualizarautos.php?id_vehiculo=<?php echo $id_vehiculo?>">
            <button class="btn btn-warning" type="button">
             <i class="fas fa-eye fa-sm text-white-50"></i>
             </BUTton>
             </a>
            </td>
            <td>
            <a href="./databases/eliminacionautos.php?id_vehiculo=<?php echo $id_vehiculo?>"  >
            <button class="btn btn-danger" type="button">
             <i class="fas fa-trash fa-sm text-white-50"></i>
             </BUTton>
             </a>
            </td>
       
        </tr>
    <?php 
    }
    ?>     
    </tbody>
    </table> 
      
    </div>
    
</body>
</html>

<!-- Footer -->
<?php
include "layout/footer.php";
?>
    </div>
</div>