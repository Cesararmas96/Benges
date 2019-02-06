<?php
	session_start();
	require_once("../clases/clase_subcategoria.php");
	$lobjSubcategoria = new clsSubcategoria;

	$lobjSubcategoria->set_Subcategoria($_POST['idtsubcategoria']);
	$lobjSubcategoria->set_Nombresubcat($_POST['nombresubcat']);
	$lobjSubcategoria->set_Categoria($_POST['idtcategoria']);
	$lobjSubcategoria->set_Estatussubcat(($_POST['estatussubcat']));



	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_subcategoria':
			$hecho=$lobjSubcategoria->registrar_subcategoria();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=subcategoria/subcategoria');
		break;	
		case 'editar_subcategoria':
			$hecho=$lobjSubcategoria->editar_subcategoria();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=subcategoria/subcategoria');
		break;
		case 'desactivar_subcategoria':
			$hecho=$lobjSubcategoria->desactivar_subcategoria();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=subcategoria/subcategoria');
		break;
		case 'activar_subcategoria':
			$hecho=$lobjSubcategoria->activar_subcategoria();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=subcategoria/subcategoria');
		break;
		case 'consultar_subcategoria':
			$datos_consulta = $lobjSubcategoria->consultar_subcategoria_id();
			if($datos_consulta['idtsubcategoria']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=subcategoria/subcategoria');
		break;
	}

?>