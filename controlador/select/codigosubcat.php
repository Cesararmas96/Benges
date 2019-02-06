<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$la_subcat = $_POST['subcat'];



	echo "<option value='$la_subcat'>$la_subcat</option>" . "\n";
?>
