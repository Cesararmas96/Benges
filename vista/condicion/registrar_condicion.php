<!--/**
* Registrar Módulo = vista ; Permite registrar un módulo.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<h1 class="page-header">Registrar Condicion</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar las Sedes.
</div>
<!-- FIN: RECOMENDACION -->
<!-- EMPIEZA: FORMULARIO -->
<form role="form" class="form" action="../controlador/control_condicion.php" method="POST" name="form_condicion">
    <input type="hidden" value="registrar_condicion" name="operacion" />
    <input type="hidden"  name="idtcondicion" id="cam_idtcondicion"/>

        <div class="col-md-4">
            <div class="form-group">
              <br>
            <br>
                <label for="cam_codigo">Código <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Codigo."><i class="fa fa-question" ></i></span></label>
                <input class="form-control"  type="number" min="0" name="idtcondicion" id="cam_idtcondicion" style="width:170px; height:35px"  required/>
                 <br><br>

            </div>
        </div>

<br>
    <div class="row">
        <div class="col-md-6">
          <br>
          <label for="cam_condicion">Nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="condicion."><i class="fa fa-question" ></i></span></label>
         <input class="form-control" type="text" name="nombrecond" id="cam_nombrecond" maxlength="25" style="width:200px; height:35px" required/>
                  </div>
        </div>

    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=condicion/condicion';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Guardar</button>
        </div>
    </div>
</form>
<!-- FIN: FORMULARIO -->
