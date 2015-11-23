<?php 	include ("viajes_datos.php"); ?>
	
	<html>
	 <div id="divContenedor">
	 
	 	<div class="divTabla">
	<?php 
	
	
	
	$modificar_viajes = $_POST["id_viajee"];	
	
	if(!isset($_SESSION)){
		session_start();
	}

	
	$_SESSION["viaje_a_modificar"] = $modificar_viajes;
	

 		
 		include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			

		echo "<form class='chequeado' method='post' action=". $ingresar_modificaciones_viajes3.">";
		
		ifs('origen');
		ifs('destino');
		ifs('cliente');
		ifs('fecha_inicio');
		ifs('carga');
	
		
		  if(chequeado('nombre')){
		
			echo "</br>Nombre</br>";
	
			$consulta_id_usuario  = mysql_query ("SELECT id_usuario id, usuario usu 
												  FROM usuario 
												") or die (mysql_error());
												
			if ($row = mysql_fetch_array($consulta_id_usuario)){
				echo "<table border = '1'> \n";
				echo "<tr><td>ID USUARIO</td><td>USUARIO</td></tr>\n";
				do{
					echo "</td><td>".$row["id"]."</td><td>".$row["usu"]
				."</td><td><input type='radio' name='nombre' value='".$row["id"]."'></input><br></td></tr> \n";     
				} while ($row = mysql_fetch_array ($consulta_id_usuario));
				echo "</table> \n";
			
				$nombre = 'nombre';
				
				} else {
					echo "no se encontraron ningun registro";
				} 	
				
			}
		
		
		
		  if(chequeado('acoplado'))
		{
		echo "</br>Acoplado</br>";
		
		$consulta_id_acoplado  = mysql_query ("SELECT id_acoplado id_ac, descripcion descri
												  FROM acoplado 
												") or die (mysql_error());
												
			if ($row = mysql_fetch_array($consulta_id_acoplado)){
				echo "<table border = '1'> \n";
				echo "<tr><td>ID ACOPLADO</td><td>DESCRIPCION</td></tr>\n";
				do{
					echo "</td><td>".$row["id_ac"]."</td><td>".$row["descri"]
				."</td><td><input type='radio' name='acoplado' value='".$row["id_ac"]."'></input><br></td></tr> \n";     
				} while ($row = mysql_fetch_array ($consulta_id_acoplado));
				echo "</table> \n";
				
				$acoplado = 'acoplado';
				
				} else {
					echo "no se encontraron ningun registro";
				} 
		

		}
		
		
		if(chequeado('transporte'))
		{
		echo "</br>Transporte</br>";
		
		$consulta_id_transporte  = mysql_query ("SELECT T.id_transporte id_tra, E.descripcion descri, T.patente pate
												  FROM transporte T  inner join 
													   estado E on T.id_Estado = E.id_estado
												") or die (mysql_error());
												
			if ($row = mysql_fetch_array($consulta_id_transporte)){
				echo "<table border = '1'> \n";
				echo "<tr><td>ID TRANSPORTE</td><td>DESCRIPCION</td><td>patente</td></tr>\n";
				do{
					echo "</td><td>".$row["id_tra"]."</td><td>".$row["descri"]."</td><td>".$row["pate"]
					."</td><td><input type='radio' name='transporte' value='".$row["id_tra"]."'></input><br></td></tr> \n";     
				} while ($row = mysql_fetch_array ($consulta_id_transporte));
				echo "</table> \n";
			
				$transporte = 'transporte';
				
				} else {
					echo "no se encontraron ningun registro";
				} 
		

		}
		
		
		
		
		echo "</br> <input type='submit' value='Enviar' class='boton'/>
							<input type='reset' value='Borrar'class='boton'/>
							<input type='button' onclick='history.back()' name='volver atrás' value='Volver' class='boton'></form> ";
							
		
		function ifs ($check){
		
			if(chequeado($check))
			{
			  echo "</br>
					 ".ucfirst($check)."
						</br>
						<input type='text' name='".$check."'>
						
			
					
					</br>";
				};
		}
		
		function chequeado($valor){
			if(!empty($_POST["datos"]))
			{
				foreach($_POST["datos"] as $chkval)
				{
					if($chkval == $valor)
					{
						return true;
					}
				}
			}
        return false;
        }
		
	
	?>
		
	</div>
	</div>
	</html>
	
	