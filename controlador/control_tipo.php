<?php
	/**
	* Controlador estudiante
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	session_start();
	require_once("../clases/clase_tipo.php");
	$lobjTipo = new clsTipo;

	$lobjTipo->set_Tipo($_POST['idttipo']);
	$lobjTipo->set_Nombre($_POST['nombretip']);
	$lobjTipo->set_Estatus(($_POST['estatustip']));
$nom=$_POST['nombretip'];
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_tipo':
		if($lobjTipo->consultar_tipo_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=tipo/registrar_tipo&datos=existe');
		}

		else
		{


			$hecho=$lobjTipo->registrar_tipo();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=tipo/tipo');
		}
		break;	
		case 'editar_tipo':
		if($lobjTipo->consultar_tipo_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=tipo/consultar_tipo&datos=existe');
		}
		else{
			$hecho=$lobjTipo->editar_tipo();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=tipo/tipo');
		}
		break;
		case 'desactivar_tipo':
			$hecho=$lobjTipo->desactivar_tipo();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=tipo/tipo');
		break;
		case 'activar_tipo':
			$hecho=$lobjTipo->activar_tipo();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=tipo/tipo');
		break;
		case 'consultar_tipo':
			$datos_consulta = $lobjTipo->consultar_tipo_id();
			if($datos_consulta['idttipo']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=tipo/tipo');
		break;
	}

?>