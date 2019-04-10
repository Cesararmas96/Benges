
<h1 class="page-header">Registrar Clasificacion</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una clasificacion en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<!-- EMPIEZA: FORMULARIO -->
<?php 
                    
                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':
                                    
                                    echo "<script>alert('Esta categoria ya esta registrada!');</script>";

                                    echo "<br>";
                                    break;
                                

                               
                            }       
                        }
                     ?>
<form role="form" class="form" action="../controlador/control_categoria.php" method="POST" name="form_categoria">
    <input type="hidden" value="registrar_categoria" name="operacion" />
    <input type="hidden"  name="idtcategoria" id="cam_idtcategoria"/>
    
        
        <div class="col-md-4">
         <label for="cam_idttipo">Tipo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Tipo"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idttipo" class="form-control" id="cam_idttipo" style="width:200px; height:35px" required>
                <option value="">Elegir</option>
                  <?php
                    require_once('../clases/clase_tipo.php');
                    $lobjTipo=new clsTipo;
                    $laTipo=$lobjTipo->listar_tipos_activos();
                       for($i=0;$i<count($laTipo);$i++)
                        {
                            echo '<option value="'.$laTipo[$i]['idttipo'].'" >'.$laTipo[$i]['nombretip'].'</option>';
                        }
                    ?>
            </select>

    </div>    

 
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_nombrecat">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la categoria."></i></strong></label>
              <input type="text" required name="nombrecat" class="form-control" id="cam_nombrecat" style="width:200px; height:35px ">
            </div>
        </div>
    </div>
     
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=categoria/categoria';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Aceptar</button>
      </div>
    </div>
</form>
<!-- FIN: FORMULARIO -->