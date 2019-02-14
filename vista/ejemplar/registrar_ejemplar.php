<h1 class="page-header"> Registro del Ejemplar </h1>

<form role="form" class="form" action="../controlador/control_ejemplar.php" method="POST" name="form_ejemplar">

  <input type="hidden" value="registrar_ejemplar" name="operacion" />
  <input type="hidden"  name="idtejemplar" id="cam_idtejemplar"/>

  <input type="hidden" id="action" name="action" value="sent">  
  
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="form-group"> 
         <label for="cam_idtcatalogo">Caracteristicas del Catalogo<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Caracteristica del Catalogo."></i></strong></label>

        <select class="form-control" name="idtcatalogo" required>   
         <option value="">Selecciones el Tipo, Categoria, Marca, Modelo y Color del Ejemplar </option>
          <?php
            require_once('../clases/clase_bien.php');
            $lobjCatalogo=new clsBien;
            $laCatalogo=$lobjCatalogo->listar_bien();
            
            for($i=0;$i<count($laCatalogo);$i++){
              $campo1 = $laCatalogo[$i]['nombretip'];
              $campo2 = $laCatalogo[$i]['nombrecat'];
              $campo3 = $laCatalogo[$i]['nombremar'];
              $campo4 = $laCatalogo[$i]['nombremode'];
              $campo5 = $laCatalogo[$i]['nombrecol'];


              $campon = $campo1.', '.$campo2.', '.$campo3.', '.$campo4.', '.$campo5;

            

              echo '<option value="'.$laCatalogo[$i]['idtcatalogo'].'" > '.$campon.'</option>';

              }
          ?>
        </select>
      </div>
    </div>
    
  </div>

  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="cam_serialejemp">Codigo<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Serial del activo."></i></strong></label>
                
        <input type="text"  maxlength="15" name="codigoejemp" class="form-control" id="cam_codigoejemp" required="">
      </div>
    </div>
    
    <div class="col-md-5">
      <div class="form-group">
        <label for="cam_serialejemp">Serial<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Serial del activo."></i></strong></label>
                
        <input type="text"  maxlength="15" name="serialejemp" class="form-control" id="cam_serialejemp">
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="cam_serialejemp">Cantidad<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Serial del activo."></i></strong></label>
                
        <input type="number" min="0" maxlength="3" name="cantidadejemp" class="form-control" id="cam_cantidadejemp" required>
      </div>
    </div>

    <div class="col-md-5">
      <div class="form-group">
        <label for="cam_idtcondicion">Condición <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Condición en el que se encuentra el bien."></i></strong></label>
               
        <select type="text" name="idtcondicion" class="form-control" id="cam_idtcondicion" required>
        
        <option value="">Seleccione</option>
          <?php
            require_once('../clases/clase_condicion.php');
            $lobjCondicion=new clsCondicion;
            $laCondicion=$lobjCondicion->listar_condicion_activas();
            
            for($i=0;$i<count($laCondicion);$i++){

              echo '<option value="'.$laCondicion[$i]['idtcondicion'].'" >'.$laCondicion[$i]['nombrecond'].'</option>';
              }
          ?>
        </select>          
      </div>
    </div>    
  </div>

  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="cam_serialejemp">Descripcion<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Descripción del activo."></i></strong></label>
        
        <textarea name="descripcionejemp" class="form-control" id="cam_descripcionejemp" required></textarea>
      </div>
    </div>
    
  </div>

         

          

  <div class="row">
    <div class="col-md-6">
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">
      <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=ejemplar/ejemplar';"><i class="fa fa-chevron-left"></i> Regresar</button>
    </div>
  
  <div class="col-md-6">
    <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
  </div>
</form>
