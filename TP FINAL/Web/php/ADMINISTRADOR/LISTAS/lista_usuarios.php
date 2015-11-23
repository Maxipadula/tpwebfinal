

		<?php
		
             include ("../../rutas.php");
			 require ("../../../pdf/fpdf.php");
			 
			  $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
               mysql_select_db ("tpFinal",$conexion) or die ("no db");
			   
			   
			
			$consulta_usuarios= mysql_query("SELECT U.nombre nombre,U.usuario user,U.num_doc doc,R.descripcion rol,T.descripcion tipo
											 FROM usuario U inner join
												  rol R on U.codigo_rol = R.codigo_rol inner join
												  tipo_doc T on T.id_tipo_doc = U.id_tipo_doc") or die (mysql_error());
			   
			 
			$pdf = new FPDF();
			$pdf->AddPage();
				
				$pdf->SetFont('Arial','B',12);
	
				$pdf->Cell(150,10,'LISTADO DE EMPLEADOS',0,0,'C');
				$pdf->Ln(15);
				$pdf->SetFont('Arial', 'B', 12);
				$pdf->Cell(50, 8,'Nombre y Apellido', 1);
				$pdf->Cell(30, 8,"TIPO DOC", 1);
				$pdf->Cell(40, 8,"NUMERO DOC", 1);
				$pdf->Cell(35, 8,"ROL", 1);
				$pdf->Ln(12);
			
			while($usuario = mysql_fetch_array($consulta_usuarios)){
				
				
				$pdf->SetFont('Arial', 'I', 12);
				$pdf->Cell(50, 8,$usuario['nombre'], 1);
				$pdf->Cell(30, 8,$usuario['tipo'], 1);
				$pdf->Cell(40, 8,$usuario['doc'], 1);
				$pdf->Cell(35, 8,$usuario['rol'], 1);
				$pdf->Ln(10);
				
			}


$pdf->Output();
?>
		
		
