<!--/**
* Registrar Módulo = vista ; Permite registrar un módulo.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/--><?php
    require_once("../clases/clase_usuario.php");
    $lobjUsuario=new clsUsuario;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjUsuario->set_Usuario($id);
    $laUsuario=$lobjUsuario->consultar_usuario();
?>
<h1 class="page-header">Consultar usuario Usuario</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras modificar el Usuario.
</div>
<!-- FIN: RECOMENDACION -->
<!-- EMPIEZA: FORMULARIO -->
<form role="form" class="form" action="../controlador/control_usuario.php" method="POST" name="form_usuario" id="regis" onsubmit="return fregistro()">
    <input type="hidden" value="editar_usuario" name="operacion" />
    <input type="hidden"  name="idtusuario" id="cam_idtusuario" value="<?php print($laUsuario['idtusuario']);?>" />
    
        <div class="col-md-4">
            <div class="form-group">
            <br><br>
              <h4> <b> Usuario: <?php print ($laUsuario['idtusuario']);?></b></h4><br><br>
                   <label for="cam_pregunta">Pregunta <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="pregunta"><i class="fa fa-question" ></i></span></label>
                <input class="form-control"  type="text" name="preguntausu" id="cam_preguntausu" style="width:200px; height:35px" value="<?php print ($laUsuario['preguntausu']);?>" required/>
                <br><br>
                 <label for="cam_idtrol">Cargo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Cargo"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idtrol" class="form-control" id="idtrol" style="width:200px; height:35px" required>
                <option value="">Elegir</option>
                <?php
                      require_once('../clases/clase_rol.php');
                        $lobjRol=new ClsRol;
                        $laRol=$lobjRol->consulta_roles();
                        for($i=0;$i<count($laRol);$i++)
                        {
                            $selected=($laRol[$i]['idtrol']==$laUsuario['trol_idtrol'])?'selected':'';

                            echo '<option value="'.$laRol[$i]['idtrol'].'" '.$selected.'>'.$laRol[$i]['nombrerol'].'</option>';
                        }
                    ?>
            </select>


            </div>
        </div>
               
             <div class="col-md-6">
            <div class="form-group">
     

            </div>
        </div> 
<br><br>
<br><br>
<br>
    <div class="row">
        <div class="col-md-6">
          <label for="cam_respuesta">Respuesta<span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Respuesta."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="text" name="respuestausu" id="cam_respuestausu" style="width:200px; height:35px" value="<?php print ($laUsuario['respuestausu']);?>" required/>
            
       <br>
       <br>
       
                  </div> 
    
        <div class="row">
        <div class="col-md-6">
        

    </div>    </div>
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=usuario/usuario';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Aceptar</button>
        </div>
    </div>
    <script >
 function fregistro()
{
    var clave, clave2, respuesta, respuesta2;
    clave = document.getElementById('cam_clave').value;
    clave2 = document.getElementById('cam_clave2').value;
    respuesta = document.getElementById('cam_respuestausu').value;
    respuesta2 = document.getElementById('cam_respuestausu2').value;
 
    
    if(clave == clave2)
    {
        if(respuesta == respuesta2)
    {
         alert("Registro con exito");
         document.regis.submit();  
    }
        else if(respuesta != respuesta2)
    {
        alert("Las respuestas no son iguales");
        return false;
    }
        
    }
    else if(clave != clave2)
    {
        alert("Las claves no son iguales");
        return false;
    }
    
    
    
}       

    </script>
</form>
<!-- FIN: FORMULARIO -->