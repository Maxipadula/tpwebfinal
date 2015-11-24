<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
	
<?php 
			session_start();
			
			include ("../../../rutas.php");
			
			$permiso = "gestion de mecanicos";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../../../permiso.php");
?>

<div id='divHeader'>
			<h1> Sistema de Gestión de Mecanicos</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
            
           <li></li>
	
		   <!--<li><a href="./<?php echo $modificar_mecanico?>">INTERIORIZAR / EXTERIORIZAR</a></li>-->

		  <li><a href="./<?php echo $eliminar_mecanico?>">ELIMINAR</a></li>
		   
		   <li><a href="../../<?php echo $registrar_datos?>">SALIR</a></li>

       </ul>
 
	</nav>
	<div id="divContenedor">
	</br><a href="./<?php echo $agregar_mecanico?>" class="boton">AGREGAR NUEVO MECANICO</a>
				<div class="divTabla">
		<?php
		
		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		 $consulta  = mysql_query ("SELECT *
									FROM mecanico ") or die ("no q");
		
       echo "SELECCIONAR EL MECANICO QUE QUIERAS ELIMINAR";
			
		if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>Nombre y Apellido</td></tr> \n";
			do{
				echo "<tr><td>".$row["nombre"]."</td><td class='tBotonElim'><a href='".$validar_eliminacion_mecanico."?ID=".$row["id_mecanico"]."' class = 'tlink'>Eliminar</a></td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
		} else {
			echo "no se encontraron ningun registro";
		} 

?></div>

		</div>
</body>

</html>