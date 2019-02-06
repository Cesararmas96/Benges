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
   $consulta_ejemplar=$lobjEjemplar->consultar_bien();
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
   $lobjPdf->Cell(0,6,utf8_decode("ejemplar"),0,1,"C");
   $lobjPdf->Cell(28,6,utf8_decode("Ejemplar"),1,0,"C");
   $lobjPdf->Cell(60,6,utf8_decode("Personal"),1,0,"C");
   $lobjPdf->Cell(60,6,utf8_decode("Cargo"),1,0,"C");
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
   $lobjPdf->SetFont("arial","",12);
   for($i=0;$i<count($consulta_ejemplar);$i++)
   {
      $lobjPdf->Cell(28,6,utf8_decode($consulta_ejemplar[$i]['idtmarca']),1,0,"C");
      $lobjPdf->Cell(60,6,utf8_decode($consulta_ejemplar[$i]['nomyape']),1,0,"C");
      $lobjPdf->Cell(60,6,utf8_decode($consulta_ejemplar[$i]['nombrerol']),1,0,"C");

      //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
      
   }

   $lobjPdf->Output();

?>