<?php
	session_start();
	require_once("../clases/clase_color.php");
	$lobjColor = new clsColor;

	$lobjColor->set_Color($_POST['idtcolor']);
	$lobjColor->set_Nombre($_POST['nombrecol']);
	$lobjColor->set_Estatus(($_POST['estatuscol']));

$nom =$_POST['nombrecol'];	
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_color':

		if($lobjColor->consultar_color_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=color/registrar_color&datos=existe');
		}
		else{
			$hecho=$lobjColor->registrar_color();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=color/color');
		}
		break;	
		case 'editar_color':
		if($lobjColor->consultar_color_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=color/consultar_color&datos=existe');
		}
		else{
			$hecho=$lobjColor->editar_color();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=color/color');
		}
		break;
		case 'desactivar_color':
			$hecho=$lobjColor->desactivar_color();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=color/color');
		break;
		case 'activar_color':
			$hecho=$lobjColor->activar_color();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al desactivar';
			}
			header('location: ../vista/intranet.php?vista=color/color');
		break;
		case 'consultar_color':
			$datos_consulta = $lobjColor->consultar_color_id();
			if($datos_consulta['idtcolor']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=color/color');
		break;
	}

?>