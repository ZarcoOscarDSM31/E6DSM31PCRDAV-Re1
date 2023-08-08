<!-- CONEXION A MI BASE DE DATOS EN PHP A MYSQL -->
<?php

  $id_vehiculo=$_REQUEST["id_vehiculo"];


 
//  echo $Correo;
//  echo $Pass;

// Crear la conexion
   $conexion = mysqli_connect("localhost","root","","utilizada");
  
   $query = "DELETE FROM vehiculos WHERE id_vehiculo='$id_vehiculo'";
//    $query1 = "INSERT INTO `vehiculos`(`id_vehiculo`, `nu_placa`, `kilometraje`) VALUES ('','$$numero_placa','$kilometraje')";
   $resultado = mysqli_query($conexion,$query);
   if ($resultado) {
       echo "Se elimino correctamente";
    
   } else {
       echo "Datos incorrectos";
   }
   ?>