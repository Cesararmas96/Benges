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
    require_once("../clases/clase_sede.php");
    $lobjSede=new clsSede;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjSede->set_Sede($id);
    $laSede=$lobjSede->consultar_sede();
?>
<h1 class="page-header">Consultar/Modificar Sede</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar y/o modificar los datos de una Sede en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<?php 
                    
                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':
                                    
                                    echo "<script>alert('No se puede modificar porque este codigo de sede ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;
                                

                               
                            }       
                        }
                     ?>
<form class="formulario" action="../controlador/control_sede.php" method="POST" name="form_sede">
    <input type="hidden" value="editar_sede" name="operacion" />
    <input type="hidden"  name="idsede" id="cam_idsede" value="<?php print($laSede['idsede']);?>" />
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_cedulaest">Sede <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre sede."><i class="fa fa-question" ></i></span></label>
               <input type="text" name="nombresede" class="form-control" id="cam_nombre_sede" style="width:170px; height:35px" value="<?php print($laSede['nombresede']);?>" required/>
                <div class="estatussed"></div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=sede/sede';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
        </div>
    </div>
</form>