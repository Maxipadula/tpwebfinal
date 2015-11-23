
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
           		

		  
           <li><a href="<?php echo $rendimiento_km ?>">RENDIMIENTO DE LOS VEHICULOS EN KM</a></li>
		
		   <li><a href="<?php echo $rendimiento_combustible ?>">RENDIMIENTO PROMEDIO DE CONSUMO DE COMBUSTIBLE</a></li>

		   <li> <a href="../<?php echo $administrador_home2 ?>">SALIR</a></li>
	

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>