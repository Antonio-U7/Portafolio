<?php
	//include
	require('./fpdf/fpdf.php');
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('logo.png',10,8,33);// (ARCHIVO, POSX, POSY, ANCHO)
			$this->SetFont('Arial','B',15);//TAÑAO 15
			$this->Cell(80);
			$this->Cell(0,10,'UPSLP',0,0,'R');
			$this->Ln(20);
		}
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}	
	// Creación del objeto de la clase heredada
	$pdf = new PDF();	
	$pdf->AddPage();	
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,utf8_decode('Página pdf con footer!'),0,1);//consalto
	$pdf->SetFont('Times','',12);	
	for($i=1;$i<=40;$i++)		
		$pdf->Cell(0,10,utf8_decode('Imprimiendo línea número '.$i),0,1);
	$pdf->Output();
?>