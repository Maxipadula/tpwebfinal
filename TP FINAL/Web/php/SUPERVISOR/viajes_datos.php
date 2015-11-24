<html>
	<head>
		<LINK REL="Stylesheet" HREF="../../Css/login.css" TYPE="text/css">
	</head>
	
	<body>
	
	<?php 	
	     session_start();
	
	     include ('../rutas.php');
		 
		 $permiso = "gestion de viajes";
		 
		 $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	     mysql_select_db ("tpFinal",$conexion) or die ("no db");
	  
	     include("../permiso.php");
	
	
	?>

		   
		      	<div id='divHeader_supervisor'>
			<h1>VIAJES</h1>
		</div>

			<nav id='divNav_supervisor'>
		
				<ul>
					<li> <a href="./<?php echo $supervisor_home?>">ATRAS</a></li>
				</ul>
			</nav>

		<div id="divContenedor">
		</br>	
		<a  href="./<?php echo $agregar_viaje ?>" class="boton">&nbsp;&nbsp;ASIGNAR UN VIAJE&nbsp;&nbsp;</a>
		</div>	
 
		</br>
		<form class='contacto' method="get" action="<?php echo $usuario_a_modificar ?>">
			<div id="contacto">
		
	  
			
			<?PHP
	
			include ('../rutas.php');
			
			echo "<div class='divTabla'>";
	
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_viaje_modificar  = mysql_query ("SELECT V.id_viaje id_vi, U.nombre nomb , A.descripcion descrip, T.id_transporte id_trans, 
														V.origen ori, V.destino dest, V.cliente cli, V.fecha_inicio fecha, V.carga carg
													   FROM viaje V inner join 
															usuario U on V.id_usuario = U.id_usuario inner join 
															acoplado A on V.id_acoplado = A.id_acoplado inner join 
															transporte T on V.id_transporte = T.id_transporte 
													   ") or die (mysql_error());
			
			if ($row = mysql_fetch_array($consulta_viaje_modificar)){
			echo "<table border = '1'> \n";
			echo "<tr><td>ID</td><td>NOMBRE</td><td>ACOPLADO</td><td>TRANSPORTE</td><td>ORIGEN</td><td>
			DESTINO</td><td>CLIENTE</td><td>FECHA INICIO</td><td>CARGA</td></tr> \n";
			do{
				echo "<tr><td>".$row["id_vi"]."</td><td>".$row["nomb"]."</td><td>".$row["descrip"]
				."</td><td>".$row["id_trans"]."</td><td>".$row["ori"]."</td><td>".$row["dest"]
				."</td><td>".$row["cli"]."</td><td>".$row["fecha"]."</td><td>".$row["carg"]
				."</td><td class='tBotonModif'><a href='".$menu_modificacion_viajes."?ID=".$row["id_vi"]."' class = 'tlink'>  Modificar </a></td>
				 <td class='tBotonElim'><a href='".$validar_eliminacion_viaje."?ID=".$row["id_vi"]."' class = 'tlink'>Eliminar</a></td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta_viaje_modificar));
			echo "</table> \n";
		} else {
			echo "<div id='divContenedor'><h3>No se encontraron registros</h3></div>";
		} ?>
		
		</form>
		</div>
		</div>

		   
	</body>



</html>