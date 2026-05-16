<?php
//include
require('./fpdf/fpdf.php');
//vincular con la carpeta y acceder a la utilerÃ­a
//L: Horizontal, milimetros, tamaño
$pdf=new FPDF('P','mm','A4');   // P Orientacion Vertical - L Horizontal
//Crear nueva pagina
$pdf->AddPage();
//Definir fuente arial, bold, tamaño 12
//B:bold I:italica U:subrayado
$pdf->SetFont('Arial','B',14);
//ancho, alto, cadena de caracteres, sin borde 0, con salto 1, centrado
//C: centrado  L:left   R:right
$pdf->Cell(30,1,utf8_decode('Lista de Clientes'),0,1,'C',0);
$pdf->Cell(30,10,"",0,1,'C',0);
$pdf->Cell(30,10,"",0,1,'C',0);
$pdf->SetFont('Arial','I',10);

//ENCABEZADO
$pdf->Cell(10,10,"Num",1,0,'L',0);
$pdf->Cell(50,10,"rfc",1,0,'L',0);
$pdf->Cell(50,10,"Nombre",1,0,'C',0);
$pdf->Cell(50,10,"E-mail ",1,1,'R',0);

$conexion=mysqli_connect("localhost","root","","e_facturas") or die("problemas en la conexion");
$registros=mysqli_query($conexion,"select * from clientes order by rfc") 
or die("Problemas en el select:".mysqli_error($conexion));
//REGISTROS
$cuenta=0;
while ($row=$registros->fetch_assoc()) 
{
	$cuenta=$cuenta+1;
	$pdf->Cell(10,10,$cuenta,1,0,'L',0); // L -left, 0 - SIN SALTO
	$pdf->Cell(50,10,$row['rfc'],1,0,'L',0);// L -left, 0 - SIN SALTO
	$pdf->Cell(50,10,utf8_decode ($row['nombre']),1,0,'C',0);// L -left, 0 - SIN SALTO
	$pdf->Cell(50,10,$row['correo_e'],1,1,'R',0);// R -RIGHT, 1- CON SALTO
}
//TOTAL
$pdf->Cell(30,15,"",0,1,'C',0);
$pdf->Cell(30,15,"Total Clientes ".$cuenta,0,1,'C',0);
//Cerrar el documento y enviarlo al navegador
$pdf->Output();
?>