<?php
	
	/* VARIABLES DE CONEXION A LA BDD*/
	
	$puerto = "localhost:3306";
	$usuario = "root";
	$password = "";
	
	/*VARIABLES RUTAS*/
	$login = "login.php";
	$validar = "validar.php";
	$deslog = "desloguear.php";
	
	
	
	//chofer
	$chofer_home = "chofer_home.php";
	$obtener_viaje="obtener_viaje.php";
	$validar_id_viaje="validar_id_viaje.php";
		
		//vales de combustible
		$registrar_vc="registrar_vc.php";
		$validar_vc="validar_vc.php";
		
		//registro de viajes
		$chofer_registro_viaje="chofer_registro.php";
		$chofer_validar_registro_viaje ="validar_registro_chofer.php";
		$consulta_viaje="consulta_viaje.php";
	

		
	
	//supervisor
	$supervisor_home = "supervisor_home.php";
	$registrar_datos_sup="registrar_datos_sup.php";
	$alarmas = "alarmas.php";
	$alarma_visto = "alarma_visto.php";
	   
	   //gestion de viajes
		$viajes_datos = "viajes_datos.php";
		$agregar_viaje ="agregar_viajes.php";
		$modificar_viaje ="modificar_viajes.php";
		$menu_modificacion_viajes="menu_modificacion_viajes.php";
		$menu_modificacion_viajes2="menu_modificacion_viajes2.php";
		$ingresar_modificaciones_viajes3="ingresar_modificaciones_viajes3.php";
		$ingresar_modificaciones_viaje="ingresar_modificaciones_viaje.php";
		$eliminar_viaje="eliminar_viajes.php";
		$validar_eliminacion_viaje ="validar_eliminacion_viaje.php";
		$validar_datos_viaje ="validar_datos_viajes.php";
		$validar_datos_reparacion = "validar_datos_reparacion.php";
		$validar_modificacion_reparacion="validar_modificacion_reparacion.php";
		$validar_modificacion_reparacion2="validar_modificacion_reparacion2.php";
		$validar_modificacion_reparacion3="validar_modificacion_reparacion3.php";
		
		//gestion de reparaciones
		$reparacion_datos ="reparacion_datos.php";
		$agregar_reparacion="agregar_reparacion.php";
		$modificar_reparacion ="modificar_reparacion.php";
		$eliminar_reparacion="eliminar_reparacion.php";
		$validar_eliminar_reparacion="validar_eliminar_reparacion.php";
		$validar_modificacion_reparacion="validar_modificacion_reparacion.php";
		
		//ver mapa
		$ver_mapa="ver_mapa.php";
		$control_mapa="control_mapa.php";

	
	
	//administrador	
	$administrador_home ="ADMINISTRADOR/administrador_home.php";
	$administrador_home2="administrador_home.php";
	
	  //gestion
		$registrar_datos ="GESTION/registrar_datos.php";
			
			//gestion de usuarios
			 $usuarios_datos = "USUARIOS/usuarios_datos.php";
			 $agregar_usuario = "agregar_usuarios.php";
			 $modificar_usuario ="modificar_usuarios.php";
			 $eliminar_usuario ="eliminar_usuarios.php";
			 $permisos_datos ="permisos_datos.php";
			 $agregar_permiso="agregar_permisos.php";
			 $asignar_permiso ="asignar_permisos.php";
			 $eliminar_permiso ="eliminar_permisos.php";
			 $validar_usuario ="validar_datos_usuarios.php";
			 $menu_modificacion_usuario ="menu_modificacion_usuario.php";
			 $validar_eliminacion_usuario="validar_eliminacion_usuarios.php";
			 $modificar_usuarios3 ="modificar_usuarios3.php";
			 $usuario_a_modificar ="usuario_a_modificar.php";
			 $validar_agregar_permiso="validar_agregar_permiso.php";
			 $validar_asignar_permiso ="validar_asignar_permiso.php";
			 $eliminar_permiso="eliminar_permiso.php";
			 $ingresar_modificaciones_usuario="ingresar_modificaciones_usuario.php";
			 $validar_eliminacion_permiso = "validar_eliminacion_permiso.php";
			 
			 
			 //gestion de vehiculos
			  $vehiculos_datos = "VEHICULOS/vehiculos_datos.php";
			  $agregar_vehiculos = "agregar_vehiculos.php";
			  $eliminar_vehiculos ="eliminar_vehiculos.php";
			  $validar_datos_vehiculos ="validar_datos_vehiculos.php";
			  $validar_eliminacion_vehculos ="validar_eliminacion_vehiculo.php";
			  
			  
			  //gestion de transportes
			   $transportes_datos = "TRANSPORTES/transportes_datos.php";
			   $agregar_transportes ="agregar_transportes.php";
			   $modificar_transportes ="modificar_transportes.php";
			   $eliminar_transportes ="eliminar_transportes.php";
			   $validar_datos_transportes ="validar_datos_transportes.php";
			   $modificar_transportes="modificar_transportes.php";
			   $validar_modificacion_transportes = "validar_modificacion_transportes.php";
			   $menu_modificacion_transporte ="menu_modificacion_transportes.php";
			   $validar_eliminar_transporte ="validar_eliminar_transporte.php ";
			   $modificaciones_transporte="modificaciones_transporte.php";
			   
			   
			  //gestion de mecanicos
			   $mecanicos_datos ="MECANICOS/mecanicos_datos.php";
			   $agregar_mecanico ="agregar_mecanicos.php";
			   $modificar_mecanico ="modificar_mecanicos.php";
			   $eliminar_mecanico ="eliminar_mecanicos.php";
			   $validar_datos_mecanicos ="validar_datos_mecanicos.php";
			   $validar_eliminacion_mecanico ="validar_eliminacion_mecanico.php";
			   $validar_modificacion_mecanico = "validar_modificacion_mecanico.php";
			   
			   
			   
			   //graficos
			   $graficos = "GRAFICOS";
			   $graficos_datos = "graficos_datos.php";
			   $rendimiento_km = "rendimiento_km.php";
			   $rendimiento_combustible="rendimiento_combustible.php";
			   $graficar_combustible="graficar_combustible.php";
			   $graficar_km ="graficar_km.php";
			   
				//listados 
				$listados_datos="listados_datos.php";
				$lista_usuarios="lista_usuarios.php";
				$lista_transportes="lista_transportes.php";
				$lista_viajes="lista_viajes.php";
				$lista_permisos="lista_permisos.php";
				$lista_reparaciones="lista_reparaciones.php";
	
	
	
?>