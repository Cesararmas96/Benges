<!DOCTYPE html>
<html>
<head>
  <title>Recuperar Contraseña </title>
    <link rel="stylesheet" type="text/css" href="../diseno.css">
     <!-- se hace el llamado al jquery para hacer el trabajo mas facil en javascrpit -->
  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>

  <!-- llamada al javascript -->
  <script type="text/javascript" src="../js/js_recuperar.js"></script>
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap-3/css/style-home.css" rel="stylesheet">
</head>
<body>
  <form>
    <script src="https://use.typekit.net/ayg4pcz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <div class="container">
    <h1 class="welcome text-center"> <br></h1>
        <div class="card card-container">
        <center><h2 class='login_title text-center' style="color: black">Recuperar Contraseña</h2></center>

        <center><table border="0" cellpadding="10" cellspacing="">
  <tr>
  <td>

  
  
  <div id="Usu">
  
      <div class="col-md-11">
            <div class="form-group">
            <br><br>
                <center><label for="usuario">Usuario </span></label></center>
                <input class="form-control"  type="text"  id="usuario" required/>
            </div>
        </div>

  <br>
  <div class="form-group">
  <button style="margin-left:10%; height:40px;width: 150px" type="button" class="btn btn-success btn-xs" id="boton">Enviar</button>
  <br>
  <br>
  
   <a style="margin-left:35%; height:40px;width: 150px" href="../index.php">Volver</a></button>
  </div>
  </div>


  <!-- si el usuario se encuentra el siguiente campo aparece -->
  <!-- se encierra dentro de un DIV para ocultarlo con un stilo css display: none -->
  <div id="Comprobar" style="display: none">
  <br>
  <b><span id="Pregunta"></span></b><br><br>
  <input type='text' class="form-control"  id='Respuesta' placeholder='Respuesta'>
  <br>
  <button type='button' id='boton2' style="margin-left:10%; height:40px;width: 150px"  class="btn btn-success btn-xs">Comprobar</button>
  <br>
  </div>
  <br>

  <!-- si la respuesta es correcta el siguiente campo aparece -->
  <!-- se encierra dentro de un DIV para ocultarlo con un stilo css display: none -->
  <div id="NuevaPass" style="display: none">
  <input type='password' class="form-control" id='Pass1' placeholder='Nueva Contraseña'>
 <br>
  <input type='password' class="form-control" id='Pass2' placeholder='Repita la contraseña'>
  <br>
  <button type='button' id='boton3' style="margin-left:10%; height:40px;width: 150px" class="btn btn-success btn-xs">Cambiar</button>

  </div>
  </td>
  </tr>
  </table></center>

    

        


        </div><!-- /card-container -->
    </div><!-- /container -->
    </form>
</body>
</html>