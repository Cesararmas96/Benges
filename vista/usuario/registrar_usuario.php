<!--/**
* Registrar Módulo = vista ; Permite registrar un módulo.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<h1 class="page-header">Registrar Usuario</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar el Usuarios.
</div>
<!-- FIN: RECOMENDACION -->
<!-- EMPIEZA: FORMULARIO -->
<?php 
                    
                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':
                                    
                                    echo "<script>alert('Este personal ya posee una cuenta de usuario asignada!');</script>";

                                    echo "<br>";
                                    break;
                                

                               
                            }       
                        }
                     ?>
<form role="form" class="form" action="../controlador/control_usuario.php" method="POST" name="form_usuario" id="regis" onsubmit="return fregistro()">
    <input type="hidden" value="registrar_usuario" name="operacion" />
    <input type="hidden"  name="idtusuario" id="cam_idtusuario"/>
    
        <div class="col-md-4">
            <div class="form-group">
            <br><br>
                  <label for="cam_personal">personal <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre de la Persona."><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idtpersona" class="form-control" id="idtpersona" style="width:200px; height:35px" required>
                <option value="">Elegir</option>
                <?php
                        require_once('../clases/clase_personal.php');
                        $lobjPersona=new ClsPersona;
                        $laPersona=$lobjPersona->listar_personas_activas();
                        for($i=0;$i<count($laPersona);$i++)
                        {
                            echo '<option value="'.$laPersona[$i]['idtpersona'].'" >'.$laPersona[$i]['nombreunoper']." ".$laPersona[$i]['apellidounoper'].'</option>';
                        }
                    ?>
            </select>
                 <br><br>
                 <label for="cam_claven">Clave <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Clave."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="password" name="claveusu" id="cam_clave" style="width:200px; height:35px" minlength="5" maxlength="7" required/>
                <br>
                <br>
                <label for="cam_clave">repetir clave <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Ingresar clave."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="password" name="clave2" id="cam_clave2" style="width:200px; height:35px" minlength="5" maxlength="7" required/>
            </div>
        </div>
               
             <div class="col-md-6">
            <div class="form-group">
            <br><br>
                <label for="cam_pregunta">Pregunta <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="pregunta"><i class="fa fa-question" ></i></span></label>
                <input class="form-control"  type="text" name="preguntausu" id="cam_preguntausu" style="width:200px; height:35px" required/>
                 <br><br>
                 <label for="cam_respuesta">Respuesta<span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Respuesta."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="password" name="respuestausu" id="cam_respuestausu" style="width:200px; height:35px" required/>
                <br>
                <br>
                <label for="cam_respuesta2">repetir respuesta<span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Ingresar respuesta."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="password" name="respuestausu2" id="cam_respuestausu2" style="width:200px; height:35px" required/>
            </div>
        </div> 
<br>
    
    
        <div class="col-md-6">
         <label for="cam_idtrol">Cargo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Cargo"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idtrol" class="form-control" id="idtrol" style="width:200px; height:35px" required>
                <option value="">Elegir</option>
                <?php
                        require_once('../clases/clase_rol.php');
                        $lobjRol=new clsRol;
                        $laRol=$lobjRol->listar_roles();
                        for($i=0;$i<count($laRol);$i++)
                        {
                            echo '<option value="'.$laRol[$i]['idtrol'].'" >'.$laRol[$i]['nombrerol'].'</option>';
                        }
                    ?>
            </select>

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