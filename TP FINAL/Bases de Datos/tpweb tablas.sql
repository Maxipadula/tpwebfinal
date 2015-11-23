create database if not exists tpFinal;

/*drop schema tpFinal;
*/
use tpFinal;

 /* USUARIOS*/
create table if not exists licencia
(id_licencia varchar(10) primary key,
 descripcion varchar (100)
 );
 
 create table if not exists tipo_doc
 (id_tipo_doc int primary key,
  descripcion varchar(30)
  );
  
  create table if not exists rol
    (codigo_rol int primary key,
     descripcion varchar(30)
);

  create table if not exists permiso
    (id_permiso int primary key,
     descripcion varchar(30)

);


  create table if not exists dar_permiso
    (id_permiso int ,
     codigo_rol int,
     id_dp int primary key,
     CONSTRAINT id_permiso_rol FOREIGN KEY (codigo_rol) REFERENCES rol (codigo_rol)
	 ON DELETE CASCADE
	 ON UPDATE CASCADE,
	CONSTRAINT id_permiso_fk FOREIGN KEY (id_permiso) REFERENCES permiso (id_permiso)
	 ON DELETE CASCADE
	 ON UPDATE CASCADE
);


 CREATE TABLE IF NOT EXISTS usuario (
    id_usuario INT PRIMARY KEY,
    usuario VARCHAR(30),
    nombre VARCHAR(30),
    pass varchar(30),
    fecha_nacimiento DATE,
    id_tipo_doc INT,
    num_doc VARCHAR(40),
    id_licencia VARCHAR(10),
	codigo_rol int,
    CONSTRAINT id_tipo_doc FOREIGN KEY (id_tipo_doc) REFERENCES tipo_doc (id_tipo_doc)
    ON DELETE CASCADE
	ON UPDATE CASCADE,
    CONSTRAINT id_licencia_usuario FOREIGN KEY (id_licencia) REFERENCES licencia (id_licencia)
    ON DELETE CASCADE
	ON UPDATE CASCADE,
    CONSTRAINT id_rol_usuario FOREIGN KEY (codigo_rol) REFERENCES rol (codigo_rol)
	ON DELETE CASCADE
	ON UPDATE CASCADE
);
 /**************/

   /**MECANICOS****/ 
 create table if not exists mecanico
 (id_mecanico int primary key,
  nombre varchar(30)
 );
 
 create table if not exists mecanico_interno
 (id_mecanico int unique,
  constraint id_mec_int foreign key (id_mecanico) references mecanico(id_mecanico)
  ON DELETE CASCADE
  ON UPDATE CASCADE 
 );
 
 create table if not exists mecanico_externo
 (id_mecanico int unique,
  empresa varchar(30),
  constraint id_mec_ext foreign key (id_mecanico) references mecanico(id_mecanico)
  ON DELETE CASCADE
  ON UPDATE CASCADE
 );
 /**************/
 
 /**TRANSPORTE**/
 create table if not exists modelo
	(id_modelo int primary key,
     descripcion varchar (30)
);

create table if not exists marca
(id_marca int primary key,
 descripcion varchar(30)
 );

create table if not exists estado
(id_estado varchar(2) primary key,
	descripcion varchar(20));

create table if not exists vehiculo
(id_vehiculo int primary key,
 id_modelo int,
 id_marca int,
 capacidad_carga float,
 constraint id_modelo_fk foreign key (id_modelo) references modelo (id_modelo)
 ON DELETE CASCADE
 ON UPDATE CASCADE,
 constraint id_marca_fk foreign key (id_marca) references marca (id_marca)
 ON DELETE CASCADE
 ON UPDATE CASCADE
 );
 
 create table if not exists transporte
    (id_transporte int primary key,
     id_vehiculo int,
     id_estado varchar(2),
     num_chasis int,
     num_motor int,
     anio_fabricacion int,
     patente varchar(30) unique,
     km_recorridos int,
     constraint id_vehiculo_fk foreign key(id_vehiculo) references vehiculo (id_vehiculo)
     ON DELETE CASCADE
	 ON UPDATE CASCADE,
     constraint id_estado_fk foreign key (id_estado) references estado (id_estado)
	 ON DELETE CASCADE
	 ON UPDATE CASCADE
);

