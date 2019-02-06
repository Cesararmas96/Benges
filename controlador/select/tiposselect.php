<?php

$conexion = mysqli_connect("localhost","root","","bienesnacionales");
if(isset($_POST['catalogo'])){
$el_catalogo = $_POST['catalogo'];

$result = $conexion->query("SELECT ttipo.nombretip FROM tcatalogo, ttipo WHERE idtcatalogo =$el_catalogo");
$row = mysqli_fetch_array($result);
?>
<div id="div_resp">
	Tipo <input type="text" name="idttipo" id="cam_idttipo" value="<?php echo $row['nombretip'] ?>">
</div>


<?php }
?>
