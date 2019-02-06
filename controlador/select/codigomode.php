<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$el_modelo = $_POST['modelo'];



	echo "<option value='$el_modelo'>$el_modelo</option>" . "\n";
?>
