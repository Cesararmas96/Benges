<h1 class="page-header">Registrar Modelo</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un modelo en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<!-- EMPIEZA: FORMULARIO -->
<?php

                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':

                                    echo "<script>alert('Este modelo ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;



                            }
                        }
                     ?>
<form role="form" class="form" action="../controlador/control_modelo.php" method="POST" name="form_modelo">
    <input type="hidden" value="registrar_modelo" name="operacion" />
    <input type="hidden"  name="idtmodelo" id="cam_idtmodelo"/>


        <div class="col-md-4">
         <label for="cam_idtmarca">Marca <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Marca"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idtmarca" class="form-control" id="cam_idtmarca" style="width:200px; height:35px" maxlength="50" required>
                <option value="">Elegir</option>
                  <?php
                    require_once('../clases/clase_marca.php');
                    $lobjMarca=new clsMarca;
                    $laMarca=$lobjMarca->listar_marcas_activas();
                       for($i=0;$i<count($laMarca);$i++)
                        {
                            echo '<option value="'.$laMarca[$i]['idtmarca'].'" >'.$laMarca[$i]['nombremar'].'</option>';
                        }
                    ?>
            </select>

    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_nombremode">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Modelo."></i></strong></label>
              <input type="text" name="nombremode" class="form-control" id="cam_nombremode" style="width:200px; height:35px" maxlength="25" required>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=modelo/modelo';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Aceptar</button>
      </div>
    </div>
</form>
<!-- FIN: FORMULARIO -->
