<!--/**
* Registrar Asignatura = vista ; Permite registrar una asignatura.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/--><?php
    require_once("../clases/clase_bien.php");
    $lobjBien=new clsBien;

    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjBien->set_id($id);
    $laBien=$lobjBien->consultar_bien();
?>


<h1 class="page-header"> Consulta de Catalogo</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras modificar el catalogo.
  </div>

   <!-- <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <b>Fecha:<input  type="date" width="10%" ></b>
  </div>

   </div>-->


<!-- FIN: RECOMENDACION -->
  <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
  <script src="../js/select.js"></script>


</script>
<form role="form" class="form" action="../controlador/control_bien.php" method="POST" name="form_catalogo">

    <input type="hidden" value="editar_bien" name="operacion" />
    <input type="hidden"  name="idtcatalogo" id="cam_idtcatalogo" value="<?php print ($laBien['idtcatalogo']);?>"/>
    

<div class="col-md-1">
            
        </div>

        <div class="col-md-3">
            <div class="form-group">
             <div class="form-group">
                 
            <label for="cam_idtmarca">Tipo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Tipo del bien."></i></strong></label>
             <select type="text" name="idttipo" style="width:170px; height:35px" class="form-control" id="cam_idttipo" required>
                <option value="0">Seleccione</option>
                 <?php
                      require_once('../clases/clase_tipo.php');
                        $lobjTipo=new ClsTipo;
                        $laTipo=$lobjTipo->listar_tipos_activos();
                        for($i=0;$i<count($laTipo);$i++)
                        {
                            $selected=($laTipo[$i]['idttipo']==$laBien['idttipo'])?'selected':'';

                            echo '<option value="'.$laTipo[$i]['idttipo'].'" '.$selected.'>'.$laTipo[$i]['nombretip'].'</option>';
                        }
                    ?>
            </select>
            <br>
      <label for="cam_idtmarca">Categoria <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Categoria del bien."></i></strong></label>



             <select type="text" name="idtcategoria" style="width:170px; height:35px" class="form-control" id="cam_idtcategoria" required>
              <option>Seleccione</option>

            </select>
            <br>





 <label for="cam_idtcolor">Color <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="color del bien."></i></strong></label>
             <select type="text" name="idtcolor" style="width:170px; height:35px" class="form-control" id="cam_idtcolor" required>
                <option value="">Seleccione</option>

            </select>










            </div></div>
        </div><br><br><br>






             <br>
             <label for="cam_idtmarca">Marca <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Marca de los bienes."></i></strong></label>
             <select type="text" name="idtmarca" style="width:170px; height:35px" class="form-control" id="cam_idtmarca" required>
                <option value="">Seleccione</option>
                <?php
                      require_once('../clases/clase_marca.php');
                        $lobjMarca=new ClsMarca;
                        $laMarca=$lobjMarca->listar_marcas_activas();
                        for($i=0;$i<count($laMarca);$i++)
                        {
                            $selected=($laMarca[$i]['idtmarca']==$laBien['idtmarca'])?'selected':'';

                            echo '<option value="'.$laMarca[$i]['idtmarca'].'" '.$selected.'>'.$laMarca[$i]['nombremar'].'</option>';
                        }
                    ?>
            </select>


              <br>
               <label for="cam_idtmarca">Modelo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Modelo de los bienes."></i></strong></label>
             <select type="text" name="idtmodelo" style="width:170px; height:35px" class="form-control" id="cam_idtmodelo" required>
                <option value="">Seleccione</option>

            </select>






<br><br>





   <br><br><br><br>


        <div class="col-md-6">
            <div class="form-group">



            </div>
        </div>


    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=bien/bien';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-1">
        <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