create table if not exists acoplado 
	(id_acoplado int primary key,
	 descripcion varchar (30),
     paten varchar (30) 

);

/***************/

/*VIAJE*/
create table if not exists viaje 
	(id_viaje int unique,
     id_usuario int,
     id_acoplado int,
     id_transporte int,
     origen varchar (30),
     km_recorridos int,
     destino varchar (30),
     cliente varchar (30),
     fecha_inicio datetime,
     fecha_fin datetime,
     carga varchar(30),
     combustible_cons int,
	 constraint viaje_pk primary key (id_viaje),
     constraint id_usuario_viaje foreign key (id_usuario) references usuario (id_usuario)
     ON DELETE CASCADE
	 ON UPDATE CASCADE,
     constraint id_transporte_fk foreign key (id_transporte) references transporte (id_transporte)
	 ON DELETE CASCADE
	 ON UPDATE CASCADE,
	constraint id_acoplado_fk foreign key (id_acoplado) references acoplado (id_acoplado)
	 ON DELETE CASCADE
	 ON UPDATE CASCADE

);
create table if not exists lugar
	(id_lugar int primary key,
     descripcion varchar (30),
     latitud varchar (30),
     longitud varchar (30)

);

create table if not exists vale_combustible
	(id_vc int primary key,
     id_viaje int,
     fecha_hora datetime,
	 id_lugar int,
     costo double,
     cantidad double,
     constraint id_viaje_vc foreign key (id_viaje) references viaje (id_viaje)
	 ON DELETE CASCADE
	 ON UPDATE CASCADE,
	 constraint id_lugar_vc foreign key (id_lugar) references lugar (id_lugar)
	 ON DELETE CASCADE
	 ON UPDATE CASCADE
);





/**********************/

/*REPARACION*/

create table if not exists repuesto
	(id_repuesto int primary key,
     descripcion varchar(20),
     costo double
);

create table if not exists orden
	(id_orden int primary key,
    id_repuesto int,
    cantidad int,
    constraint id_repuesto_orden foreign key (id_repuesto) references repuesto (id_repuesto)
	ON DELETE CASCADE
	ON UPDATE CASCADE
);

create table if not exists reparacion 
	(codigo_reparacion int unique,
     id_mecanico int, 
     id_transporte int,
     id_orden int,
     costo int, 
     fecha date,
     km int,
	constraint reparacion_pk primary key (codigo_reparacion, id_mecanico, id_orden),
    constraint id_usuario_mecanico_reparacion foreign key (id_mecanico) references mecanico (id_mecanico)
    ON DELETE CASCADE
	ON UPDATE CASCADE,
    constraint id_transporte_reparacion foreign key (id_transporte) references transporte (id_transporte)
    ON DELETE CASCADE
	ON UPDATE CASCADE,
    constraint id_orden_reparacion foreign key (id_orden) references orden (id_orden)
	ON DELETE CASCADE
	ON UPDATE CASCADE
);

create table if not exists alarmas
	(id_alarmas int primary key,
     id_repuesto int,
     constraint id_repuesto_fk foreign key (id_repuesto) references repuesto (id_repuesto)
     ON DELETE CASCADE
	 ON UPDATE CASCADE,    
	 kilometros double
     );
   
create table if not exists alar_transp
	(
     id_transporte int,
     id_alarmas int,  
	 contador int,
	 constraint id_pk primary key (id_transporte, id_alarmas),
     constraint id_transpo_fk foreign key (id_transporte) references transporte (id_transporte)
     ON DELETE CASCADE
	 ON UPDATE CASCADE,
	 constraint id_ala_fk foreign key (id_alarmas) references alarmas (id_alarmas)
     ON DELETE CASCADE
	 ON UPDATE CASCADE
     );  

