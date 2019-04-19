<?php
	require_once("../libreria/fpdf/fpdf.php");
	class clsFpdf extends FPDF
	{
		//Las funciones Header y Footer se ejecutan atraves de la inicialización de fpdf.php
		
		//Cabecera de página
		public function Header()
		{
			date_default_timezone_set('America/Caracas');
        	
        	//fecha al momento de generar el pdf
	        $lcFechaActual = date("d/m/Y").' '.date('h:i a', time() - 3600 * date('I'));
	        $this->SetFont('Arial', 'I', 8);
	        $this->Cell(0, 4, $lcFechaActual, 0, 1, "R");

	      	//Logo
	     	
	     	$this->SetLineWidth(0.5);	
	     	$this->SetFont('Arial','B',13);
	     	$this->Image('../images/logo.png', 20,10, 50, 'png');
	     	$this->SetY(15);
	     	$this->SetX(75);
	     	$this->Cell(60,5,utf8_decode('CENTRO DE FORMACIÓN'), 'L' ,'L');
	     	$this->Ln();
	     	$this->SetX(75);
	     	$this->Cell(60,5,utf8_decode('PORTUGUESA'),'L','L');
	     	
	     	$this->SetFont('Arial','B', 10);
	     	$this->SetXY(-43,28);	     	
	     	$this->Cell(35,7,'www.unes.edu.ve');

	     	$this->SetFont('Arial','', 7);
	     	$this->SetXY(120,34);
	     	$this->Cell(35,5,'"Formar para transformar garantizando el derecho de la seguridad ciudadana"');




	     	$this->SetLineWidth(0.4);
	     	$this->Line(17,35,205,35);	      
	        $this->Ln(35);
	      
	       
	    
	        
		}

		//Pie de página
		public function Footer()
		{	
			// $this->SetTopMargin(10);
			$this->AliasNbPages();
			$this->SetFont('Arial','',9);
			$this->SetY(-33);
			$this->SetX(-20);
			$this->SetDrawColor(0,0,0);

			$this->Cell(0,10, 'Pag. '.$this->PageNo().'/{nb}',0,0,'C'); 
			//Posición: con respecto al final
			$this->SetY(-25);
			//Arial italic 8
			$this->SetFont("Arial","I",8);


			
		}
	}
?>
