<h1 class="page-header">Registrar Subcategoria</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una subcategoria en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<!-- EMPIEZA: FORMULARIO -->
<?php

                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':

                                    echo "<script>alert('Esta subcategoria ya esta registrada!');</script>";

                                    echo "<br>";
                                    break;



                            }
                        }
                     ?>
<form role="form" class="form" action="../controlador/control_subcategoria.php" method="POST" name="form_subcategoria">
    <input type="hidden" value="registrar_subcategoria" name="operacion" />
    <input type="hidden"  name="idtsubcategoria" id="cam_idtsubcategoria"/>


        <div class="col-md-4">
         <label for="cam_idtcategoria">Categoria <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Categoria"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idtcategoria" class="form-control" id="cam_idtcategoria" style="width:200px; height:35px" maxlength="50" required>
                <option value="">Elegir</option>
                  <?php
                    require_once('../clases/clase_categoria.php');
                    $lobjCategoria=new clsCategoria;
                    $laCategoria=$lobjCategoria->listar_categorias_activas();
                       for($i=0;$i<count($laCategoria);$i++)
                        {
                            echo '<option value="'.$laCategoria[$i]['idtcategoria'].'" >'.$laCategoria[$i]['nombrecat'].'</option>';
                        }
                    ?>
            </select>

    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_nombresubcat">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Subcategoria."></i></strong></label>
              <input type="text" name="nombresubcat" class="form-control" id="cam_nombresubcat" style="width:200px; height:35px" maxlength="25" required>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=subcategoria/subcategoria';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Guardar</button>
      </div>
    </div>
</form>
<!-- FIN: FORMULARIO -->
