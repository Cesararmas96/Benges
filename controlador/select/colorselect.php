<?php
$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$query = $conexion->query("SELECT * FROM tcolor ORDER BY nombrecol ASC");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idtcolor']. '">' . $row['nombrecol'] . '</option>' . "\n";
}
