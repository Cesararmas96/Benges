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

<!-- <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script> -->
<script src="../js/select.js"></script>

<form role="form" id="formulario" class="form"  action="../controlador/control_bien.php" method="POST"  name="form_bienes">
  <input type="hidden" value="registrar_bien" name="operacion" required />
  <input type="hidden"  name="idtbien" id="cam_idtbien" required />

  <div class="row">  
    <div class="col-sm-1"></div>  
    <div class="col-sm-4">      
      <div class="form-group">        
        <label for="cam_idtmarca">Tipo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Tipo del bien." required></i></strong></label>
        
        <select type="text" name="idttipo" class="form-control" id="cam_idttipo" required>
          <option value="">Seleccione</option>
        </select>       
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
          <label for="cam_idtmarca">Clasificacion<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Categoria del bien." required></i></strong></label>
        
          <select type="text" name="idtcategoria" class="form-control" id="cam_idtcategoria" required>
            <option value="">Seleccione</option>
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
          <label for="cam_idtmarca">Color <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Color del bien." required></i></strong></label>
           
           <select type="text" name="idtcolor"  class="form-control" id="cam_idtcolor" required>
              <option value="0">Seleccione</option>
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
    var formulario = document.getElementById('formulario');
    var color = formulario.cam_idttipo;
   
    function Validacion(e){
      if (color.value == "0") {
        alert('nada')
        e.preventDefault()

      }

    
    }
    formulario.addEventListener('submit',Validacion); 


</script>


