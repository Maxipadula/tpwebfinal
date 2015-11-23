<html>
 <?php include ("usuarios_datos.php"); ?>
 <?php 	include ('../../../rutas.php');?>
 	<head>
 		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarAgregarPermiso.js"></script>
	</head>
<body>
	<div id="divContenedor">
	<div class="divTabla">
		</br>
		<p>SELECCIONAR USUARIO A MODIFICAR</p>

		<form class='contacto' method="post" action="<?php echo $usuario_a_modificar ?>">
			<div id="contacto">
		
		<?php
		
			if(!isset($_SESSION))
			{
				session_start();
			}
			include ('../../../rutas.php');
	
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta  = mysql_query ("SELECT U.id_usuario ID,U.nombre nombre,U.usuario usuario,U.pass contra,U.fecha_nacimiento fecha,U.num_doc numdoc,R.descripcion rol
									   FROM usuario U join
											rol R on R.codigo_rol = U.codigo_rol") or die (mysql_error());

			if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>NOMBRE Y APELLIDO</td><td>USUARIO</td><td>CONTRASEÑA</td><td>FECHA DE NACIMIENTO</td><td>NUMERO DE DOCUMENTO</td><td>ROL</td></tr>     \n";
			do{
				echo "<tr><td>".$row["nombre"]."</td><td>".$row["usuario"]."</td><td>".$row["contra"]."</td><td>".$row["fecha"]."</td><td>".$row["numdoc"]."</td><td>".$row["rol"]."</td><td class='tBotonModif'><a href='".$menu_modificacion_usuario."?ID=".$row["ID"]."' class = 'tlink'>Modificar</a></td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
			
			
		} else {
			echo "no se encontraron ningun registro";
		} 
					
		?>
			
		</div>
	</div>
	</div>
</body>
</html>



