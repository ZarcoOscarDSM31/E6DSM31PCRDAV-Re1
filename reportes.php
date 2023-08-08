<?php
include "layout/menu.php";
include "layout/header.php";
?>

<!-- Page Heading -->
<!-- Inician tablas -->
    <!-- <div class="h3 text-gray">
        <h1 class="h3 mb-0 ">Ejemplos de reportes</h1>
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
<div>
<table>
    <tr>
        <th>Modelo</th>
        <th>Año</th>
        <th>Estado</th>
        <th>Descripción</th>
    </tr>
    <tr>
        <td>Honda Civic</td>
        <td>2020</td>
        <td>Usado</td>
        <td>Sedán en excelentes condiciones, color blanco, 40,000 km recorridos.</td>
    </tr>
    <tr>
        <td>Toyota Camry</td>
        <td>2019</td>
        <td>Seminuevo</td>
        <td>Vehículo bien mantenido, color gris metálico, asientos de cuero, 60,000 km.</td>
    </tr>
    <tr>
        <td>Ford Mustang</td>
        <td>2022</td>
        <td>Nuevo</td>
        <td>Deportivo convertible, color rojo, 0 km, un verdadero potente.</td>
    </tr>
    <tr>
        <td>Chevrolet Tahoe</td>
        <td>2018</td>
        <td>Usado</td>
        <td>Camioneta familiar, color negro, capacidad para 7 pasajeros, 80,000 km.</td>
    </tr>
</table> -->
<!-- Finalizan tablas -->
<!-- </div> -->
<!-- Iniciaremos la creacion de variables y todo para las tablas  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla_reportes</title>
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
        <th scope="col">ID_reporte</th>
        <th scope="col">Reporte 1</th>
        <th scope="col">Reporte 2</th>
        <th scope="col">Reporte 3</th>
        <th scope="col">Editar</th>
        <th scope="col">Vizualizar</th>
        <th scope="col">Eliminar</th>

        <!-- <th scope="col">Genero</th>
        <th scope="col">Correo</th>
        <th scope="col">Password</th>
        <th scope="col">Estatus</th>
        <th scope="col">Foto</th> -->
        </tr>
    </thead>
    <tbody>
    <?php 
        $conexion = mysqli_connect("localhost","root","","utilizada");
        $query = "SELECT * FROM `reportes`";
        $result = mysqli_query($conexion, $query);
        while($row = $result ->fetch_array()){
            $id_reporte= $row['id_reporte'];
            $clave = $row['reporte1'];
            $nombre = $row['reporte2'];
            $app = $row['reporte3'];
            // $apm = $row['apm'];
            // $fecha_nac= $row['fecha_nac'];
            // $genero= $row['genero'];
            // $email= $row['email'];
            // $pass= $row['pass'];
            // $activo= $row['activo'];
            // $img = $row['img'];
    ?>
        <tr>
        <td><?php echo $id_reporte;?></td>
        <td><?php echo $clave;?></td>
        <td><?php echo $nombre;?></td>
        <td><?php echo $app;?></td>
        <td> 
            <a href="">
            <button class="btn btn-primary" type="button">
             <i class="fas fa-pen fa-sm text-white-50"></i>
             </BUTton>
             </a>
            </td>
            <td>
            <a href="./app/controllers/vizualizar/vizualizarreportes.php?id_reporte=<?php echo $id_reporte?>">
            <button class="btn btn-warning" type="button">
             <i class="fas fa-eye fa-sm text-white-50"></i>
             </BUTton>
             </a>
            </td>
            <td>
            <a href="./databases/eliminarreportes.php?id_reporte=<?php echo $id_reporte?>"  >
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
    <!-- <a class="btn btn-primary" href="./tablaroles.php" role="button">Roles</a>   -->
    </div>
    
</body>
</html>
<!-- Finalizaremos el bucle y la conexion de todo -->

<div>
<style>

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</div>
<div>
<!-- End of Main Content -->
<?php
include "layout/footer.php";
?>
    </div>
