
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
		   <li> <a href="./<?php echo $permisos_datos?>">ADMINISTRAR PERMISOS </a></li>
		   
		   <li><a href="../../<?php echo $registrar_datos?>">SALIR</a></li>
		</ul>
	</nav>
	</div>
	  	<div id="divContenedor">
		</br>
         <a href="./<?php echo  $agregar_usuario ?>" class="boton">&nbsp;&nbsp;&nbsp;&nbsp;AGREGAR NUEVO USUARIO&nbsp;&nbsp;&nbsp;&nbsp;</a>
		 </br>
		</div>
		<div class="divTabla">
		   <?php

			$consulta  = mysql_query ("SELECT U.id_usuario ID,U.nombre nombre,U.usuario usuario,U.pass contra,U.fecha_nacimiento fecha,U.num_doc numdoc,R.descripcion rol
									   FROM usuario U join
											rol R on R.codigo_rol = U.codigo_rol") or die (mysql_error());

			if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>NOMBRE Y APELLIDO</td><td>USUARIO</td><td>&nbsp;&nbsp;&nbsp;CONTRASEÑA</td><td>FECHA DE NACIMIENTO</td><td>NUMERO DE DOCUMENTO</td><td>ROL</td></tr>     \n";
			do{
				echo "<tr><td>".$row["nombre"]."</td><td>".$row["usuario"]."</td><td>".$row["contra"]."</td><td>".$row["fecha"]."</td><td>".$row["numdoc"]."</td><td>".$row["rol"]."</td><td class='tBotonModif'><a href='".$menu_modificacion_usuario."?ID=".$row["ID"]."' class = 'tlink'>Modificar</a></td>
				      <a href='".$validar_eliminacion_usuario."?ID=".$row["ID"]."' class = 'tlink'>Eliminar</a></td>
					  <td class='tBotonElim'><a href='".$validar_eliminacion_usuario."?ID=".$row["ID"]."' class = 'tlink'>Eliminar</a></td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
			
			
		} else {
			echo "no se encontraron ningun registro";
		} 
					
		?>
</div>
</body>

</html>