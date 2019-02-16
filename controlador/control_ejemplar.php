<?php
	session_start();
	require_once("../clases/clase_ejemplar.php");	
	$lobjEjemplar =new clsEjemplar;

	$lobjEjemplar->set_idejemplar($_POST['idtejemplar']);
	$lobjEjemplar->set_idcodigo($_POST['codigoejemp']);
	$lobjEjemplar->set_serial($_POST['serialejemp']);
	$lobjEjemplar->set_cantidad($_POST['cantidadejemp']);
	$lobjEjemplar->set_descripcion($_POST['descripcionejemp']);
	$lobjEjemplar->set_fecha($_POST['fecharegistroejemp']);
	$lobjEjemplar->set_status(($_POST['estatusejemp']));
	$lobjEjemplar->set_condicion($_POST['idtcondicion']);
	$lobjEjemplar->set_IdCatalogo($_POST['idtcatalogo']);

  $codigo=$_POST['codigoejemp'];
	$operacion=$_POST['operacion'];

	switch ($operacion)
	{
		case 'registrar_ejemplar':

		if($lobjEjemplar->consultar_codigo_ejem($codigo))
		{
			header('location: ../vista/intranet.php?vista=ejemplar/registrar_ejemplar&datos=existe');
		}
		else{
			$hecho=$lobjEjemplar->registrar_ejemplar();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');
		}
		break;
		case 'editar_ejemplar':
			$hecho=$lobjEjemplar->editar_ejemplar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');

		break;
		case 'desactivar_ejemplar':
			$hecho=$lobjEjemplar->desactivar_ejemplar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al desactivarlo';
			}
			header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');
		break;
		case 'activar_ejemplar':
			$hecho=$lobjEjemplar->activar_ejemplar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');
		break;

		case 'consultar_ejemplar':
			$datos_consulta = $lobjEjemplar->consultar_ejemplar_id();
			if($datos_consulta['idtejemplar']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');
		break;
	}
?>
