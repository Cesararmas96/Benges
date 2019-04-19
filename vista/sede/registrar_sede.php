<h1 class="page-header">Registrar Sede</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
   <i class="fa fa-info-circle"></i> Aquí podras registrar las Sedes.
</div>

<div class="alert alert-danger" role="alert">
   <i class="fa fa-info-circle"></i> Los campos con color amarillo son de caracter obligatorio. 
    <br>
   <i class="fa fa-info-circle"></i> A lado de los nombres de los campos aparece el simbolo:<strong> "?"</strong>, donde aparecera una breve ayuda. 
</div>
<!-- FIN: RECOMENDACION -->
<!-- EMPIEZA: FORMULARIO -->
<?php 
                    
                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':
                                    
                                    echo "<script>alert('Este codigo de sede ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;
                                

                               
                            }       
                        }
                     ?>
<form role="form" class="form" action="../controlador/control_sede.php" method="POST" name="form_sede">
    <input type="hidden" value="registrar_sede" name="operacion" />
    <input type="hidden"  name="idsede" id="cam_idsede"/>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="form-group has-warning" >
            <br><br>
                <label for="cam_codigo">Código <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Registrar el codigo de la sede en este campo."><i class="fa fa-question" ></i></span></label>
                <input class="form-control"  type="text" name="idsede" id="cam_idsede" maxlength="12" required/>
                 <br><br>
                 
            </div>
        </div>

<br>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group has-warning">
            <br>
        <label for="cam_sede">Nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Registra el nombre de la sede."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="text" name="nombresede" id="cam_nombresede"  required/>
                  </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn  center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=sede/sede';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-1">
            <input  class="btn btn-danger center-block" type="button" name="" value="Cancelar"><i class="fa fa-remove"></i>
        </div>
        <div class="col-md-5">
            <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i>Guardar</button>
        </div>

    </div>
</form>
<!-- FIN: FORMULARIO -->