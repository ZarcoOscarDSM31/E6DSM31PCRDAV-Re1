<!-- CONEXION A MI BASE DE DATOS EN PHP A MYSQL -->
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") { //Recibe el metodo post
    //Obtener variables
    $des1 = $_POST["des1"];
    $des2 = $_POST["des2"];
    $des3 = $_POST["des3"];
    // $tel = $_POST["tel"];
    // $dir = $_POST["dir"];
    // $numero_placa = $_POST["pla1"];
    // $kilometraje = $_POST["kil"];

 }
//  echo $Correo;
//  echo $Pass;

// Crear la conexion
   $conexion = mysqli_connect("localhost","root","","utilizada");
  
   $query = "INSERT INTO `reportes`(`id_reporte`, `reporte1`, `reporte2`, `reporte3`) VALUES ('','$des1','$des2','$des3')";
//    $query1 = "INSERT INTO `vehiculos`(`id_vehiculo`, `nu_placa`, `kilometraje`) VALUES ('','$$numero_placa','$kilometraje')";
   $resultado = mysqli_query($conexion,$query);
   if ($resultado) {
      header("Location:/E6DSM31PCRDAV-Re1/reportes.php");
       echo "Conexion exitosa";
    //    header("./bienvenido.php");
   } else {
       echo "Datos incorrectos";
   }
//    <a href="./../panel.php"></a>

?>