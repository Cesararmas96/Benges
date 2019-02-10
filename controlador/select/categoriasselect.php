<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$el_catalogo = $_POST['catalogo'];

$query = $conexion->query("SELECT tcategoria.nombrecat FROM tcatalogo, tcategoria WHERE idtcatalogo = $el_catalogo");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idtcategoria']. '">' . $row['nombrecat'] . '</option>' . "\n";
}
