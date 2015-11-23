
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php 
		    session_start();
				
		    include ("../../../rutas.php"); 
		  	
			$permiso = "gestion de vehiculos";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../../../permiso.php");
			
			?>
			
<div id='divHeader'>
			<h1> Sistema de Gestión Vehiculos</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		  
          <?php include ("../../../rutas.php"); ?>
           <li><a href="./<?php echo $agregar_vehiculos ?>">AGREGAR</a></li>
	
		  <!--- <a href="./modificar_vehiculos.php">MODIFICAR</a>
		   <br> --->
		  <li> <a href="./<?php echo $eliminar_vehiculos ?>">ELIMINAR</a></li>
		  
		  <li><a href="../../<?php echo $registrar_datos?>">SALIR</a></li>


		

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>