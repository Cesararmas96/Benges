<?php
	session_start();
	require_once("../clases/clase_personal.php");
	$lobjPersona = new clsPersona;
	$lobjPersona->set_Persona($_POST['idtpersona']);
	$lobjPersona->set_cedula($_POST['cedulaper']);
	$lobjPersona->set_Nacionalidadper($_POST['nacionalidadper']);
	$lobjPersona->set_Nombreuno($_POST['nombreunoper']);
	$lobjPersona->set_Nombredos($_POST['nombredosper']);
	$lobjPersona->set_Apellidouno($_POST['apellidounoper']);
	$lobjPersona->set_Apellidodos($_POST['apellidodosper']);
	$lobjPersona->set_FechaNac($_POST['fechanacimientoper']);
	$lobjPersona->set_Direccion($_POST['direccionper']);
	$lobjPersona->set_TelefonoMovil($_POST['telefonoper']);
	$lobjPersona->set_Estatus($_POST['estatusper']);
	$lobjPersona->set_Correo($_POST['correoper']);
	
$ci=$_POST['idtpersona'];
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_personal':
		if ($lobjPersona->consultar_persona($ci))
		{
			header('location: ../vista/intranet.php?vista=personal/registrar_personal&datos=existe');
						break;
		}
		else {
			
			$hecho=$lobjPersona->registrar_persona($ci);
		
			
			if($hecho)
			{
			header('location: ../vista/intranet.php?vista=personal/personal');
				
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=personal/personal');
			}
		break;	
		case 'editar_personal':
			$hecho=$lobjPersona->editar_persona();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='No hubo modificaciones';
			}
			header('location: ../vista/intranet.php?vista=personal/personal');
		break;
		case 'desactivar_personal':
			$hecho=$lobjPersona->desactivar_persona();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al desactivar';
			}
			header('location: ../vista/intranet.php?vista=personal/personal');
		break;
		case 'activar_personal':
			$hecho=$lobjPersona->activar_persona();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=personal/personal');
		break;
		case 'consultar_personal':
			$datos_consulta = $lobjPersona->consultar_persona_cedula();
			if($datos_consulta['idtpersona']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=personal/personal');
		break;
	}

?>