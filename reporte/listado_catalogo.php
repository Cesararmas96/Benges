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
   require_once("../clases/clase_bien.php");
   $lobjBien=new clsBien();
   $listado_bien=$lobjBien->listar_bien();
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
   $lobjPdf->Ln(1);

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)
   $lobjPdf->Cell(0,6,utf8_decode("Catalogo de los Bienes"),0,1,"C");
   $lobjPdf->Ln(10);

   $lobjPdf->Cell(24,6,utf8_decode("Tipo"),1,0,"C");
   $lobjPdf->Cell(30,6,utf8_decode("Clasificacion"),1,0,"C");
   $lobjPdf->Cell(25,6,utf8_decode("Marca"),1,0,"C");
   $lobjPdf->Cell(25,6,utf8_decode("Modelo"),1,0,"C");
   $lobjPdf->Cell(10,6,utf8_decode("Cant"),1,0,"C");
   
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
   $lobjPdf->SetFont("arial","",9);
   for($i=0;$i<count($listado_bien);$i++)
   {  
      $lobjPdf->Cell(24,6,utf8_decode($listado_bien[$i]['nombretip']),1,0,"C");
      $lobjPdf->Cell(30,6,utf8_decode($listado_bien[$i]['nombrecat']),1,0,"C");
      $lobjPdf->Cell(25,6,utf8_decode($listado_bien[$i]['nombremar']),1,0,"C");
      $lobjPdf->Cell(25,6,utf8_decode($listado_bien[$i]['nombremode']),1,0,"C");
      $lobjPdf->Cell(10,6,utf8_decode($listado_bien[$i]['cantidadcat']),1,0,"C");

      //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
      
   }

   $lobjPdf->Output();

?>