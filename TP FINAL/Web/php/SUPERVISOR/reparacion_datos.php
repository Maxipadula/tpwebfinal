<html>
	<head>
		<LINK REL="Stylesheet" HREF="../../Css/login.css" TYPE="text/css">
	</head>
	<body>

		
			
			<?php 
				session_start();
			
			include ("../rutas.php");
			
			$permiso = "gestion de reparaciones";
		 
					 $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
					 mysql_select_db ("tpFinal",$conexion) or die ("no db");
				  
					 include("../permiso.php");
		 
		    ?>
			
        
		   	<div id='divHeader_supervisor'>
			<h1> REPARACIONES</h1>
		</div>

			<nav id='divNav_supervisor'>
		
				<ul>
					<li> <a href="./<?php echo $supervisor_home?>">ATRAS</a></li>
				</ul>
			</nav>

		<div id="divContenedor">
		</br>
		<a  href="./<?php echo $agregar_reparacion ?>" class="boton">&nbsp;&nbsp;ASIGNAR UN VIAJE&nbsp;&nbsp;</a>
		</br></br>
		</div>
		  
		
	<?PHP

		
		$consulta_reparacion = mysql_query ("SELECT R.codigo_reparacion ID,M.nombre mecanico,R.costo costo,R.fecha fecha,REP.descripcion repuesto,O.cantidad cantidad,MA.descripcion marca,MO.descripcion modelo,R.km km
											 FROM mecanico M inner join
												  reparacion R on M.id_mecanico=R.id_mecanico inner join
												  orden O on R.id_orden = O.id_orden inner join
												  repuesto REP on REP.id_repuesto = O.id_repuesto inner join
												  transporte T on T.id_transporte = R.id_transporte inner join 
												  vehiculo V on T.id_vehiculo = V.id_vehiculo inner join
												  marca MA on MA.id_marca = V.id_marca inner join
												  modelo MO on MO.id_modelo = V.id_modelo")or die (mysql_error());
		echo"			
		
		<div class='divTabla'>
        "	;	
						if ($row = mysql_fetch_array($consulta_reparacion)){
						echo "<table border = '1'> \n";
						echo "<tr><td>TRANSPORTE</td><td>MECANICO</td><td>FECHA DE REPARACION</td><td>REPUESTO</td><td>CANTIDAD</td><td>COSTO</td><td>KM RECORRIDOS</td></tr>\n";
						do{
							echo "<tr><td>".$row["marca"]." ".$row["modelo"]."</td><td>".$row["mecanico"]."</td><td>".$row["fecha"]."</td><td>".$row["repuesto"]."</td><td>".$row["cantidad"]."</td><td>".$row["costo"]."</td><td>".$row["km"]."</td><td class='tBotonModif'><a href='".$validar_modificacion_reparacion ."?ID=".$row["ID"]."' class = 'tLink' >Modificar</a></td>
							      <td class='tBotonElim'><a href='".$validar_eliminar_reparacion ."?ID=".$row["ID"]."' class = 'tLink' >Eliminar</a></td></tr> \n";     
						} while ($row = mysql_fetch_array($consulta_reparacion));
						echo "</table> \n";
						
						
					} else {
						echo "<h3> No se encontraron registros </h3>";
					} 
		"</div>
		";
	?>


		   
	</body>



</html>