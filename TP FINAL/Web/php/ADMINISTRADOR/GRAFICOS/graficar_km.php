<?php
 include ("../../rutas.php"); 
	
$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			 $id_transporte = $_GET["ID"];
			 
			 $consulta_datos= mysql_query("SELECT km,fecha
										   FROM reparacion										
										   WHERE id_transporte='".$id_transporte."' ")or die(mysql_error());
			
			$cant = mysql_num_rows($consulta_datos);

			
			$fecha=array();
			$km=array();
    
			while($row = mysql_fetch_assoc($consulta_datos)) { 
				
		
	
				$km[] = $row["km"];
				$fecha[] = $row["fecha"];
				
    
			} 
	

			
include ("./jpgraph-3.5.0b1/src/jpgraph.php");
include ("./jpgraph-3.5.0b1/src/jpgraph_bar.php");



// Create the graph. These two calls are always required
$graph = new Graph(900,400,"auto"); 
$graph->SetScale("textint");
$tema = new GreenTheme;
$graph->SetTheme($tema);

$graph->SetShadow();
$graph->img->SetMargin(100,30,30,100);

// Create the bar plots
$curva = new BarPlot($km);
$Angulo=83;

$graph->Add($curva);
$graph->title->Set("Rendimiento de KM Entre Services");
$graph->xaxis->SetTickLabels($fecha);
$graph->xaxis->title->Set("Reparaciones");
//$graph->xaxis->SetLabelAngle( $Angulo );
$graph->yaxis->title->Set("KM recorridos");
$curva->SetWidth(30);



// Display the graph
$graph->Stroke();
?>