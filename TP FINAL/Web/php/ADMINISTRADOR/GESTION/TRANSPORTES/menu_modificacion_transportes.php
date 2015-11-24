
	<head>
	<meta charset="UTF-8">
		<title>Modificar User | S.G.L</title>
		
		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarModificarUsuarios.js"></script>
		
		<LINK REL="Stylesheet" HREF="../Css/login.css" TYPE="text/css">
	</head>
	
	
	
	  <?php include ("transportes_datos.php"); ?>
	 
	 <div id="divContenedor">
	<?php 
	
	if(!isset($_SESSION)){
		session_start();
	}
	$modificar = $_POST["id_transporte"];
	

	

 		
 		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
		
		echo "<form class='chequeado' method='post' action=". $modificaciones_transporte.">";
		
		ifs('chasis');
		ifs('motor');
	    ifs('km');
		ifs('patente');
		ifs('año');

		
    if(chequeado('estado'))
	{
		$consulta_estado=mysql_query("SELECT *
									  FROM estado")or die(mysql_error);
		echo"</br>Estado</br><select name='estado'>";								  
		while ( $row = mysql_fetch_array($consulta_estado) ) {
			
            echo '<option value='.$row['id_estado'].'>
                                '.$row['descripcion'].'</option>';

        }
          echo " 
                 </select>
                ";
	}
		
		  if(chequeado('vehiculo'))
		{
			$consulta_marca=mysql_query("SELECT MA.descripcion marca,MO.descripcion modelo,V.id_vehiculo id
											FROM marca MA inner join
											     vehiculo V on MA.id_marca = V.id_marca inner join
												 modelo MO on MO.id_modelo = V.id_modelo")or die(mysql_error);
			echo"</br>Vehiculo</br><select name='vehiculo'>";						  
			while ( $row = mysql_fetch_array($consulta_marca) ) {

            echo '<option value='.$row['id'].'>
                                '.$row['marca'].' '.$row['modelo'].'</option>';

             }
          echo " 
                 </select>
                 ";
		}
		
			

		
		
				echo "<br>";
		
		echo "</br> <input type='submit' value='Enviar' class='boton'/>
							<input type='reset' value='Borrar' class='boton'/>
							</form> ";
		
		
		
		
		
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
	</br><input type="submit" value="Modificar" class="boton" /></br>
	</form>
	</div>
	</div>
	</div>
</html>