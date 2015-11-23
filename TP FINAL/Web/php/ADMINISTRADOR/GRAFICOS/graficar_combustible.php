<?php
 include ("../../rutas.php"); 
	
$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			 $id_transporte = $_GET["ID"];
			 
			 $consulta_datos= mysql_query("SELECT combustible_cons combustible,fecha_inicio fecha
										   FROM viaje 										
										   WHERE id_transporte='".$id_transporte."' ")or die(mysql_error());
			
			$cant = mysql_num_rows($consulta_datos);

			
			$fecha=array();
			$combustible=array();
    if($cant !=0){
			while($row = mysql_fetch_assoc($consulta_datos)) { 
				
				$datos= $row; 
	
				$combustible[] = $datos["combustible"];
				$fecha[] = $datos["fecha"];
				
				
    
			} 


			
include ("./jpgraph-3.5.0b1/src/jpgraph.php");
include ("./jpgraph-3.5.0b1/src/jpgraph_bar.php");


// Create the graph. These two calls are always required
$graph = new Graph(900,400,"auto"); 
$graph->SetScale("textint");
$tema = new AquaTheme;
$graph->SetTheme($tema);

$graph->SetShadow();
$graph->img->SetMargin(100,30,30,100);

// Create the bar plots
$curva = new BarPlot($combustible);
$Angulo=83;

$graph->Add($curva);
$graph->title->Set("Consumo De Combustible Del Transporte En Cada Viaje");
$graph->xaxis->SetTickLabels($fecha);
$graph->xaxis->title->Set("Viajes");
//$graph->xaxis->SetLabelAngle( $Angulo );
$graph->yaxis->title->Set("Litros De Combustible");
$curva->SetWidth(30);



// Display the graph
$graph->Stroke();
}else{
	echo "EL TRANSPORTE SELECCIONADO NO REALIZO NINGUN VIAJE";
}
?>