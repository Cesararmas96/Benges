<?php
  if(isset($_GET['datos'])){
    
    switch ($_GET['datos']) {
       case 'existe':
            echo "<script>alert('Este catalogo ya esta registrado!');</script>";
            echo "<br>";
            break;
    }
  }
?>


<h1 class="page-header"> Registro de Catalogo</h1>

<div class="alert alert-info" role="alert">
  <strong><i class="fa fa-info-circle"></i></strong> Aquí podras realizar  el registro de los catalogos de los Bienes.
</div>

<script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
<script src="../js/select.js"></script>

<form role="form" class="form"  action="../controlador/control_bien.php"  method="POST" name="form_bienes" onsubmit="return validacion()">
  <input type="hidden" value="registrar_bien" name="operacion"/>
  <input type="hidden"  name="idtbien" id="cam_idtbien"/>

  <div class="row">  
    <div class="col-sm-1"></div>  
    <div class="col-sm-4">      
      <div class="form-group">        
        <label for="cam_idtmarca">Tipo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Tipo del bien." required></i></strong></label>
        
        <select type="text" name="idttipo" class="form-control" id="cam_idttipo" required>
          <option>Seleccione</option>
        </select>       
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
          <label for="cam_idtmarca">Clasificacion<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Categoria del bien."></i></strong></label>
        
          <select type="text" name="idtcategoria" class="form-control" id="cam_idtcategoria" required>
            <option>Seleccione</option>
          </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-4">
      <div class="form-group">
        
        <label for="cam_idtmarca">Marca <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Marca de los bienes."></i></strong></label>
        
        <select type="text" name="idtmarca" class="form-control" id="cam_idtmarca" required>
          <option value="">Seleccione</option>
        </select>
        
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        
        <label for="cam_idtmarca">Modelo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Modelo de los bienes."></i></strong></label>
        
        <select type="text" name="idtmodelo"  class="form-control" id="cam_idtmodelo" required>
          <option >Seleccione</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <div class="form-group">
          <label for="cam_idtmarca">Color <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Color del bien."></i></strong></label>
           
           <select type="text" name="idtcolor"  class="form-control" id="cam_idtcolor" required>
              <option value="">Seleccione</option>
            </select>        
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
</form>

<script>  
  function validacion(){

    var tipo = document.getElementById('cam_idttipo')
    var categoria = document.getElementById('cam_idtcategoria').value
    var marca = document.getElementById('cam_idtmarca').value
    var modelo = document.getElementById('cam_idtmodelo').value
    var color = document.getElementById('cam_idtcolor').value

    if(tipo.value == 0){
    alert('Ingrese al bien su tipo');}
    
       
     
  } 

  // if (categoria == ''){
  //   alert('Ingrese al bien su categoria')
  //   return false
  //  }


  // if (marca == ''){
  //   alert('Ingrese al bien su marca')
  //   return false
  //  }


  // if (modelo == ''){
  //   alert('Ingrese al bien su modelo')
  //   return false
  //  }


  // if (color == ''){
  //   alert('Ingrese al bien su color')
  //   return false
  // }
</script>


