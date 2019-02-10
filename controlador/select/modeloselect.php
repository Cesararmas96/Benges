<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$la_marca = $_POST['marca'];

$query = $conexion->query("SELECT * FROM tmodelo WHERE idtmarca = $la_marca ORDER BY nombremode ASC");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idtmodelo']. '">' . $row['nombremode'] . '</option>' . "\n";
}
