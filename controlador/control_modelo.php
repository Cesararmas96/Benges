<?php
	session_start();
	require_once("../clases/clase_modelo.php");
	$lobjModelo = new clsModelo;

	$lobjModelo->set_Modelo($_POST['idtmodelo']);
	$lobjModelo->set_Nombremode($_POST['nombremode']);
	$lobjModelo->set_Marca($_POST['idtmarca']);
	$lobjModelo->set_Estatusmode(($_POST['estatusmode']));


$nom=$_POST['nombremode'];

	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_modelo':
		if($lobjModelo->consultar_modelo_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=modelo/registrar_modelo&datos=existe');
		}
		else{
			$hecho=$lobjModelo->registrar_modelo();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=modelo/modelo');
		}
			
		break;	
		case 'editar_modelo':
		if($lobjModelo->consultar_modelo_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=modelo/consultar_modelo&datos=existe');
		}
		else{
			$hecho=$lobjModelo->editar_modelo();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=modelo/modelo');
		}
		break;
		case 'desactivar_modelo':
			$hecho=$lobjModelo->desactivar_modelo();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=modelo/modelo');
		break;
		case 'activar_modelo':
			$hecho=$lobjModelo->activar_modelo();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=modelo/modelo');
		break;
		case 'consultar_modelo':
			$datos_consulta = $lobjModelo->consultar_modelo_id();
			if($datos_consulta['idtmodelo']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=modelo/modelo');
		break;
	}

?>