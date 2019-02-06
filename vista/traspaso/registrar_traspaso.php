<!--/**
* Registrar Asignatura = vista ; Permite registrar una asignatura.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->


<h1 class="page-header">Traspaso o custodio de Activos Fijos</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras realizar Traspasos y Custodio de los Activos Fijos.
  </div>


  <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../js/select.js"></script>

<!-- FIN: RECOMENDACION -->
<form role="form" class="form" action="../controlador/control_movilizacion.php" method="POST" name="form_asignar">
  <input type="hidden" value="registrar_traspaso" name="operacion" />
   <input type="hidden"  name="idtmovimiento" id="cam_idmovimiento"/>



<br>



<div class="col-md-3">
    <div class="form-group">
      <label for="cam_dpEmisora">Sede Emisora <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dependencia Emisora de los bienes."></i></strong></label>
       <select type="text" name="idsede1" class="form-control" id="cam_idsede1" required>
         <option>Seleccione</option>
      </select>
    </div>
</div>
<div class="row">
<div class="col-md-3">
    <div class="form-group">
      <label for="cam_dpEmisora">Sede Receptora <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dependencia Emisora de los bienes."></i></strong></label>
       <select type="text" name="idsede2" class="form-control" id="cam_idsede2" required>
         <option>Seleccione</option>
      </select>
    </div>
</div>
</div>
<div class="col-md-3">
    <div class="form-group">
      <label for="cam_dpEmisora">Departamento Emisor <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dependencia Emisora de los bienes."></i></strong></label>
       <select type="text" name="iddepartamento1" class="form-control" id="cam_iddepartamento1" required>
         <option>Seleccione</option>
      </select>
    </div>
</div>
<div class="row">
<div class="col-md-3">
    <div class="form-group">
      <label for="cam_dpEmisora">Departamento Receptor <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dependencia Emisora de los bienes."></i></strong></label>
       <select type="text" name="iddepartamento2" class="form-control" id="cam_iddepartamento2" required>
         <option>Seleccione</option>
      </select>
    </div>
</div>
</div>


  <div class="col-md-10">
      <div class="form-group">
        <label for="cam_dpEmisora">Activo a traspasar <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dependencia Emisora de los bienes."></i></strong></label>
         <select type="text" name="idtejemplar" class="form-control" id="cam_idtejemplar" style="width:460px; height:35px" required>
           <option>Seleccione activo</option>
        </select>
      </div>
  </div>
  <div class="col-md-3">
      <div class="form-group">
       <div class="form-group">
<label for="cam_serialejemp">Observación<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Descripción del activo."></i></strong></label>
     <textarea name="observacionmov" class="form-control" id="cam_observacionmov"></textarea>
   </div>
 </div>
   </div>
<div class="row">
  <div class="col-md-6">
          <div class="form-group">


          </div>
        </div>
</div>
<div class="col-md-6">
        <div class="form-group">


        </div>
</div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=traspaso/traspaso';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
