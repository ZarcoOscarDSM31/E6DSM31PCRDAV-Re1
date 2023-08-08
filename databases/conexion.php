<!-- CONEXION A MI BASE DE DATOS EN PHP A MYSQL -->
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") { //Recibe el metodo post
    //Obtener variables
    $name = $_POST ["nombre"];
    $apellido = $_POST["app"];
    $Correo = $_POST["corr"];
    $tel = $_POST["tel"];
    $dir = $_POST["dir"];
    $numero_placa = $_POST["pla1"];
    $kilometraje = $_POST["kil"];

 }
//  echo $Correo;
//  echo $Pass;

// Crear la conexion
   $conexion = mysqli_connect("localhost","root","","utilizada");
  
   $query = "INSERT INTO `usuarios`(`id_usuario`, `nombre`, `apellido`, `correo`, `tel`, `direccion`) VALUES ('','$name','$apellido','$Correo','$tel',' $dir')";
//    $query1 = "INSERT INTO `vehiculos`(`id_vehiculo`, `nu_placa`, `kilometraje`) VALUES ('','$$numero_placa','$kilometraje')";
   $resultado = mysqli_query($conexion,$query);
   if ($resultado) {
       echo "Conexion exitosa";
    //    header("./bienvenido.php");
   } else {
       echo "Datos incorrectos";
   }
//    <a href="./../panel.php"></a>





//  echo $Correo;
//  echo $Pass;

// Crear la conexion
   $conexion = mysqli_connect("localhost","root","","utilizada");
   $query = "INSERT INTO `vehiculos`(`id_vehiculo`, `nu_placa`, `kilometraje`) VALUES ('','$numero_placa','$kilometraje')";
   $resultado = mysqli_query($conexion,$query);
   if ($resultado) {
       echo "Conexion exitosa";
    //    header("./bienvenido.php");
   } else {
       echo "Datos incorrectos";
   }
//    <a href="./../panel.php"></a>



?>