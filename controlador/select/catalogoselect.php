<?php
$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$query = $conexion->query($sql="SELECT *FROM tcatalogo WHERE estatuscata=1");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idtcatalogo']. '">' . $row['idtcatalogo'] . '</option>' . "\n";
}
