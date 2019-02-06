<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$el_tipos = $_POST['tipos'];

$query = $conexion->query("SELECT *FROM ttipo WHERE idttipo = $el_tipos");


while ( $row = $query->fetch_assoc() )
{
	echo '<option  value="' . $row['idttipo']. '">' . $row['idttipo'] . '</option>' . "\n";
}
?>
