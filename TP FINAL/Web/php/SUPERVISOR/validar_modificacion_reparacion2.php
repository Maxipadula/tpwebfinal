<?php 	include ("reparacion_datos.php"); ?>
	
	<html>
	 <div id="divContenedor">
	 
	 	<div class="divTabla">
	<?php 
	
	
	
	$modificar_reparacion = $_POST["codigo"];	
	
	if(!isset($_SESSION)){
		session_start();
	}

	
	$_SESSION["reparacion_a_modificar"] = $modificar_reparacion;
	

 		
 		include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			

		echo "<form class='chequeado' method='post' action=". $validar_modificacion_reparacion3.">";
		
		ifs('costo');
		ifs('fecha');
	
	
		
		  if(chequeado('mecanico')){
		
			echo "</br>Mecanico</br>";
	
			$consulta_id_mecanico  = mysql_query ("SELECT id_mecanico id, nombre nom 
												  FROM mecanico 
												") or die (mysql_error());
												
			if ($row = mysql_fetch_array($consulta_id_mecanico)){
				echo "<table border = '1'> \n";
				echo "<tr><td>ID MECANICO</td><td>NOMBRE</td></tr>\n";
				do{
					echo "</td><td>".$row["id"]."</td><td>".$row["nom"]
				."</td><td><input type='radio' name='mecanico' value='".$row["id"]."'></input><br></td></tr> \n";     
				} while ($row = mysql_fetch_array ($consulta_id_mecanico));
				echo "</table> \n";
			
				$nombre = 'nombre';
				
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
		
		
		  if(chequeado('orden'))
		{
		echo "</br>Orden</br>";
		
		$consulta_id_orden  = mysql_query ("SELECT O.id_orden id_or, R.descripcion descri, cantidad cant
												  FROM orden O inner join
													   repuesto R on O.id_repuesto = R.id_repuesto 
												") or die (mysql_error());
												
			if ($row = mysql_fetch_array($consulta_id_orden)){
				echo "<table border = '1'> \n";
				echo "<tr><td>ID ORDEN</td><td>DESCRIPCION</td><td>CANTIDAD</td></tr>\n";
				do{
					echo "</td><td>".$row["id_or"]."</td><td>".$row["descri"]."</td><td>".$row["cant"]
				."</td><td><input type='radio' name='orden' value='".$row["id_or"]."'></input><br></td></tr> \n";     
				} while ($row = mysql_fetch_array ($consulta_id_orden));
				echo "</table> \n";
				
				$orden = 'orden';
				
				} else {
					echo "no se encontraron ningun registro";
				} 
		

		}
		
		
		
		

		
		echo "</br> <input type='submit' value='Enviar'/>
							<input type='reset' value='Borrar'/>
							<input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form> ";
							
		
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