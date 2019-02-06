<?php
   /**
   * Reporte listado de cursos activos
   *
   * @package    ModeloAulafrontino
   * @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
   * @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
   * @link       https://github.com/EquipoAulaFrontino
   * @version    v1.0
   */
   require_once("../libreria/fpdf/clase_fpdf.php");
   require_once("../clases/clase_ejemplar.php");
   $lobjEjemplar=new clsEjemplar();
   $listado_ejemplar=$lobjEjemplar->listar_ejemplar();
   ob_end_clean();

   $lobjPdf=new clsFpdf();
   $lobjPdf->AliasNbPages();

   //AddPage(Orientacion,tamaño)
   //Orientación de la pagina P=Vertical y L=Horizontal
   //Tamaño de la pagina letter=carta y legal=oficio, exiten más pero estos son los mas comunes
   $lobjPdf->AddPage("P","legal");
   //SetFont(Tipo de fuente,negrilla,tamaño de la fuente)
   $lobjPdf->SetFont("arial","B",12);
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(3);

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)
   $lobjPdf->Cell(0,6,utf8_decode("Listado de Ejemplar"),0,1,"C");
   $lobjPdf->Cell(35,6,utf8_decode("Codigo"),1,0,"C");
   $lobjPdf->Cell(30,6,utf8_decode("Serial"),1,0,"C");
   $lobjPdf->Cell(25,6,utf8_decode("Estado"),1,0,"C");
   $lobjPdf->Cell(30,6,utf8_decode("Condición"),1,0,"C");
   $lobjPdf->Cell(40,6,utf8_decode("Departamento"),1,0,"C");
  $lobjPdf->Cell(40,6,utf8_decode("Sede"),1,0,"C");
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
   $lobjPdf->SetFont("arial","",12);
   for($i=0;$i<count($listado_ejemplar);$i++)
   {

      $lobjPdf->SetFont("arial","",10);
      $lobjPdf->Cell(35,6,utf8_decode($listado_ejemplar[$i]['idtejemplar']),1,0,"C");
      $lobjPdf->Cell(30,6,utf8_decode($listado_ejemplar[$i]['serialejemp']),1,0,"C");


      $lobjPdf->Cell(25,6,utf8_decode($listado_ejemplar[$i]['nombreestado']),1,0,"C");
      $lobjPdf->Cell(30,6,utf8_decode($listado_ejemplar[$i]['nombrecond']),1,0,"C");
      $lobjPdf->Cell(40,6,utf8_decode($listado_ejemplar[$i]['denominacion']),1,0,"C");
      $lobjPdf->Cell(40,6,utf8_decode($listado_ejemplar[$i]['nombresede']),1,0,"C");



      //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);

   }

   $lobjPdf->Output();

?>
