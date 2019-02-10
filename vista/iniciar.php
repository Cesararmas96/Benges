<?php
  /**
  * Inicio del sistema
  *
  * @package    ModeloAulafrontino
  * @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
  * @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
  * @link       https://github.com/EquipoAulaFrontino
  * @version    v1.0
  */
    session_start(); //inicia la session, la cual permite trabajar con la variable $_SESSION
    $msj=(isset($_SESSION['msj']))?$_SESSION['msj']:"";
    $vista=(isset($_GET['vista']))?$_GET['vista']:"";//toma el valor que se guarda en la variable vista que está en la URL.
    if($msj) //verifica si existe algún texto en el arreglo msj de la variable $_SESSION
    {
        echo '<script>alert("'.$msj.'");</script>'; // si existia un mensaje este lo imprime mediante un alert!
        unset($_SESSION['msj']); //borra lo que habia en la variable.
    }
?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Uness / Bienes Nacionales</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/AdminLTE.css">

    <!-- Mi estilo en la validacion -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/validacion.css"> -->
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
       <a href="../../index2.html"> <img src="../images/logo.png"></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Ingrese su usuario y contraseña para iniciar seccion</p>
  		<form  class='form__container' action="../controlador/control_acceso.php" method="POST" role="search">              

          <div class="form-group has-feedback">
      		<input class="form-control" type="text" name="usuario" id="usuario" placeholder="Cedula">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
      		<input class="form-control" type="password" name="clave" placeholder="Clave">
      		<input  type="hidden" name="estatus" id="estatus" value='1'>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <!-- <ul>
              	<li>Uno</li>
              	<li>dos</li>
              </ul> -->
            </div><!-- /.col -->
            <div class="col-xs-12">
              <input class="btn btn-primary btn-block btn-flat" type="submit" name="entrar" value="Entrar"/>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- O -</p>
          <a href="Recuperar.php" class="btn btn-block  btn-facebook btn-flat"> Recuperar contraseña</a>
          <a href="../index.php" class="btn btn-block  btn-google btn-flat">Volver al menu </a>
        </div><!-- /.social-auth-links -->

        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>

    <!-- Validacion js -->
    <!-- <script src="../js/validar.js"></script> -->
    
  </body>
</html>
