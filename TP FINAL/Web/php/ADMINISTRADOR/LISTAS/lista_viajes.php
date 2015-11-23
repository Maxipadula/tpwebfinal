

		<?php
		
             include ("../../rutas.php");
			 require ("../../../pdf/fpdf.php");
			 
			  $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
               mysql_select_db ("tpFinal",$conexion) or die ("no db");
			   
			   
			
			$consulta_viaje= mysql_query("SELECT MA.descripcion marca,MO.descripcion modelo,V.destino destino,U.nombre chofer,A.descripcion acoplado,
												 V.origen origen,V.cliente cliente,V.fecha_inicio inicio,V.fecha_fin fin,V.km_recorridos km
											 FROM transporte T inner join
												  viaje V on T.id_transporte = V.id_transporte inner join
												  usuario U on U.id_usuario = V.id_usuario inner join
												  acoplado A  on A.id_acoplado = V.id_acoplado inner join
												  vehiculo VE on VE.id_vehiculo = T.id_vehiculo inner join
												  modelo MO on MO.id_modelo = VE.id_modelo inner join
												  marca MA on MA.id_marca = VE.id_marca") or die (mysql_error());
			   
			 
			$pdf = new FPDF();
			$pdf->AddPage();
				
				$pdf->SetFont('Arial','B',12);
	
				$pdf->Cell(150,10,'LISTADO DE VIAJES',0,0,'C');
				$pdf->Ln(15);
				$pdf->SetFont('Arial', 'B', 12,'C');
				$pdf->Cell(40, 8,'TRANSPORTE', 1,'C');
				$pdf->Cell(40, 8,"CHOFER", 1,'C');
				$pdf->Cell(23, 8,"ORIGEN", 1,'C');
				$pdf->Cell(23, 8,"DESTINO", 1,'C');
				$pdf->Cell(35, 8,"INICIO", 1,'C');
				$pdf->Cell(40, 8,"FIN", 1,'C');
				
				$pdf->Ln(12);
			
			while($viaje = mysql_fetch_array($consulta_viaje)){
				
				
				$pdf->SetFont('Arial', 'I', 10);
				$pdf->Cell(20, 8,$viaje['marca'], 1);
				$pdf->Cell(20, 8,$viaje['modelo'], 1);
				$pdf->Cell(40, 8,$viaje['chofer'], 1);
				$pdf->Cell(23, 8,$viaje['origen'], 1);
				$pdf->Cell(23, 8,$viaje['destino'], 1);
				$pdf->Cell(35, 8,$viaje['inicio'], 1);
				$pdf->Cell(40, 8,$viaje['fin'], 1);
			
				$pdf->Ln(10);
				
			}


$pdf->Output();
?>