<?php
    require('./fpdf/fpdf.php');
            $pdf=new FPDF('L','mm','A4');
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',14);

            $pdf->Cell(100,1,utf8_decode('Resultado de elecciones 2024 en USA'),0,1,'C',0);
            $pdf->Cell(30,10,"",0,1,'C',0);
            $pdf->Cell(30,10,"",0,1,'C',0);
            $pdf->SetFont('Arial','I',10);

            $pdf->Cell(50,10,"Estado",1,0,'L',0);
            $pdf->Cell(50,10,"Abrev.",1,0,'C',0);
            $pdf->Cell(50,10,"% Democrata",1,0,'C',0);
            $pdf->Cell(50,10,"% Republicano",1,0,'C',0);
            $pdf->Cell(50,10,"Grafica",1,1,'R',0);

            $conexion=mysqli_connect("localhost","root","","votos2024") or die("problemas en la conexion");
            $registros=mysqli_query($conexion,"SELECT * FROM votos") or die("Problemas en el select:".mysqli_error($conexion));

            while ($row=$registros->fetch_assoc()) 
            {
                $pdf->Cell(50,10,$row['estado'],1,0,'L',0); // L -left, 0 - SIN SALTO
                $pdf->Cell(50,10,$row['abrev'],1,0,'C',0);// L -left, 0 - SIN SALTO
                $pdf->Cell(50,10,utf8_decode ($row['democrata']."%"),1,0,'C',0);// L -left, 0 - SIN SALTO
                $pdf->Cell(50,10,$row['republicano']."%",1,0,'C',0);// R -RIGHT, 1- CON SALTO
                $pdf->Image('na.jpg',$pdf->GetX()+2,$pdf->GetY()+5,$row['democrata']*0.50,2);
                $pdf->Cell(50,10,$pdf->Image('azul.jpg',$pdf->GetX()+2,$pdf->GetY()+1,$row['republicano']*0.50,2),1,1,'R',0);
                
            }
            $pdf->Output();  
        
?>