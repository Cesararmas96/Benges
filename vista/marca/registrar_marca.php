
<h1 class="page-header">Registrar Marca</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una Marca en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->

<?php
    if(isset($_GET['datos'])){
        switch ($_GET['datos']) {
            case 'existe':
                echo "<script>alert('Esta marca  ya esta registrada!');</script>";
                echo "<br>";
                break;
        }
?>

<form class="formulario" action="../controlador/control_marca.php" method="POST" name="form_marca">
    <input type="hidden" value="registrar_marca" name="operacion" />
    <input type="hidden"  name="idtmarca" id="cam_idtmarca"/>
    <div class="row">
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_nombre_marca">Nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Marca"><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" name="nombremar" id="cam_nombre_marca" style="width:200px; height:35px" maxlength="25" required/>
            </div>
        </div>

        </div>

        <div class="status_per"></div>

    <br>
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=marca/marca';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Aceptar</button>
        </div>

</form>
<script>
$(document).ready(function() {
    $("#cam_nombre_marca").change(function() {
        var valor_consultar = $("#cam_nombre_marca").val();
        $("#status_per").html('<img src="../bootstrap/img/loader.gif" align="absmiddle">&nbsp;Analizando...');
            $.ajax({
                type: "POST",
                url: "../controlador/control_marca.php",
                data: {nombremar:valor_consultar,operacion:"consultar_marca"},
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
