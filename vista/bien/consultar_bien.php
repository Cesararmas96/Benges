<?php
    require_once("../clases/clase_bien.php");
    $lobjBien=new clsBien;

    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjBien->set_id($id);
    $elCatalogo=$lobjBien->consultar_bien();
?>



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

<h1 class="page-header"> Consulta del Catalogo</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras modificar el catalogo.
  </div>

<!-- FIN: RECOMENDACION -->
  <!-- <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script> -->
  <script src="../js/select.js"></script>


</script>
<form role="form" id="formulario" class="form"  action="../controlador/control_bien.php" method="POST"  name="form_bienes">
  <input type="hidden" value="editar_bien" name="operacion" required />
  <input type="hidden"  name="idtbien" id="cam_idtbien" required value="<?php print($elCatalogo['idtcatalogo']) ?>" />

  <div class="row">  
    <div class="col-sm-1"></div>  
    <div class="col-sm-4">      
      <div class="form-group">        
        <label for="cam_idttipo">Tipo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Tipo del bien." required></i></strong></label>
        
        <select type="text" name="idttipo" class="form-control" id="idttipo" required>
          <option value="">Seleccione</option>

      
           
        </select>       
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
          <label for="cam_idtmarca">Clasificacion<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Categoria del bien." required></i></strong></label>
        
          <select type="text" name="idtcategoria" class="form-control" id="cam_idtcategoria" required>
            <option value="">Seleccione</option>

           <!--   <?php
                      // require_once('../clases/clase_categoria.php');
                        // $lobjCategoria=new ClsCategoria;
                        // $laCategoria=$lobjCategoria->consulta_categoria();

                        // for($i=0;$i<count($laCategoria);$i++)
                        // {
                        //     $selected=($laCategoria[$i]['idtcategoria']==$elCatalogo['idtcategoria'])?'selected':'';

                        //     echo '<option value="'.$laCategoria[$i]['idtcategoria'].'" '.$selected.'>'.$laCategoria[$i]['nombrecat'].'</option>';
                        // }
                    ?> -->
          </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-4">
      <div class="form-group">
        
        <label for="cam_idtmarca">Marca <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Marca de los bienes." required></i></strong></label>
        
        <select type="text" name="idtmarca" class="form-control" id="cam_idtmarca" required>
          <option value="">Seleccione</option>
        </select>
        
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        
        <label for="cam_idtmarca">Modelo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Modelo de los bienes." required></i></strong></label>
        
        <select type="text" name="idtmodelo"  class="form-control" id="cam_idtmodelo" required>
          <option value="" >Seleccione</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <div class="form-group">
          <label for="cam_idtcolor">Color <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Color del bien." required></i></strong></label>
           
           <select type="text" name="idtcolor"  class="form-control" id="cam_idtcolor" required>
              <option value="0">Seleccione</option>

               
             <?php
                      require_once('../clases/clase_color.php');
                        $lobjColor=new ClsColor;
                        $elColor=$lobjColor->consulta_color();

                        for($i=0;$i<count($elColor);$i++)
                        {
                            $selected=($elColor[$i]['idtcolor']==$elCatalogo['idtcolor'])?'selected':'';

                            echo '<option value="'.$elColor[$i]['idtcolor'].'" '.$selected.'>'.$elColor[$i]['nombrecol'].'</option>';
                        }
                    ?>
            </select> 


      </div>      
    </div>
    <div class="col-sm-4">
      <div class="form-group">
          <label for="cam_descripcioncat">Descripcion <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Descripcion del catalogo." required></i></strong></label>
           
           <input type="text" name="descripcioncat" class="form-control" value="<?php print($elCatalogo['descripcioncat']); ?>" />   
      </div>      
    </div>
  </div> 



  <div class="row">
    <div class="col-sm-5">
      <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=bien/bien';"><i class="fa fa-chevron-left"></i> Regresar</button>
    </div>
    
    <div class="col-sm-4">
      <input type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar">
    </div>
  </div>

   <div class="status_per"></div>
</form>