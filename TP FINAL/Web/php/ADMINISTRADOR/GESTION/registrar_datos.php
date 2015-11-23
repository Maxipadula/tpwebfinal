

<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php include ("../../rutas.php"); ?>
<div id='divHeader'>
			<h1> Sistema de Gestión Recursos</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		  
       		<?php include ("../../rutas.php");?>
		  
            <li><a href="./<?php echo $usuarios_datos ?>">USUARIOS</a> </li>

            <li><a href="./<?php echo $vehiculos_datos ?>">VEHICULOS</a> </li>

            <li><a href="./<?php echo $transportes_datos ?>">TRANSPORTES</a> </li>

            <li><a href="./<?php echo $mecanicos_datos ?>">MECANICOS</a> </li>
			 <li><a href="../<?php echo $administrador_home2?>">SALIR</a></li>


       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>