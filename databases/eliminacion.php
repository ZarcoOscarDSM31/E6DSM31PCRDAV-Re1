<!-- CONEXION A MI BASE DE DATOS EN PHP A MYSQL -->
<?php

  $id=$_REQUEST["id"];


 
//  echo $Correo;
//  echo $Pass;

// Crear la conexion
   $conexion = mysqli_connect("localhost","root","","utilizada");
  
   $query = "DELETE FROM usuarios WHERE id_usuario='$id'";
//    $query1 = "INSERT INTO `vehiculos`(`id_vehiculo`, `nu_placa`, `kilometraje`) VALUES ('','$$numero_placa','$kilometraje')";
   $resultado = mysqli_query($conexion,$query);
   if ($resultado) {
       echo "Se elimino correctamente";
    
   } else {
       echo "Datos incorrectos";
   }
   ?>