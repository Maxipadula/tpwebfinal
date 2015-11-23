
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
	
		
		<?php 
		    
			if(!isset($_SESSION)){
			session_start();
			}
			include ("../../../rutas.php"); 
		
			$permiso = "gestion de usuarios";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../../../permiso.php");
		
		?>
		
		
		
		<div id='divHeader'>
			<h1> Sistema de Gestión de Usuarios</h1>
		</div>
		
	<nav id='divNav' >
		
       <ul>
           		

		  
           <li><a href="./<?php echo  $agregar_usuario ?>">AGREGAR NUEVO USUARIO</a></li>
		  
		   <li><a href="./<?php echo  $modificar_usuario?>">MODIFICAR USUARIO EXISTENTE</a></li>
		 
		  <li> <a href="./<?php echo $eliminar_usuario?>">ELIMINAR UN USUARIO </a></li>
		
		   <li> <a href="./<?php echo $permisos_datos?>">ADMINISTRAR PERMISOS </a></li>
		   
		   <li><a href="../../<?php echo $registrar_datos?>">SALIR</a></li>
		

       </ul>
 
	</nav>

</body>

</html>