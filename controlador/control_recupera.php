<?php
#busca el dato por medio de un query para recuperar la contraseña
include_once ('../clases/clase_recuperar.php');
$Usuario = $_POST["Usu"];
$Recuperar = new MOD_Recuperar;
$Recuperar->Buscar($Usuario);
?>