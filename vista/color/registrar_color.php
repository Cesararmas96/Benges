<!--/**
* Registrar Estudiante = vista ; colmite registrar un estudiante.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<h1 class="page-header">Registrar Color</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un color en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<?php

                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':

                                    echo "<script>alert('Este color ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;



                            }
                        }
                     ?>
<form class="formulario" action="../controlador/control_color.php" method="POST" name="form_color">
    <input type="hidden" value="registrar_color" name="operacion" />
    <input type="hidden"  name="idtcolor" id="cam_idtcolor"/>
    <div class="row">
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_nombre_color">Nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre del color a guardar."><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" name="nombrecol" id="cam_nombre_color" style="width:200px; height:35px" maxlength="25" required/>
            </div>
        </div>

        </div>

        <div class="status_col"></div>

    <br>
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=color/color';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Guardar</button>
        </div>

</form>
<script>
$(document).ready(function() {
    $("#cam_nombre_color").change(function() {
        var valor_consultar = $("#cam_nombre_color").val();
        $("#status_col").html('<img src="../bootstrap/img/loader.gif" align="absmiddle">&nbsp;Analizando...');
            $.ajax({
                type: "POST",
                url: "../controlador/control_color.php",
                data: {nombrecol:valor_consultar,operacion:"consultar_color"},
                success: function(data){
                    if(data=='1')
                    {
                        $("#status_col").hide();
                        $("#btn_enviar").prop( "disabled", true );
                        alert('Este color ya está registrado en el sistema.');
                    }
                    else
                    {
                        $("#btn_enviar").prop( "disabled", false );
                        $("#status_col").hide();
                    }
                }
            });
    });
});
</script>
