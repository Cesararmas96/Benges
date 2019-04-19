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
            <div class="form-group has-warning">
                <label for="cam_cedulaest">Nombre <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre sede que se modificara."><i class="fa fa-question" ></i></span></label>
               <input type="text" name="nombresede" class="form-control" id="cam_nombre_sede" style="width:170px; height:35px" value="<?php print($laSede['nombresede']);?>" required/>
                <div class="estatussed"></div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=sede/sede';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i>Modificar</button>
        </div>
    </div>
</form>