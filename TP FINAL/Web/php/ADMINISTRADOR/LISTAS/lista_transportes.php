

		<?php
		
             include ("../../rutas.php");
			 require ("../../../pdf/fpdf.php");
			 
			  $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
               mysql_select_db ("tpFinal",$conexion) or die ("no db");
			   
			   
			
			$consulta_transporte= mysql_query("SELECT MA.descripcion marca,MO.descripcion modelo,T.patente patente,T.num_chasis chasis,T.num_motor motor,T.anio_fabricacion fecha
											 FROM transporte T inner join
												  vehiculo V on T.id_vehiculo = V.id_vehiculo inner join
												  marca MA on MA.id_marca = V.id_marca inner join
												  modelo MO on MO.id_modelo = V.id_modelo") or die (mysql_error());
			   
			 
			$pdf = new FPDF();
			$pdf->AddPage();
				
				$pdf->SetFont('Arial','B',12);
	
				$pdf->Cell(150,10,'LISTADO DE TRANSPORTES',0,0,'C');
				$pdf->Ln(15);
				$pdf->SetFont('Arial', 'B', 12,'C');
				$pdf->Cell(50, 8,'TRANSPORTE', 1,'C');
				$pdf->Cell(30, 8,"PATENTE", 1,'C');
				$pdf->Cell(40, 8,"NUMERO CHASIS", 1,'C');
				$pdf->Cell(38, 8,"NUMERO MOTOR", 1,'C');
				$pdf->Cell(35, 8,"FECH FABRICA", 1,'C');
				$pdf->Ln(12);
			
			while($transporte = mysql_fetch_array($consulta_transporte)){
				
				
				$pdf->SetFont('Arial', 'I', 12);
				$pdf->Cell(25, 8,$transporte['marca'], 1);
				$pdf->Cell(25, 8,$transporte['modelo'], 1);
				$pdf->Cell(30, 8,$transporte['patente'], 1);
				$pdf->Cell(40, 8,$transporte['chasis'], 1);
				$pdf->Cell(38, 8,$transporte['motor'], 1);
				$pdf->Cell(35, 8,$transporte['fecha'], 1);
				$pdf->Ln(10);
				
			}


$pdf->Output();
?>