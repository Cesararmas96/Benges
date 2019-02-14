<?php

	session_start();
	require_once("../clases/clase_ejemplar.php");
	$lobjEjemplar=new clsEjemplar;
	$lobjEjemplar->set_idejemplar($_POST['idtejemplar']);
	$lobjEjemplar->set_idcodigo($_POST['codigoejemp']);
	$lobjEjemplar->set_serial($_POST['serialejemp']);
	$lobjEjemplar->set_cantidad($_POST['cantidadejemp']);
	$lobjEjemplar->set_descripcion($_POST['descripcionejemp']);
	$lobjEjemplar->set_fecha($_POST['fecharegistroejemp']);
	$lobjEjemplar->set_status($_POST['estatusejemp']);
	$lobjEjemplar->set_condicion($_POST['idtcondicion']);
	$lobjEjemplar->set_IdCatalogo($_POST['idtcatalogo']);




  // $Serial=$_POST['idtejemplar'];
	$operacion=$_POST['operacion'];
	switch ($operacion)
	{

		case 'registrar_ejemplar':

			$hecho=$lobjEjemplar->registrar_ejemplar();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			// else
			// {
			// 	$_SESSION['msj']='Erroneo en el registro';
			// }
			header('location: ../vista/intranet.php?vista=ejemplar/registrar_ejemplar');


		break;
		// case 'editar_ejemplar':
		// 	$hecho=$lobjEjemplar->editar_ejemplar();
		// 	if($hecho)
		// 	{
		// 		$_SESSION['msj']='Se ha modificado exitosamente';
		// 	}
		// 	else
		// 	{
		// 		$_SESSION['msj']='Error al modificar';
		// 	}
		// break;
		// case 'desactivar_ejemplar':
		// 	$hecho=$lobjEjemplar->desactivar_ejemplar();
		// 	if($hecho)
		// 	{
		// 		$_SESSION['msj']='Se ha desactivado exitosamente';
		// 	}
		// 	else
		// 	{
		// 		$_SESSION['msj']='Error al desactivarlo dddd';

		// 	}
		// 	header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');
		// break;
		// case 'activar_ejemplar':
		// 	$hecho=$lobjEjemplar->activar_ejemplar();
		// 	if($hecho)
		// 	{
		// 		$_SESSION['msj']='Se ha activado exitosamente';
		// 	}
		// 	else
		// 	{
		// 		$_SESSION['msj']='Error al eliminar acccc';
		// 	}
		// 	header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');
		// break;
		// default:
		// 	header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');
		// break;
	}

	header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');

	?>
