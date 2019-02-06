<!--/**
* Registrar Asignatura = vista ; Permite registrar una asignatura.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->


<?php
if (isset($_GET['action'])) {

    include_once('conexion.php');

    $strsql = "SELECT tcatalogo.idtcatalogo, ttipo.nombretip, tcategoria.nombrecat, tmarca.nombremar, tmodelo.nombremode FROM tcatalogo, ttipo, tcategoria, tmarca, tmodelo WHERE tcatalogo.idttipo=ttipo.idttipo AND tcatalogo.idtcategoria=tcategoria.idtcategoria AND  tcatalogo.idtmarca=tmarca.idtmarca AND tcatalogo.idtmodelo=tmodelo.idtmodelo AND idtcatalogo=".$_GET['idtcatalogo'];
    $rs = mysql_query($strsql) or die(mysql_error());
    $row = mysql_fetch_assoc($rs);
    $total_rows = mysql_num_rows($rs);

}

?>


<h1 class="page-header"> Registro de Activos</h1>
<!-- EMPIEZA: RECOMENDACION -->

   <!-- <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <b>Fecha:<input  type="date" width="10%" ></b>
	</div>

   </div>-->


<!-- FIN: RECOMENDACION -->
 <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
 <script src="../js/select.js"></script>
  <script src="../js/registros.js"></script>

<script>
function buscar()
{
  var opcion= document.getElementById('cam_idtcatalogo').value;
  window.location.href='http://192.168.0.102/programacion/bienesNacionales/vista/intranet.php?vista=ejemplar/registrar_ejemplar&action=sent&idtcatalogo='+opcion;
}
</script>

  <form role="form" class="form" action="../controlador/control_ejemplar.php" method="POST" name="form_ejemplar">
    <input type="hidden" value="registrar_ejemplar" name="operacion" />
    <input type="hidden"  name="idtejemplar" id="cam_idtejemplar"/>


   <input type="hidden" id="action" name="action" value="sent">

        <div class="col-md-3">
            <div class="form-group">
             <div class="form-group">

               <label for="cam_idtcondicion">Catalogo<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Catalogo en el que estará el activo"></i></strong></label>
           <select type="text" style="width:170px; height:35px" class="form-control" id="cam_idtcatalogo" onchange="return buscar();" >
             <option value="">Seleccione</option>
             <?php
                 require_once('../clases/clase_bien.php');
                 $lobjBien=new clsBien;
                 $laBien=$lobjBien->listar_catalogos_activos();
                    for($i=0;$i<count($laBien);$i++)
                     {
                         echo '<option value="'.$laBien[$i]['idtcatalogo'].'" >'.$laBien[$i]['nombretip']." ".$laBien[$i]['nombrecat']." ".$laBien[$i]['nombresubcat']." ".$laBien[$i]['nombremar']." ".$laBien[$i]['nombremode'].'</option>';
                     }
                 ?>
           </select>
           <br>

         </div></div>
         </div>


         <div class="col-md-3">
             <div class="form-group">
              <div class="form-group">

         <br>
           <input type="text" style="width:170px; height:35px" class="form-control" name="idtcatalogo" id="cam_idtca"  value="<?php echo ($row['idtcatalogo']);?>" readonly="readonly">
         </div></div></div>


<div class="col-md-3">
    <div class="form-group">
     <div class="form-group">

<label for="cam_serialejemp">Tipo<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Serial del activo."></i></strong></label>
  <input type="text" style="width:170px; height:35px" maxlength="8"  class="form-control" name="idttipo" id="cam_idttipo" value="<?php  echo $row['nombretip']; ?>" readonly="readonly" >
</div></div></div>


  <div class="col-md-3">
      <div class="form-group">
       <div class="form-group">
<label for="cam_idtcondicion">Categoria <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Condición en el que se encuentra el bien."></i></strong></label>
 <input type="text"  style="width:170px; height:35px" class="form-control" name="idtcategoria" id="cam_idtcategoria"  value="<?php echo($row['nombrecat']);?>" readonly="readonly">

<br>
</div>
</div>
</div>
<div class="col-md-3">
  <div class="form-group">
   <div class="form-group">
   <label for="cam_idtcondicion">subcategoria<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Sede en el que se encuentra el bien."></i></strong></label>
 <input type="text" style="width:170px; height:35px" class="form-control" name="idtsubcategoria" id="cam_idtsubcategoria" value="<?php echo($row['nombresubcat']);?>"  readonly="readonly">


<br>
</div>
</div>
</div>
<div class="col-md-3">
  <div class="form-group">
   <div class="form-group">
   <label for="cam_idtcondicion">Marca<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Departamento en el que se encuentra el bien."></i></strong></label>
 <input type="text"  style="width:170px; height:35px" class="form-control" name="idtmarca" id="cam_idtmarca" value="<?php echo($row['nombremar']);?>" readonly="readonly" >


<br>
</div>
</div>
</div>
<div class="col-md-3">
  <div class="form-group">
   <div class="form-group">
   <label for="cam_idtcondicion">Modelo<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Departamento en el que se encuentra el bien."></i></strong></label>
 <input type="text"  style="width:170px; height:35px" class="form-control" name="idtmodelo" id="cam_idtmodelo" value="<?php echo($row['nombremode']);?>" readonly="readonly" >


<br>
</div>
</div>
</div>
______________________________________________________________________________________________________________________________________________________________________

<br>
<br>
            <div class="col-md-3">
                <div class="form-group">
                 <div class="form-group">

     <label for="cam_serialejemp">Serial<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Serial del activo."></i></strong></label>
              <input type="text" style="width:170px; height:35px" maxlength="8" name="serialejemp" class="form-control" id="cam_serialejemp" >
</div></div></div>


              <div class="col-md-3">
                  <div class="form-group">
                   <div class="form-group">
      <label for="cam_idtcondicion">Condición <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Condición en el que se encuentra el bien."></i></strong></label>
             <select type="text" name="idtcondicion" style="width:170px; height:35px" class="form-control" id="cam_idtcategoria" required>
                <option value="">Seleccione</option>
                <?php
                    require_once('../clases/clase_condicion.php');
                    $lobjCondicion=new clsCondicion;
                    $laCondicion=$lobjCondicion->listar_condicion_activas();
                       for($i=0;$i<count($laCondicion);$i++)
                        {
                            echo '<option value="'.$laCondicion[$i]['idtcondicion'].'" >'.$laCondicion[$i]['nombrecond'].'</option>';
                        }
                    ?>
            </select>
            <br>
          </div>
        </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
               <div class="form-group">
               <label for="cam_idtcondicion">Sede<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Sede en el que se encuentra el bien."></i></strong></label>
             <select type="text" name="idsede" style="width:170px; height:35px" class="form-control" id="cam_idsede" required>

            </select>
            <br>
          </div>
        </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
               <div class="form-group">
               <label for="cam_idtcondicion">Departamento<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Departamento en el que se encuentra el bien."></i></strong></label>
             <select type="text" name="iddepartamento" style="width:170px; height:35px" class="form-control" id="cam_iddepartamento" required>
               <option value="">Seleccione</option>

            </select>
            <br>
          </div>
        </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
               <div class="form-group">
 <label for="cam_serialejemp">Observación<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Descripción del activo."></i></strong></label>
             <textarea name="descripcionejemp" class="form-control" id="cam_descripcionejemp"></textarea>
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
           </div>



</form>
