<!--/**
* Registrar Módulo = vista ; Permite registrar un módulo.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<h1 class="page-header">Registrar Sede</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar las Sedes.
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
    
        <div class="col-md-4">
            <div class="form-group">
            <br><br>
                <label for="cam_codigo">Código <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Codigo."><i class="fa fa-question" ></i></span></label>
                <input class="form-control"  type="text" name="idsede" id="cam_idsede" maxlength="12" style="width:170px; height:35px" required/>
                 <br><br>
                 
            </div>
        </div>

<br>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <br>
        <label for="cam_sede">Nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="sede."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="text" name="nombresede" id="cam_nombresede" style="width:250px; height:35px" required/>
                  </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=sede/sede';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Aceptar</button>
        </div>
    </div>
</form>
<!-- FIN: FORMULARIO -->