<?php
	/**
	* Controlador persona
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	session_start();
	require_once("../clases/clase_usuario.php");
	$lobjUsuario = new clsUsuario;

	$lobjUsuario->set_Usuario($_POST['idtusuario']);
	$lobjUsuario->set_Clave($_POST['claveusu']);
	$lobjUsuario->set_Pregunta($_POST['preguntausu']);
	$lobjUsuario->set_Respuesta($_POST['respuestausu']);
	$lobjUsuario->set_Estatus($_POST['estatususu']);
	$lobjUsuario->set_Rol($_POST['idtrol']);
	$lobjUsuario->set_Persona($_POST['idtpersona']);
	
$nom=$_POST['idtpersona'];
	

	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_usuario':
		if($lobjUsuario->consultar_usuario_nom($nom))
		{
			header('location: ../vista/intranet.php?vista=usuario/registrar_usuario&datos=existe');
		}
		else{

			$hecho=$lobjUsuario->registrar_usuario();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=usuario/usuario');
		}
		break;	
		case 'editar_usuario':
			$hecho=$lobjUsuario->editar_usuario();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='No hubo modificaciones';
			}
			header('location: ../vista/intranet.php?vista=usuario/usuario');
		break;
		case 'desactivar_usuario':
			$hecho=$lobjUsuario->desactivar_usuario();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al desactivar';
			}
			header('location: ../vista/intranet.php?vista=usuario/usuario');
		break;
		case 'activar_usuario':
			$hecho=$lobjUsuario->activar_usuario();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=usuario/usuario');
		break;
		case 'consultar_usuario':
			$datos_consulta = $lobjUsuario->consultar_usuario_cedula();
			if($datos_consulta['idtusuario']!='')
			{
				print('1');
			}
			else
			{	
				print('0');
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=usuario/usuario');
		break;
	}

?>