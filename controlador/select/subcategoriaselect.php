<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$lacategoria = $_POST['categoria'];

$query = $conexion->query("SELECT * FROM tsubcategoria WHERE idtcategoria = $lacategoria ORDER BY nombresubcat ASC");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idtsubcategoria']. '">' . $row['nombresubcat'] . '</option>' . "\n";
}
