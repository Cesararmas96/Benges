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
    require_once("../clases/clase_tipo.php");
    $lobjTipo=new clsTipo;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjTipo->set_Tipo($id);
    $laTipo=$lobjTipo->consultar_tipo();
?>
<h1 class="page-header">Consultar/Modificar Tipo</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar y/o modificar los datos de un Tipo en el sistema.
  </div>
    <div class="alert alert-danger" role="alert">
  
   <i class="fa fa-info-circle"></i> A lado de los nombres de los campos aparece el simbolo:<strong> "?"</strong>, donde aparecera una breve ayuda. 
</div>
<!-- FIN: RECOMENDACION -->
<?php 
                    
                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':
                                    
                                    echo "<script>alert('No se puede modificar porque este tipo ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;
                                

                               
                            }       
                        }
                     ?>
<form class="formulario" action="../controlador/control_tipo.php" method="POST" name="form_tipo">
    <input type="hidden" value="editar_tipo" name="operacion" />
    <input type="hidden"  name="idttipo" id="cam_idttipo" value="<?php print($laTipo['idttipo']);?>" />
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="cam_cedulaest">Tipo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Modificar el nombre del tipo."><i class="fa fa-question" ></i></span></label>
                <input type="text" name="nombretip" class="form-control" id="cam_nombre_tipo"  maxlength="25" value="<?php print($laTipo['nombretip']);?>" required/>
                <div class="status_per"></div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn  center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=tipo/tipo';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Modificar</button>
        </div>
    </div>
</form>