

		<?php
		
             include ("../../rutas.php");
			 require ("../../../pdf/fpdf.php");
			 
			  $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
               mysql_select_db ("tpFinal",$conexion) or die ("no db");
			   
			   
			
			$consulta_viaje= mysql_query("SELECT P.descripcion permiso,R.descripcion rol
											 FROM permiso P inner join
												  dar_permiso DP on P.id_permiso = DP.id_permiso inner join
												  rol R on R.codigo_rol = DP.codigo_rol") or die (mysql_error());
			   
			 
			$pdf = new FPDF();
			$pdf->AddPage();
				
				$pdf->SetFont('Arial','B',12);
	
				$pdf->Cell(150,10,'LISTADO DE PERMISOS',0,0,'C');
				$pdf->Ln(15);
				$pdf->SetFont('Arial', 'B', 12,'C');
				$pdf->Cell(40, 8,'ROL', 1,'C');
				$pdf->Cell(60, 8,"PERMISO", 1,'C');
			
				
				$pdf->Ln(12);
			
			while($viaje = mysql_fetch_array($consulta_viaje)){
				
				
				$pdf->SetFont('Arial', 'I', 12);
				$pdf->Cell(40, 8,$viaje['rol'], 1);
				$pdf->Cell(60, 8,$viaje['permiso'], 1);
			
			
				$pdf->Ln(10);
				
			}


$pdf->Output();
?>