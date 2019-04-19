<!--/**
* Registrar Módulo = vista ; Permite registrar un módulo.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<h1 class="page-header">Registrar Departamento</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar los departamento.
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

                                    echo "<script>alert('Este codigo y/o nombre  del  departamento ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;



                            }
                        }
                     ?>
<form role="form" class="form" action="../controlador/control_departamento.php" method="POST" name="form_departamento">
    <input type="hidden" value="registrar_departamento" name="operacion" />
    <input type="hidden"  name="iddepartamento" id="cam_iddepartamento"/>

        <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="form-group has-warning">
            
                <label for="cam_codigo">Código <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Codigo."><i class="fa fa-question" ></i></span></label>
                <input class="form-control"  type="text" name="codigodep" id="cam_codigodep" maxlength="20" required/>
            </div>
        </div>

        <div class="row">
        <div class="col-md-4">
            <div class="form-group has-warning">
            <label for="cam_denominacion">Denominación <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre del departamento."><i class="fa fa-question" ></i></span></label>
               
            <input class="form-control" type="text" name="denominacion" id="cam_denominacion"  required/>
        </div>
        </div>
        </div>
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
<!-- FIN: FORMULARIO -->
