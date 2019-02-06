<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$el_color = $_POST['color'];



	echo "<option value='$el_color'>$el_color</option>" . "\n";
?>
