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
	require_once("../clases/clase_bien.php");
	$lobjBien=new clsBien;
	$lobjBien->set_id($_POST['idtcatalogo']);
	$lobjBien->set_codigo($_POST['idttipo'].$_POST['idtcategoria'].$_POST['idtmarca'].$_POST['idtmodelo'].$_POST['idtcolor']);
	$lobjBien->set_categoria($_POST['idtcategoria']);
	$lobjBien->set_idmarca($_POST['idtmarca']);
	$lobjBien->set_idmodelo($_POST['idtmodelo']);
	$lobjBien->set_idtipo($_POST['idttipo']);
	$lobjBien->set_idcolor($_POST['idtcolor']);



$codigo=$_POST['idttipo'].$_POST['idtcategoria'].$_POST['idtmarca'].$_POST['idtmodelo'].$_POST['idtcolor'];

	$operacion=$_POST['operacion'];

	switch ($operacion)
	{
		case 'registrar_bien':
		if($lobjBien->consultar_codigo($codigo))
		{
			header('location: ../vista/intranet.php?vista=bien/registrar_bien&datos=existe');
			break;
		}
		else{
			$hecho=$lobjBien->registrar_bien();
			if($hecho)
			{
				header('location: ../vista/intranet.php?vista=bien/bien');
				
			}
			else
			{
				$_SESSION['msj']='Error en el registro';
			}

			header('location: ../vista/intranet.php?vista=bien/bien');
		}
		break;
		case 'editar_bien':
			$hecho=$lobjBien->editar_bien();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=bien/bien');
		break;
		case 'desactivar_bien':
			$hecho=$lobjBien->desactivar_catalogo();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al desactivar';
			}
			header('location: ../vista/intranet.php?vista=bien/bien');
		break;
		case 'activar_bien':
			$hecho=$lobjBien->activar_catalogo();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=bien/bien');
		break;
		case 'consultar_bien':
			$datos_consulta = $lobjUsuario->consultar_bien();
			if($datos_consulta['id']!='')
			{
				print('1');
			}
			else
			{
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=bien/bien');
		break;
	}



	?>
