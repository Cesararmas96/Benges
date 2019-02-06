<?php
	/**
	* Controlador módulo
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	session_start();
	require_once("../clases/clase_condicion.php");
	$lobjCondicion=new clsCondicion;

	$lobjCondicion->set_Condicion($_POST['idtcondicion']);
	$lobjCondicion->set_Nombre($_POST['nombrecond']);
	$lobjCondicion->set_Estatus(($_POST['estatuscond']));

	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_condicion':
			$hecho=$lobjCondicion->registrar_condicion();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_condicion':
			$hecho=$lobjCondicion->editar_condicion();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'desactivar_condicion':
			$hecho=$lobjCondicion->desactivar_condicion();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al desactivar';
			}
		break;

		case 'activar_condicion':
			$hecho=$lobjCondicion->activar_condicion();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=condicion/condicion');
		break;
		case 'consultar_condicion':
			$datos_consulta = $lobjCondicion->consultar_condicion_id();
			if($datos_consulta['idtcondicion']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=condicion/condicion');
		break;

	}

	header('location: ../vista/intranet.php?vista=condicion/condicion');
?>