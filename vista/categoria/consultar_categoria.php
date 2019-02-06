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
    require_once("../clases/clase_categoria.php");
    $lobjCategoria=new clsCategoria;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjCategoria->set_Categoria($id);
    $laCategoria=$lobjCategoria->consultar_categoria();
?>
<h1 class="page-header">Consultar/Modificar Clasificacion</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar y/o modificar los datos de una categoria en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<?php 
                    
                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':
                                    
                                    echo "<script>alert('No se puede modificar porque esta categoria ya esta registrada!');</script>";

                                    echo "<br>";
                                    break;
                                

                               
                            }       
                        }
                     ?>
<form class="formulario" action="../controlador/control_categoria.php" method="POST" name="form_categoria">
    <input type="hidden" value="editar_categoria" name="operacion" />
    <input type="hidden"  name="idtcategoria" id="cam_idtcategoria" value="<?php print($laCategoria['idtcategoria']);?>" />



           <div class="col-md-4">
         <label for="cam_idttipo">Tipo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Tipo"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idttipo" class="form-control" id="cam_idttipo" style="width:200px; height:35px" required>
                <option value="">Elegir</option>
                   <?php
                        require_once('../clases/clase_tipo.php');
                        $lobjTipo=new ClsTipo;
                        $laTipo=$lobjTipo->listar_tipos_activos();
                        for($i=0;$i<count($laTipo);$i++)
                        {
                            $selected=($laTipo[$i]['idttipo']==$laCategoria['idttipo'])?'selected':'';
                            echo '<option value="'.$laTipo[$i]['idttipo'].'" '.$selected.'>'.$laTipo[$i]['nombretip'].'</option>';
                        }
                    ?>
            </select>

    </div>   
  
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_cedulaest">Categoria <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre categoria."><i class="fa fa-question" ></i></span></label>
                <input type="text" name="nombrecat" class="form-control" id="cam_nombrecategoria" style="width:200px; height:35px" value="<?php print($laCategoria['nombrecat']);?>" required/>
                <div class="status_per"></div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=categoria/categoria';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
        </div>
    </div>
</form>