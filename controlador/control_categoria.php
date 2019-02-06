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
	require_once("../clases/clase_categoria.php");
	$lobjCategoria = new clsCategoria;

	$lobjCategoria->set_Categoria($_POST['idtcategoria']);
	$lobjCategoria->set_Nombre($_POST['nombrecat']);
	$lobjCategoria->set_Tipo($_POST['idttipo']);
	$lobjCategoria->set_Estatus(($_POST['estatuscat']));

$nom=$_POST['nombrecat'];


	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_categoria':
		if($lobjCategoria->consultar_categoria_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=categoria/registrar_categoria&datos=existe');
		}
		else{
			$hecho=$lobjCategoria->registrar_categoria();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=categoria/categoria');
		}
			
		break;	
		case 'editar_categoria':
		if($lobjCategoria->consultar_categoria_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=categoria/consultar_categoria&datos=existe');
		}
		else{
			$hecho=$lobjCategoria->editar_categoria();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=categoria/categoria');
		}
		break;
		case 'desactivar_categoria':
			$hecho=$lobjCategoria->desactivar_categoria();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=categoria/categoria');
		break;
		case 'activar_categoria':
			$hecho=$lobjCategoria->activar_categoria();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=categoria/categoria');
		break;
		case 'consultar_categoria':
			$datos_consulta = $lobjCategoria->consultar_categoria_id();
			if($datos_consulta['idtcategoria']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=categoria/categoria');
		break;
	}

?>