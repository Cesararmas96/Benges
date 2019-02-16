<?php

	session_start();
	require_once("../clases/clase_marca.php");
	$lobjMarca = new clsMarca;

	$lobjMarca->set_Marca($_POST['idtmarca']);
	$lobjMarca->set_Nombre($_POST['nombremar']);
	$lobjMarca->set_Estatus(($_POST['estatusmar']));

	$nom =$_POST['nombremar'];	
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_marca':

		if($lobjMarca->consultar_marca_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=marca/registrar_marca&datos=existe');
		}
		else{
			$hecho=$lobjMarca->registrar_marca();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=marca/marca');
		}
		break;	
		case 'editar_marca':
		if($lobjMarca->consultar_marca_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=marca/consultar_marca&datos=existe');
		}
		else{
			$hecho=$lobjMarca->editar_marca();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=marca/marca');
		}
		break;
		case 'desactivar_marca':
			$hecho=$lobjMarca->desactivar_marca();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=marca/marca');
		break;
		case 'activar_marca':
			$hecho=$lobjMarca->activar_marca();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=marca/marca');
		break;
		case 'consultar_marca':
			$datos_consulta = $lobjMarca->consultar_marca_id();
			if($datos_consulta['idtmarca']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=marca/marca');
		break;
	}

?>