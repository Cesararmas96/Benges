<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$la_categoria = $_POST['categoria'];



	echo "<option value='$la_categoria'>$la_categoria</option>" . "\n";
?>
