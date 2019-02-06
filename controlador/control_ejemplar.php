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
	require_once("../clases/clase_ejemplar.php");
	$lobjEjemplar=new clsEjemplar;
	$lobjEjemplar->set_idejemplar($_POST['idtejemplar']);
	$lobjEjemplar->set_idcatalogo($_POST['idtcatalogo']);
	$lobjEjemplar->set_serial($_POST['serialejemp']);
	$lobjEjemplar->set_nombre($_POST['idttipo']." ".$_POST['idtcategoria']." ".$_POST['idtmarca']." ".$_POST['idtmodelo']);
	$lobjEjemplar->set_condicion($_POST['idtcondicion']);
	$lobjEjemplar->set_sede($_POST['idsede']);
	$lobjEjemplar->set_departamento($_POST['iddepartamento']);
	$lobjEjemplar->set_descripcion($_POST['descripcionejemp']);

$Serial=$_POST['serialejemp'];
	$operacion=$_POST['operacion'];
	switch ($operacion)
	{

		case 'registrar_ejemplar':

			$hecho=$lobjEjemplar->registrar_ejemplar();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=ejemplar/registrar_ejemplar');


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
		break;
		case 'desactivar_ejemplar':
			$hecho=$lobjEjemplar->desactivar_ejemplar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al desactivarlo dddd';

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
				$_SESSION['msj']='Error al eliminar acccc';
			}
			header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');
		break;
		default:
			header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');
		break;
	}

	#header('location: ../vista/intranet.php?vista=ejemplar/ejemplar');

	?>
