<?php
$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$query = $conexion->query("SELECT * FROM tmarca ORDER BY nombremar ASC");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option  value="' . $row['idtmarca']. '">' . $row['nombremar'] . '</option>' . "\n";
}
