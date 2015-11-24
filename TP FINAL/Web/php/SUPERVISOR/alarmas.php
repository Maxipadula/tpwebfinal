<?php
	include ('../rutas.php');
	 
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
	$alarma = 10000;


										   
	$consulta_transportes = mysql_query ("SELECT T.km_recorridos km,MA.descripcion marca,MO.descripcion modelo,T.id_transporte id,T.patente patente
									       FROM  transporte T inner join 
										         vehiculo V on T.id_vehiculo = V.id_vehiculo inner join
												 marca MA on MA.id_marca = V.id_marca inner join
												 modelo MO on MO.id_modelo = V.id_modelo") or die (mysql_error());
	echo "<div id='divContenedorAlarma'>";
	echo "</br>";											 
	echo"<div id='alarma'>";
	
	while($transportes = mysql_fetch_array($consulta_transportes)){
		
		$consulta_contador = mysql_query ("SELECT MAX(contador) cantidad
								  FROM   alar_transp
								  WHERE id_transporte = ".$transportes["id"]."") or die (mysql_error());
		
		$contador = mysql_fetch_assoc($consulta_contador);
		
		
		
		if($transportes["km"] > $alarma * $contador["cantidad"] ){
			
			
			echo "<a id='tBotonAlarma'>&nbsp;&nbsp;!&nbsp;&nbsp;</a>El transporte '".$transportes["marca"]." ".$transportes["modelo"]."' con patente  '".$transportes["patente"]."' supero los : ".$alarma * $contador["cantidad"]." KM
			<a href='".$alarma_visto."?ID=".$transportes["id"]."&contador=".$contador["cantidad"]."' id ='tBotonAlarma' >&nbsp;&nbsp;VISTO&nbsp;&nbsp;</a></br></br>";
			
															 
		}
			
								  
				
	}
	echo"</div>";
	echo"</div>";
?>
<!--<img src='../../img/alerta.png'  WIDTH=25 HEIGHT=25 /> -->