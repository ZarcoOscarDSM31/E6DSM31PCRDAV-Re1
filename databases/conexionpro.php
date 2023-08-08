<!-- CONEXION A MI BASE DE DATOS EN PHP A MYSQL -->
<?php
$servername = "154.56.47.52";
$database = "u196388150_SPABI";
$username = "u196388150_SPABI";
$password = "87&RNx*2QMxX#c9";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);
?>