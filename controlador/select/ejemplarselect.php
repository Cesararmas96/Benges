<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$el_ejemplar = $_POST['ejemplar'];

$query = $conexion->query("SELECT id, nombrejemp, idtejemplar FROM tejemplar WHERE iddepartamento = $el_ejemplar");

echo '<option value="">Seleccione activo</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id']. '">' . $row['idtejemplar'] ." ". $row['nombrejemp'] . '</option>' . "\n";
}
