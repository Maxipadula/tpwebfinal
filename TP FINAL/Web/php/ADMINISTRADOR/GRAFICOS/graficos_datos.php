
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php 
			session_start();
		  
		   include ("../../rutas.php"); 
		    
			$permiso = "consulta de graficos";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../../permiso.php");
			
			?>
			
<div id='divHeader'>
			<h1> GRAFICOS</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		  


		   <li> <a href="../../<?php echo $administrador_home ?>">SALIR</a></li>
	

       </ul>
 
	</nav>
	</div>
	</div>
	<div id="divContenedor">
		    <div class="divTabla">
		<?php
			$consulta_transporte = mysql_query ("SELECT M.descripcion marca,MO.descripcion modelo, T.patente patente,T.id_transporte ID,E.descripcion estado,T.km_recorridos km,T.num_chasis chasis,T.num_motor motor
											 FROM estado E inner join
												  transporte T on E.id_estado = T.id_estado inner join 
											      vehiculo V on T.id_vehiculo = V.id_vehiculo inner join 
											      marca M on V.id_marca = M.id_marca inner join 
											      modelo MO on V.id_modelo = MO.id_modelo")or die (mysql_error());
		
			echo "<form class='chequeado' method='post' action=". $validar_modificacion_transportes.">";
			if ($row = mysql_fetch_array($consulta_transporte)){
				echo "<table border = '1'> \n";
				echo "<tr><td>MARCA</td><td>MODELO</td><td>PATENTE</td><td>ESTADO</td><td>KM RECORRIDOS</td><td>NUMERO DE CHASIS</td><td>NUMERO DE MOTOR</td><td>GRAFICAR</td><td>GRAFICAR</td></tr>\n";
			
				do{
					echo "<tr><td>".$row["marca"]."</td><td>".$row["modelo"]."</td><td>".$row["patente"]."</td><td>".$row["estado"]."</td><td>".$row["km"].".KM</td><td>".$row["chasis"]."</td><td>".$row["motor"]."</td><td class='tBotonAgregar'><a target='_blank' href='".$graficar_km ."?ID=".$row["ID"]."' class = 'tLink'>RENDIMIENTO EN KM</a></td><br>
					       <td class='tBotonAgregar'><a target='_blank' href='".$graficar_combustible ."?ID=".$row["ID"]."' class = 'tLink'>CONSUMO DE COMBUSTIBLE</a></td><br></tr> \n";     
				
				}while ($row = mysql_fetch_array($consulta_transporte));
			
				echo "</table> \n";
			 
			
			} else {
				echo "<h3> No se encontraron registros </h3>";
		} 
		
		?>	
		</div>

		</div>
</body>

</html>