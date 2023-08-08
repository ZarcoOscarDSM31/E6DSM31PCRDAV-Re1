<?php
include('./../../databases/conexionpro.php');

$placa = $_POST['placa'];
$kilometraje =  $_POST['kilometraje'];

$query = "INSERT INTO `autos`(`placa`, `kilometraje`) VALUES ('$placa','$kilometraje')";

$resultado = mysqli_query($conn,$query);


if ($resultado === TRUE){
    echo "EL registro  se inserto de manera correcta";
    header("Location:/E6DSM31PCRDAV-Re1/views/cars/index.php");

}else{

    echo "EL registro no  se inserto de manera correcta";
}


?>