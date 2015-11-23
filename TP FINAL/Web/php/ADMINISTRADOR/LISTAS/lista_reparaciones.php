

		<?php
		
             include ("../../rutas.php");
			 require ("../../../pdf/fpdf.php");
			 
			  $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
               mysql_select_db ("tpFinal",$conexion) or die ("no db");
			   
			   
			
			$consulta_reparacion= mysql_query("SELECT MA.descripcion marca,MO.descripcion modelo,REP.descripcion repuesto,O.cantidad cantidad,M.nombre mecanico,
												 R.costo costo,R.fecha fecha
											 FROM transporte T inner join
												  vehiculo V on T.id_vehiculo = V.id_vehiculo inner join
												  marca MA on MA.id_marca = V.id_marca inner join
												  modelo MO on MO.id_modelo = V.id_modelo inner join
												  reparacion R on T.id_transporte = R.id_transporte inner join
												  mecanico M on M.id_mecanico = R.id_mecanico inner join
												  orden O on O.id_orden = R.id_orden inner join
												  repuesto REP on O.id_repuesto = REP.id_repuesto") or die (mysql_error());
			   
			 
			$pdf = new FPDF();
			$pdf->AddPage();
				
				$pdf->SetFont('Arial','B',13);
	
				$pdf->Cell(150,10,'LISTADO DE REPARACIONES',0,0,'C');
				$pdf->Ln(15);
				$pdf->SetFont('Arial', 'B', 9,'C');
				$pdf->Cell(40, 8,'TRANSPORTE', 1,'C');
				$pdf->Cell(40, 8,"MECANICO", 1,'C');
				$pdf->Cell(40, 8,"REPUESTO", 1,'C');
				$pdf->Cell(20, 8,"CANTIDAD", 1,'C');
				$pdf->Cell(20, 8,"COSTO", 1,'C');
				$pdf->Cell(30, 8,"FECHA", 1,'C');

			
				
				$pdf->Ln(12);
			
			while($reparacion = mysql_fetch_array($consulta_reparacion)){
				
				
				$pdf->SetFont('Arial', 'I', 9);
				$pdf->Cell(20, 8,$reparacion['marca'], 1);
				$pdf->Cell(20, 8,$reparacion['modelo'], 1);
				$pdf->Cell(40, 8,$reparacion['mecanico'], 1);
				$pdf->Cell(40, 8,$reparacion['repuesto'], 1);
				$pdf->Cell(20, 8,$reparacion['cantidad'], 1);
				$pdf->Cell(20, 8,$reparacion['costo'], 1);
				$pdf->Cell(30, 8,$reparacion['fecha'], 1);
			
			
				$pdf->Ln(10);
				
			}


$pdf->Output();
?>