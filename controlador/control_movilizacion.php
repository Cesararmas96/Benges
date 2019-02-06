<?php
	/**
	* Controlador asignatura
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/


	session_start();
	require_once("../clases/clase_movilizacion.php");
	$lobjMovilizacion=new clsMovilizacion;
	$lobjMovilizacion->set_SdEmisora($_POST['idsede1']);
	$lobjMovilizacion->set_SdReceptora($_POST['idsede2']);
	$lobjMovilizacion->set_DpEmisora($_POST['iddepartamento1']);
	$lobjMovilizacion->set_DpReceptora($_POST['iddepartamento2']);
	$lobjMovilizacion->set_Ejemplar($_POST['idtejemplar']);
	$lobjMovilizacion->set_Observacion($_POST['observacionmov']);
	$operacion=$_POST['operacion'];

	switch ($operacion)
	{
		case 'registrar_traspaso':
			$hecho=$lobjMovilizacion->registrar_traspaso();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=traspaso/traspaso');
		break;
		case 'editar_asignatura':
			$hecho=$lobjMovilizacion->editar_asignatura();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'desactivar_asignatura':
			$hecho=$lobjMovilizacion->desactivar_asignatura();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al desactivar';
			}
		break;
		case 'activar_asignatura':
			$hecho=$lobjMovilizacion->activar_asignatura();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al activar';
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=asignatura/asignatura');
		break;
	}

?>
