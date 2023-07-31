<?php
/* siempre que quiera hacer movimientos en mi BD tengo que mandara 
a llamar a mi archivo conexion.php */

include("./../../databases/conexion.php");

/* Select queries return a resultset */
$result = mysqli_query($conn, "SELECT * FROM products LIMIT 10");
printf("Select returned %d rows.\n", mysqli_num_rows($result));
mysqli_close($conn);

?>