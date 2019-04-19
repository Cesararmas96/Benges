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
  <div class="alert alert-danger" role="alert">
  
   <i class="fa fa-info-circle"></i> A lado de los nombres de los campos aparece el simbolo:<strong> "?"</strong>, donde aparecera una breve ayuda. 
</div>
<!-- FIN: RECOMENDACION -->
<form class="formulario" action="../controlador/control_personal.php" method="POST" name="form_personal" onsubmit="return fregistro()">
    <input type="hidden" value="editar_personal" name="operacion" />
    <input type="hidden"  name="idtpersona" id="cam_idtpersona" value="<?php print($laPersona['idtpersona']);?>" />
    <div class="row">
        <div class="col-sm-1"></div>        
        <div class="col-sm-4">
            <div class="form-group">
              <label for="cam_idtpersona">Cédula <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover"  data-placement="right" data-content="No ingrese puntos (.) ni comas (,)."><i class="fa fa-question" ></i></span></label>

 
               <input  type="text" name="cedulaper"  class="form-control" id="cam_cedulaper" onkeyup="this.value=this.value.replace(solo_numeros, '')"  maxlength="8"  value="<?php print($laPersona['cedulaper']);?>" />
                <div class="status_per"></div>
            </div>
        </div>

        <div class="col-sm-1"></div>

        <div class="col-sm-4">
             <label>Nacionalidad <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nacionalidad de la persona a registrar"><i class="fa fa-question" required ></i></span></label>
            <div class="form-group">
                <select class="form-control" name="nacionalidadper" id="nacionalidadper">
                    <option value="0" <?php if($laPersona['nacionalidadper']==0){ print('SELECTED');} ?>>Venezolano(a)</option>
                    <option value="1" <?php if($laPersona['nacionalidadper']==1){ print('SELECTED');} ?>>Extranjero(a)</option>
                </select>
            </div>     
        </div>
    </div>



    <div class="row">
        <div class="col-sm-1">            
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_nombreunoper">Primer nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>
                
                <input type="text"  class="form-control"  name="nombreunoper" id="cam_nombreunoper" value="<?php print($laPersona['nombreunoper']);?>" onkeyup="this.value=this.value.replace(solo_letras, '')" />
            </div>
        </div>

        <div class="col-sm-1">            
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_nombredosper">Segundo nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>
                <input type="text"  class="form-control"  name="nombredosper" id="cam_nombredosper" value="<?php print($laPersona['nombredosper']);?>" onkeyup="this.value=this.value.replace(solo_letras, '')" />
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <div class="form-group  ">
                <label for="cam_apellidounoper">Primer apellido <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" name="apellidounoper" id="cam_apellidounoper" value="<?php print($laPersona['apellidounoper']);?>"  onkeyup="this.value=this.value.replace(solo_letras, '')"/>
            </div>
        </div>
        <div class="col-sm-1"></div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_apellidodosper">Segundo apellido <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>
                <input type="text" value="<?php print($laPersona['apellidodosper']);?>" class="form-control" name="apellidodosper" id="cam_apellidodosper" onkeyup="this.value=this.value.replace(solo_letras, '')" />
            </div>
        </div>
    </div>
   <div class="row">
        <div class="col-sm-1"></div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_fecha ">Fecha de nacimiento <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Presione en el calendario y elija la fecha"></i></strong></label>
                <div class="input-group input-append date" data-date="" id="dp1" >
               <span class="input-group-addon "><i class="fa fa-calendar"></i></span>
               <input value="<?php print($laPersona['fechanacimientoper']);?>" class="form-control" name="fechanacimientoper" id="cam_fecha" type="date" />
             </div>
            </div>
        </div>

        <div class="col-sm-1"></div>

          <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_telefonoper">Teléfono <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo númerico, no escribir guiones (-)"><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" maxlength="11" name="telefonoper" id="cam_telefonoper"  value="<?php print($laPersona['telefonoper']);?>" onkeyup="this.value=this.value.replace(solo_numeros, '')"  />
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
        <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <div class="form-group has-warning">
                    <label for="cam_correoper">Correo electrónico <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Correo electrónico del persona."><i class="fa fa-question" ></i></span></label>
                    <input value="<?php print($laPersona['correoper']);?>" placeholder="Ingresar correo del personal " type="email" class="form-control" name="correoper" id="cam_correoper"  required/>
                </div> 
            </div>

            <div class="col-sm-1"></div>
           
            <div class="col-sm-4">
                <div class="form-group has-warning">
                    <label for="cam_direccionper ">Dirección <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Dirección de habitación del persona."><i class="fa fa-question" ></i></span></label>

                    <input  value="<?php print($laPersona['direccionper']);?>"type="text" placeholder="Ingresar la direccion de vivienda personal" required class="form-control has-warning" name="direccionper" id="cam_direccionper">
                </div>
            </div>
        <div class="col-sm-1"></div>
    </div>



    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn  center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=personal/personal';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Modificar</button>
        </div>
    </div>
</form>
<script language="javascript" type="text/javascript">
var solo_numeros = /[^0-9\{1}]/;
var solo_letras = /[^a-z\{0}]/;

</script>

<script>

    function fregistro(){

        var fecha = document.getElementById('cam_fecha')
        var ano = fecha.value.substr(0,4) 
        var edad = 2019 - ano   

        if (edad >= 90){
            
            alert('El personal posee ' +  edad + ' años de edad y no esta permitido registrarlo en el sistema')
            return false 
            }
            
            if (2019 - ano < 18){
            
                alert('El personal es menor de edad y no esta permitido registrarlo en el sistema')
                return false 
            }

        else{
            document.formulario.submit();
        }
     
        
}
</script>
