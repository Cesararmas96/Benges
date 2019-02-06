<!--/**
* Registrar Estudiante = vista ; Permite registrar un estudiante.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<h1 class="page-header">Registrar Tipo</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un Tipo en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<?php 
                    
                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':
                                    
                                    echo "<script>alert('Este tipo ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;
                                

                               
                            }       
                        }
                     ?>
<form class="formulario" action="../controlador/control_tipo.php" method="POST" name="form_tipo">
    <input type="hidden" value="registrar_tipo" name="operacion" />
    <input type="hidden"  name="idttipo" id="cam_idttipo"/>
    
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_nombre_tipo">Nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre del tipo"><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" name="nombretip" id="cam_nombre_tipo" style="width:200px; height:35px" maxlength="25" required/>
            </div>
        </div>
       
        </div>
    
        <div class="status_per"></div>
        
    <br>
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=tipo/tipo';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        
        <div class="col-md-4">
            <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Aceptar</button>
        </div>
   
</form>
<script>
$(document).ready(function() {
    $("#cam_nombre_tipo").change(function() { 
        var valor_consultar = $("#cam_nombre_tipo").val();
        $("#status_per").html('<img src="../bootstrap/img/loader.gif" align="absmiddle">&nbsp;Analizando...');
            $.ajax({  
                type: "POST",  
                url: "../controlador/control_tipo.php",
                data: {nombretip:valor_consultar,operacion:"consultar_tipo"},  
                success: function(data){
                    if(data=='1')
                    {
                        $("#status_per").hide();
                        $("#btn_enviar").prop( "disabled", true );
                        alert('Este Tipo ya está registrado en el sistema.');                              
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