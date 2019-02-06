<?php
	/**
	* Controlador acceso
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	session_start();//inicia la session, la cual permite trabajar con la variable $_SESSION
	require_once('../clases/clase_usuario.php');//Trae el archivo clase_usuario.php para instanciarlo
	$lobjUsuario= new clsUsuario;//Instancia la clase clsUsuario en $lobjUsuario, para poder usar sus metodos y atributos 

	$usuario=$_POST['usuario'];//Captura los datos enviados desde el campo USUARIO en la vista del index.php
	$clave=$_POST['clave'];//Captura los datos enviados desde el campo CLAVE en la vista del index.php
	$estatus=1;
	$permitidos=2;
	$lobjUsuario->set_Estatus($estatus);
	$lobjUsuario->set_Usuario($usuario);//Envia el dato USUARIO a la clase clsUsuario Mediante el metodo SET_
	$lobjUsuario->set_Clave($clave);//Envia el dato CLAVE a la clase clsUsuario Mediante el metodo SET_
	//En esta serie de IF() se intenta determinar desde donde fue accionado o llamado este archivo, si desde el index con el botón ENTRAR o desde la intranet con el botón SALIR.
	if($_POST['entrar'])//Si es desde el botón ENTRAR ingresa en la condición.
	{
		
		$datosUsuario=$lobjUsuario->login();//Como los datos ya fueron enviados a la clase, el solo tiene que ejecutar la funcion login() de la clase ClsUsuario, para verificar los datos del usuario.
		if(!isset($_SESSION['intentos'])) {
		$intento = 0; 
		$_SESSION['intentos'] = $intentos;

		}else {
$intento = $_SESSION['intentos'];
}if($intento >= $permitidos) {
// LO QUE PASARA SI HA SOBREPASADO EL NUMERO DE INTENTOS VALIDOS
unset($_SESSION['intentos']);
$datosUsuario=$lobjUsuario->desactivar_usuarios();
$_SESSION['msj']='Se ha excedido el numero de intentos, cuenta desactivada.';
header('location:../index.php');
}	 else {
	$intento++;
		if($datosUsuario[0])//si lo datos son correctos entonces entra en la condición para guardar los datos en variables $_SESSION
		{
			$acceso = 1;
			$_SESSION['usuario']=$datosUsuario[0]; //Se guarda el nombre de usuario con el cual ingresó.
			$_SESSION['estatususu']=$datosUsuario[1];
			if($_SESSION['estatususu']==1){//Se verifica si el usuario esta activo o no, si no esta mandará un mensaje en el "else"
	
			$_SESSION['nombrerol']=$datosUsuario[2];//Se guarda el nombre del rol que tiene asignado ese usuario.
			$_SESSION['idtrol']=$datosUsuario[3];//Se guarda el ID del rol.
			$_SESSION['idtpersona']=$datosUsuario[4];//Se guarda la cedula del usuario.
			
			$_SESSION['msj']='Bienvenido al sistema '.$datosUsuario[5] .''.' '. $datosUsuario[6].'.';//Se guarda un mensaje, que posterior mente será borrado.
			header('location:../vista/intranet.php');}//Y se redirecciona al archivo intranet.php
		
		else // si el usuario esta inactivo o sea "estatususu == 0"
		{	$_SESSION['msj']='Cuenta inactiva.'; //Se guardo un mensaje, que posteriormente será borrado
		
		header('Location:../index.php');

		}
		

	}
	
	
		else//Si el usuario no existe o es incorrecto el usuario y/o clave este es sacado del sistema
		{
			$acceso = 0;
			
			$_SESSION['msj']='El usuario y/o clave que ingresó son incorrectos.'; //Se guarda un mensaje, que posterior mente será borrado.
			header('Location:../vista/Iniciar.php');//Y se redirecciona al archivo index.php
		}
		if($acceso == 1) {
// BORRAMOS LAS VARIABLES DE SESION
unset($_SESSION['intentos']);
// AQUI REDIRIGES O LO QUE SEA Q HAYA Q HACER SI EL LOGIN ES CORECTO
}
else {
// GUARDAMOS EL INTENTO Y REGRESAMOS AL LOGIN
$_SESSION['intentos'] = $intento;
echo 'datos incorrectos, vas '.$intento.' intentos <br />';

}
	}}
	elseif($_POST['salir'])// Si el usuario ingresó aquí a traves de la intranet por medio del botón SALIR, entonces entrará en esta condicion.
	{
			session_destroy();//Desctruye los datos de la sessión que guardamos cuando ENTRÓ en el sistema.
			session_start();//Se crea una session solo para que pueda ser guardado el mensaje de despedida.
			$_SESSION['msj']='Hasta pronto! Su sesión ha sido cerrada.';//Se guarda un mensaje, que posterior mente será borrado.
			header('location:../index.php');//Y se redirecciona al archivo index.php
	}
	else //Si no entro por ningun botón o hubo un error entonces lo va a sacar.
	{ 
			$_SESSION['msj']='Disculpe ha habido un error.';//Se guarda un mensaje, que posterior mente será borrado.
			header('location:../index.php');//Y se redirecciona al archivo index.php
	}

	
?>
