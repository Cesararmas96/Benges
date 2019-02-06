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
	require_once("../clases/clase_sede.php");
	$lobjSede=new clsSede;

	$lobjSede->set_Sede($_POST['idsede']);
	$lobjSede->set_Nombre($_POST['nombresede']);
	$lobjSede->set_Estatus(($_POST['estatussed']));

	$operacion=$_POST['operacion'];
$nom=$_POST['idsede'];
	switch ($operacion) 
	{
		case 'registrar_sede':
		if($lobjSede->consultar_sede_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=sede/registrar_sede&datos=existe');
		}
		else{
			$hecho=$lobjSede->registrar_sede();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=sede/sede');
		}
		break;
		case 'editar_sede':
			if($lobjSede->consultar_sede_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=sede/consultar_sede&datos=existe');
		}
		else{
			$hecho=$lobjSede->editar_sede();

			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=sede/sede');

		}
		break;
		case 'desactivar_sede':
			$hecho=$lobjSede->desactivar_sede();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al desactivar';
			}
		break;

		case 'activar_sede':
			$hecho=$lobjSede->activar_sede();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=sede/sede');
		break;
		case 'consultar_sede':
			$datos_consulta = $lobjSede->consultar_sede_id();
			if($datos_consulta['idsede']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=sede/sede');
		break;

	}

	header('location: ../vista/intranet.php?vista=sede/sede');
?>