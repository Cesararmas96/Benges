
<h1 class="page-header">Registrar Clasificacion</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una clasificacion en el sistema.
  </div>

  <div class="alert alert-danger" role="alert">
   <i class="fa fa-info-circle"></i> Los campos con color amarillo son de caracter obligatorio. 
    <br>
   <i class="fa fa-info-circle"></i> A lado de los nombres de los campos aparece el simbolo:<strong> "?"</strong>, donde aparecera una breve ayuda. 
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
          <div class="form-group has-warning">
         <label for="cam_idttipo">Tipo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Tipo del bien que se asociara al clasificacion"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idttipo" class="form-control" id="cam_idttipo" style="width:200px; height:35px" required>
                <option  value="">Elegir</option>
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
        </div>    

 
    <div class="row">
        <div class="col-md-4">
            <div class="form-group has-warning">
              <label for="cam_nombrecat">Clasificacion<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la categoria que se desea guardar."></i></strong></label>
              <input type="text" placeholder="Ingresar el nombre de la Clasificacion" required name="nombrecat" class="form-control" id="cam_nombrecat" >
            </div>
        </div>
    </div>
     
      <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn  center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=categoria/categoria';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-1">
            <button type="reset" class="btn btn-danger center-block" type="button" name=""><i class="fa fa-remove"></i> Cancelar</button>
        </div>
        <div class="col-md-5">
            <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Guardar</button>
        </div>
      </div>
</form>
<!-- FIN: FORMULARIO -->