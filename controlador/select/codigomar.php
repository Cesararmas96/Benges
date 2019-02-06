<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$la_marca = $_POST['marca'];



	echo "<option value='$la_marca'>$la_marca</option>" . "\n";
?>
