<!--/**
* Consultar estudiante = vista ; Permite ver y modificar un estudiante.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<?php
    require_once("../clases/clase_condicion.php");
    $lobjCondiciones=new clsCondicion;

    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjCondiciones->set_Condicion($id);
    $laCondicion=$lobjCondiciones->consultar_condicion();
?>
<h1 class="page-header">Consultar/Modificar condicion</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar y/o modificar los datos de una Condicion en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<form class="formulario" action="../controlador/control_condicion.php" method="POST" name="form_condicion">
    <input type="hidden" value="editar_condicion" name="operacion" />
    <input type="hidden"  name="idtcondicion" id="cam_idtcondicion" value="<?php print($laCondicion['idtcondicion']);?>" />
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_cedulaest">Condicion <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre condicion."><i class="fa fa-question" ></i></span></label>
               <input type="text" name="nombrecond" class="form-control" id="cam_nombre_condicion" value="<?php print($laCondicion['nombrecond']);?>" maxlength="25" style="width:200px; height:35px" required/>
                <div class="estatussed"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=condicion/condicion';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
        </div>
    </div>
</form>
