<h1 class="page-header">Registrar Persona</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una persona en el sistema.
  </div>
  <?php

                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':

                                    echo "<script>alert('Esta cedula ya se encuentra registrada!');</script>";

                                    echo "<br>";
                                    break;



                            }
                        }
                     ?>
<!-- FIN: RECOMENDACION -->
<form class="formulario" action="../controlador/control_personal.php" method="POST" name="form_personal" onsubmit="return fregistro()">
    <input type="hidden" value="registrar_personal" name="operacion" />
    <input type="hidden"  name="idtpersona" id="cam_idtpersona"/>
    
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_idtpersona">Cédula <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="No ingrese puntos (.) ni comas (,)."><i class="fa fa-question" ></i></span></label>
                <input type="text" name="idtpersona"  class="form-control" id="cam_idtpersona" onkeyup="this.value=this.value.replace(solo_numeros, '')"  maxlength="8"  required/>
                <div class="status_per"></div>
            </div>
        </div>

        <div class="col-sm-1"></div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_correoper">Correo electrónico <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Correo electrónico del persona."><i class="fa fa-question" ></i></span></label>
                <input type="email" class="form-control" name="correoper" id="cam_correoper"  required/>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-1">            
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_nombreunoper">Primer nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>
                
                <input type="text"  class="form-control"  name="nombreunoper" id="cam_nombreunoper"  onkeyup="this.value=this.value.replace(solo_letras, '')"   required/>
            </div>
        </div>

        <div class="col-sm-1">            
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_nombredosper">Segundo nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>
                <input type="text"  class="form-control"  name="nombredosper" id="cam_nombredosper" onkeyup="this.value=this.value.replace(solo_letras, '')" />
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_apellidounoper">Primer apellido <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" name="apellidounoper" id="cam_apellidounoper"  onkeyup="this.value=this.value.replace(solo_letras, '')" required/>
            </div>
        </div>
        <div class="col-sm-1"></div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_apellidodosper">Segundo apellido <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" name="apellidodosper" id="cam_apellidodosper" onkeyup="this.value=this.value.replace(solo_letras, '')" />
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
               <input class="form-control" name="fechanacimientoper" id="cam_fecha" type="date"  required>
             </div>
            </div>
        </div>

        <div class="col-sm-1"></div>

          <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_telefonoper">Teléfono <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo númerico, no escribir guiones (-)"><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" maxlength="11" name="telefonoper" id="cam_telefonoper"   onkeyup="this.value=this.value.replace(solo_numeros, '')"  />
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-sm-1"></div>
            
           <div class="col-sm-9">
            <div class="form-group">
                <label for="cam_direccionper">Dirección <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Dirección de habitación del persona."><i class="fa fa-question" ></i></span></label>
                <textarea class="form-control" name="direccionper" id="cam_direccionper"></textarea>
            </div>
        </div>

        <div class="col-sm-1"></div>

    </div>

    <div class="row">
        <input type="hidden" name="ope" id="ope">
        <div class="col-md-5">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=personal/personal';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-5">
            <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"  ><i class="fa fa-check"></i> Aceptar</button>
        </div>
    </div>



</form>

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

<script>

                var num_sf=document.getElementById('cam_telefonoper').value;
                var num_cf='';
                num_cf=num_sf.substring(0,3)+"-";
                num_cf+=num_sf.substring(3,6)+"-";
                num_cf+=num_sf.substring(6,9);
                document.getElementById('').value=num_cf;

        </script>
<script language="javascript" type="text/javascript">
var solo_numeros = /[^0-9\{1}]/;
var solo_letras = /[^a-z\{0}]/;

</script>
<script>
$(document).ready(function() {
    $("#cam_idtpersona").change(function() {
        var valor_consultar = $("#cam_idtpersona").val();
        $("#status_per").html('<img src="../bootstrap/img/loader.gif" align="absmiddle">&nbsp;Analizando...');
            $.ajax({
                type: "POST",
                url: "../controlador/control_personal.php",
                data: {idtpersona:valor_consultar,operacion:"consultar_personal"},
                success: function(data){
                    if(data=='1')
                    {
                        $("#status_per").hide();
                        $("#btn_enviar").prop( "disabled", true );
                        alert('Esta persona ya está registrado en el sistema.');
                    }
                    else
                    {
                        $("#btn_enviar").prop( "disabled", false );
                        $("#status_per").hide();
                    }
                }
            });
    });
});
</script>
