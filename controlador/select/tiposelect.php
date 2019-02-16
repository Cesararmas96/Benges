<?php
$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$query = $conexion->query("SELECT * FROM ttipo ORDER BY nombretip ASC");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idttipo']. '">' . $row['nombretip'] . '</option>' . "\n";
}
