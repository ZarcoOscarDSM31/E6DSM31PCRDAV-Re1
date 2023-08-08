<!-- CONEXION A MI BASE DE DATOS EN PHP A MYSQL -->
<?php

  $id_reporte=$_REQUEST["id_reporte"];


 
//  echo $Correo;
//  echo $Pass;

// Crear la conexion
   $conexion = mysqli_connect("localhost","root","","utilizada");
  
   $query = "DELETE FROM reportes WHERE id_reporte='$id_reporte'";
//    $query1 = "INSERT INTO `vehiculos`(`id_vehiculo`, `nu_placa`, `kilometraje`) VALUES ('','$$numero_placa','$kilometraje')";
   $resultado = mysqli_query($conexion,$query);
   if ($resultado) {
       echo "Se elimino correctamente";
    
   } else {
       echo "Datos incorrectos";
   }
   ?>