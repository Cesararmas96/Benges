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
    require_once("../clases/clase_marca.php");
    $lobjMarca=new clsMarca;

    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjMarca->set_Marca($id);
    $laMarca=$lobjMarca->consultar_marca();
?>
<h1 class="page-header">Consultar/Modificar Marcas</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar y/o modificar los datos de una Marcas en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<?php

                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':

                                    echo "<script>alert('No se puede modificar porque esta marca ya esta registrada!');</script>";

                                    echo "<br>";
                                    break;



                            }
                        }
                     ?>
<form class="formulario" action="../controlador/control_marca.php" method="POST" name="form_marca">
    <input type="hidden" value="editar_marca" name="operacion" />
    <input type="hidden"  name="idtmarca" id="cam_idtmarca" value="<?php print($laMarca['idtmarca']);?>" />
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_cedulaest">Marca <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Marca."><i class="fa fa-question" ></i></span></label>
                <input type="text" name="nombremar" class="form-control" id="cam_nombre_marca" style="width:200px; height:35px" maxlength="25" value="<?php print($laMarca['nombremar']);?>" required/>
                <div class="status_per"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=marca/marca';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
        </div>
    </div>
</form>
