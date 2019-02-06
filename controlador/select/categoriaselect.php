<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$el_tipo = $_POST['tipo'];

$query = $conexion->query("SELECT * FROM tcategoria WHERE idttipo = $el_tipo ORDER BY nombrecat ASC ");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idtcategoria']. '">' . $row['nombrecat'] . '</option>' . "\n";
}
