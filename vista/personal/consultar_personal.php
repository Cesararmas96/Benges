<!--/**
* Consultar persona = vista ; Permite ver y modificar un persona.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<?php
    require_once("../clases/clase_personal.php");
    $lobjPersona=new clsPersona;

    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjPersona->set_Persona($id);
    $laPersona=$lobjPersona->consultar_persona();
?>
<h1 class="page-header">Consultar/Modificar Personal</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar y/o modificar los datos de un Personal en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<form class="formulario" action="../controlador/control_personal.php" method="POST" name="form_personal">
    <input type="hidden" value="editar_personal" name="operacion" />
    <input type="hidden"  name="idtpersona" id="cam_idtpersona" value="<?php print($laPersona['idtpersona']);?>" />
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_cedulaest">Cédula <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Cédula persona."><i class="fa fa-question" ></i></span></label>
              <h4> <?php print($laPersona['idtpersona']);?></h4>
                <div class="status_per"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="cam_nombreunoper">Primer nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Segundo nombre del persona."><i class="fa fa-question" ></i></span></label>
                <input type="text"  class="form-control"  name="nombreunoper" id="cam_nombreunoper" value="<?php print($laPersona['nombreunoper']);?>" onkeyup="this.value=this.value.replace(solo_letras, '')"  style="width:200px; height:35px" required/>
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_nombredosper">Segundo nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Segundo nombre del persona."><i class="fa fa-question" ></i></span></label>
                <input type="text"  class="form-control"  name="nombredosper" id="cam_nombredosper" value="<?php print($laPersona['nombredosper']);?>" style="width:200px; height:35px" onkeyup="this.value=this.value.replace(solo_letras, '')" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="cam_apellidounoper">Primer apellido <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Primer apellido del persona."><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" name="apellidounoper" id="cam_apellidounoper" value="<?php print($laPersona['apellidounoper']);?>" style="width:200px; height:35px" onkeyup="this.value=this.value.replace(solo_letras, '')" required/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_apellidodosper">Segundo apellido <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Segundo apellido del persona."><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" name="apellidodosper" id="cam_apellidodosper" value="<?php print($laPersona['apellidodosper']);?>" style="width:200px; height:35px" onkeyup="this.value=this.value.replace(solo_letras, '')" />
            </div>
        </div>
    </div>
     <div class="row">
       <div class="col-md-3">
               <div class="form-group">
                   <label for="cam_fecha ">Fecha de nacimiento <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Presione en el calendario y elija la fecha"></i></strong></label>
                   <div class="input-group input-append date" data-date="" id="dp1" >
                  <span class="input-group-addon "><i class="fa fa-calendar"></i></span>
                  <input class="form-control" name="fechanacimientoper" id="cam_fecha" type="date" max="2000-01-01" style="width:160px; height:40px" value="<?php print($laPersona['fechanacimientoper']); ?>" required>
             </div>
               </div>

           </div>    
          <div class="col-md-6">
            <div class="form-group">
                <label for="cam_telefonoper">Teléfono <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Teléfono de habitación del persona."><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" maxlength="11" name="telefonoper" id="cam_telefonoper" value="<?php print($laPersona['telefonoper']);?>"  onkeyup="this.value=this.value.replace(solo_numeros, '')" style="width:200px; height:35px" required/>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="cam_correoper">Correo electrónico <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Correo electrónico del persona."><i class="fa fa-question" ></i></span></label>
                <input type="email" class="form-control" name="correoper" id="cam_correoper" value="<?php print($laPersona['correoper']);?>" style="width:200px; height:35px" required/>
            </div>
        </div>
           <div class="col-md-6">
            <div class="form-group">
                <label for="cam_direccionper">Dirección <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Dirección de habitación del persona."><i class="fa fa-question" ></i></span></label>
                <textarea class="form-control" name="direccionper" id="cam_direccionper" style="width:200px; height:80px"><?php print($laPersona['direccionper']);?></textarea>
            </div>
        </div>
    </div>



       <!--<div class="col-md-6">
            <div class="form-group">
                <label for="cam_sexoest">Sexo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Sexo del persona."><i class="fa fa-question" ></i></span></label>
                <select class="form-control" name="sexoest" id="cam_sexoest" required>
                    <option value="M"FEMENINO</option>
                </select>
            </div>
        </div>
</div>
    -->



    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=personal/personal';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
        </div>
    </div>
</form>
<script language="javascript" type="text/javascript">
var solo_numeros = /[^0-9\{1}]/;
var solo_letras = /[^a-z\{0}]/;

</script>
