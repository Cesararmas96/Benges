
<h1 class="page-header">Registrar Marca</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una Marca en el sistema.
  </div>
  <div class="alert alert-danger" role="alert">
   <i class="fa fa-info-circle"></i> Los campos con color amarillo son de caracter obligatorio. 
    <br>
   <i class="fa fa-info-circle"></i> A lado de los nombres de los campos aparece el simbolo:<strong> "?"</strong>, donde aparecera una breve ayuda. 
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
                        }
                     ?>
<form class="formulario" action="../controlador/control_marca.php" method="POST" name="form_marca">
    <input type="hidden" value="registrar_marca" name="operacion" />
    <input type="hidden"  name="idtmarca" id="cam_idtmarca"/>
    <div class="row">
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group has-warning">
                <label for="cam_nombre_marca">Nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo para regitrar el nombre de la marca"><i class="fa fa-question" ></i></span></label>
                <input placeholder="Ingresar el nombre de la Marca" type="text" class="form-control" name="nombremar" id="cam_nombre_marca"maxlength="25" required/>
            </div>
        </div>

        </div>
        <div class="status_per"></div>
        
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn  center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=departamento/departamento';"><i class="fa fa-chevron-left"></i> Regresar</button>
            </div>
            <div class="col-md-1">
                <button type="reset" class="btn btn-danger center-block" type="button" name=""><i class="fa fa-remove"></i> Cancelar</button>
            </div>
            <div class="col-md-5">
                <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i>Guardar</button>
            </div>
        </div>

</form>
