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
   $lobjPdf->SetFont("arial","BU",14);


   

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)
   $lobjPdf->Cell(0,6,utf8_decode("Catalogo de los Bienes Muebles"),0,1,"C");
   $lobjPdf->ln(4);
   $lobjPdf->SetFillColor(123,135,240);


   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->SetX(25);
   $lobjPdf->Cell(35,8,utf8_decode("Tipo"),0,0,"C",1);
   $lobjPdf->Cell(40,8,utf8_decode("Clasificacion"),0,0,"C",1);
   $lobjPdf->Cell(40,8,utf8_decode("Marca"),0,0,"C",1);
   $lobjPdf->Cell(40,8,utf8_decode("Modelo"),0,0,"C",1);
   $lobjPdf->Cell(20,8,utf8_decode("Cant"),0,0,"C",1);
   
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(8);
   $lobjPdf->SetFont("arial","",12);
   $lobjPdf->SetLineWidth(0.5);
   $lobjPdf->SetDrawColor(255,255,255,255);
   $lobjPdf->SetFillColor(224,224,224);
   for($i=0;$i<count($listado_bien);$i++)
   {  
      $lobjPdf->SetX(25);

      $lobjPdf->Cell(35,8,utf8_decode($listado_bien[$i]['nombretip']),1,0,"C",1);
      $lobjPdf->Cell(40,8,utf8_decode($listado_bien[$i]['nombrecat']),1,0,"C",1);
      $lobjPdf->Cell(40,8,utf8_decode($listado_bien[$i]['nombremar']),1,0,"C",1);
      $lobjPdf->Cell(40,8,utf8_decode($listado_bien[$i]['nombremode']),1,0,"C",1);
      $lobjPdf->Cell(20,8,utf8_decode($listado_bien[$i]['cantidadcat']),1,0,"C",1);

      //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
      
   }

   $lobjPdf->Output('I','listado de Catalogo.pdf');

?>