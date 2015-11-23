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
            
           <li><a href="./<?php echo $agregar_mecanico?>">AGREGAR</a></li>
	
		   <!--<li><a href="./<?php echo $modificar_mecanico?>">INTERIORIZAR / EXTERIORIZAR</a></li>-->

		  <li><a href="./<?php echo $eliminar_mecanico?>">ELIMINAR</a></li>
		   
		   <li><a href="../../<?php echo $registrar_datos?>">SALIR</a></li>

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>