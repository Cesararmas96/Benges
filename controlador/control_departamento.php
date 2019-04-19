<?php
	session_start();
	require_once("../clases/clase_departamento.php");
	$lobjDepartamento=new clsDepartamento;

	$lobjDepartamento->set_departamento($_POST['iddepartamento']);
	$lobjDepartamento->set_codigo($_POST['codigodep']);
	$lobjDepartamento->set_denominacion($_POST['denominacion']);
	
	$cod=$_POST['codigodep'];
	$nom=$_POST['denominacion'];
	$operacion=$_POST['operacion'];
	switch ($operacion) 
	{
		case 'registrar_departamento':
		if($lobjDepartamento->consultar_departamento_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=departamento/registrar_departamento&datos=existe');
		}


		if($lobjDepartamento->consultar_departamento_cod($cod))
		{
			header('location: ../vista/intranet.php?vista=departamento/registrar_departamento&datos=existe');
		}

		else{
			$hecho=$lobjDepartamento->registrar_departamento();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=departamento/departamento');
		}
		break;
		// case 'editar_departamento':
		// 	if($lobjDepartamento->consultar_departamento_nom($nom)){
		// 		header('location: ../vista/intranet.php?vista=departamento/consultar_departamento&datos=existe');
		// 	}
		// 	if($lobjDepartamento->consultar_departamento_cod($cod)){
		// 		header('location: ../vista/intranet.php?vista=departamento/consultar_departamento&datos=existe');
		// 	}

		// else{
		// 	$hecho=$lobjDepartamento->editar_departamento();
		// 	if($hecho)
		// 	{
		// 		$_SESSION['msj']='Se ha modificado exitosamente';
		// 	}
		// 	else
		// 	{	
		// 		$_SESSION['msj']='Error al modificar';
		// 	}
		// 	header('location: ../vista/intranet.php?vista=departamento/departamento');
		// }
		// break;
		case 'editar_departamento':
	
	
			$hecho=$lobjDepartamento->editar_departamento();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=departamento/departamento');
		
		break;
		case 'desactivar_departamento':
			$hecho=$lobjDepartamento->desactivar_departamento();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al desactivar';
			}
			header('location: ../vista/intranet.php?vista=departamento/departamento');

		break;
		case 'activar_departamento':
			$hecho=$lobjDepartamento->activar_departamento();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=departamento/departamento');
			
		break;
		case 'consultar_departamento':
			$datos_consulta = $lobjDepartamento->select_departamento();
			if($datos_consulta['iddepartamento']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=departamento/departamento');
		break;
	}	
	?>