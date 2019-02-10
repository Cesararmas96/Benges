<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$la_sede = $_POST['departamento'];

$query = $conexion->query("SELECT * FROM tdepartamento WHERE idsede = $la_sede ORDER BY  denominacion ASC");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['iddepartamento']. '">' . $row['denominacion'] . '</option>' . "\n";
}
