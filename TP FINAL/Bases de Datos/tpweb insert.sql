use tpFinal;

insert into rol (codigo_rol, descripcion)
values	(1,'chofer'),
		(2, 'administrador'),
		(3, 'supervisor');

/*select *
from rol;*/

insert into tipo_doc (id_tipo_doc, descripcion)
values (1, 'DNI'), 
       (2, 'Libreta Enrolamiento'), 
       (7, 'Libreta Civica');

 /*select *
from tipo_doc;*/  
       
insert into licencia (id_licencia, descripcion)
values ('A1', 'Motos de 2 ruedas hasta 50cc'),
	   ('A.2.1', 'Motos de 2 ruedas entre 50cc y 150cc'),
       ('A.2.2', 'Motos de 2 ruedas entre 150cc y 300cc'),
       ('A.3', 'Motos de 2 ruedas mas de 300cc'),
       ('A.4.1', 'Motos de 3 o 4 ruedas hasta 50cc'),
       ('A.4.2', 'Motos de 3 o 4 ruedas entre 50cc y 150cc'),
       ('A.4.3', 'Motos de 3 o 4 ruedas entre 150cc y 300cc'),
       ('A.4.4', 'Motos de 3 o 4 ruedas mas de 300cc'),
       ('P.A.1', 'PROFESIONAL Motos de 2 ruedas hasta 50cc'),
       ('P.A.2.1', 'PROFESIONAL Motos de 2 ruedas entre 50cc y 150cc'),
       ('P.A.2.2', 'PROFESIONAL Motos de 2 ruedas entre 150cc y 300cc'),
       ('P.A.3', 'PROFESIONAL Motos de 2 ruedas mas de 300cc'),
       ('P.A.4.1', 'PROFESIONAL Motos de 3 o 4 ruedas hasta 50cc'),
       ('P.A.4.2', 'PROFESIONAL Motos de 3 o 4 ruedas entre 50cc y 150cc'),
       ('P.A.4.3', 'PROFESIONAL Motos de 3 o 4 ruedas entre 150cc y 300cc'),
       ('P.A.4.4', 'PROFESIONAL Motos de 3 o 4 ruedas mas de 300cc'),
       ('B.1', 'Automóviles, camionetas y utilitarios hasta 3500kg'),
       ('B.2', 'Automóviles, camionetas y utilitarios hasta 3500kg con acoplado hasta 750kg'),
       ('C', 'Camión sin acoplado ni semiacoplado y casas rodantes motorizadas de más de 3500kg'),
       ('D.1', 'Vehículos de transporte hasta 4 pasajeros, excluido el conductor'),
       ('D.2.1', 'Vehículos de transporte de 5 y hasta 20 pasajeros, excluido el conductor'),
	   ('D.2.2', 'Vehículos de transporte de más de 20 pasajeros, excluido el conducto'),
	   ('E.1', 'Camiones articulados, con acoplado o semiacoplado'),
	   ('E.2', 'Maquinaria especial no agrícola'),
	   ('F', 'Discapacidad'),
	   ('G.1', 'Tractores Agricolas'),
	   ('G.2', 'Maquinaria Especial Agricola'),
       ('NO', 'NO tiene registro');

/*select *
from licencia;*/

insert into permiso(id_permiso, descripcion)
	values(1,'chofer home'),
		  (2,'registrar vale'),
          (3,'registrar datos de viaje'),
		  (4,'administrador home'),
		  (5,'supervisor home'),
          (6,'gestion de usuarios'),
          (8,'gestion de mecanicos'),
          (9,'gestion de transportes'),
		  (10,'gestion de vehiculos'),
		  (11,'gestion de viajes'),
          (12,'gestion de reparaciones'),
          (13,'administracion de permisos'),
		  (7,'consulta de graficos');

/*select *
from permiso;*/

          
insert into dar_permiso(id_permiso,codigo_rol,id_dp)
	values(1,1,1),
		  (2,1,2),
		  (3,1,3),
          (4,2,4),
          (5,3,5),
          (6,2,6),
          (8,2,7),
          (9,2,8),
          (10,2,9),
          (11,3,10),
		  (12,3,11),
		  (7,3,12),
          (13,2,13),
		  (7,2,14);
          

/*select * 
from dar_permiso;*/

insert into usuario (id_usuario, usuario, nombre, pass, fecha_nacimiento, id_tipo_doc, num_doc, id_licencia, codigo_rol)
values	(10, 'pato','Patricio Lombardia','1234asd','1965-10-23', 1, '302584789', 'NO',3),
		(20, 'santi','Santiago Ares','123kjl','1984-04-23', 1, '32147563','B.1',2),
		(30, 'maxi','Maximiliano Padula','12345qwe','1980-03-03',1, '33214562', 'E.1',1),
		(40, 'pepe','Pedro Juarez','123456rty','1994-01-14',1, '37895234','B.2',1),
		(50, 'moni','Monica Gimenez','1234123ghj','1990-12-26', 1, '30369852','E.1',1),
		(60, 'leo','Leonel Rodriguez','123123nhu','1985-11-07', 1, '34563218','C',3);

/*select *
from usuario;*/

insert into modelo (id_modelo, descripcion)
values	(100, 'HD 78'),
		(200, 'HD 65'),
		(500, 'Oln 2.5 CS'),
		(600, 'Maxity');

/*select *
from modelo;*/

insert into estado (id_estado, descripcion)
	values('mm','muy malo'),
           ('m','malo'),
           ('r','regular'),
           ('b','bueno'),
           ('mb','muy bueno');
           
/*select*
from estado;*/

insert into marca(id_marca, descripcion)
values (1, 'Hyundai'),
	   (2, 'Foton'),
       (4, 'Renault');
       
/*select *
from marca;*/

insert into vehiculo (id_vehiculo, id_modelo, id_marca,capacidad_carga)
values  (123, 100, 1,5225.00),
        (456, 200, 1,4200.00),
        (789, 500, 2, 2500.00),
        (147, 600, 4,5000.00);

/*SELECT MA.descripcion marca,MO.descripcion modelo,V.id_vehiculo id
											FROM marca MA inner join
											     vehiculo V on MA.id_marca = V.id_marca inner join
												 modelo MO on MO.id_modelo = V.id_modelo */

insert into transporte (id_transporte, id_estado, id_vehiculo, num_chasis, num_motor, anio_fabricacion,patente,km_recorridos)
values	(1111, 'b', 123, 236589, 147852, 2005,'fkn 106',100000),
        (2222, 'mb', 123, 963258, 852147, 2013,'fmj 750',20000),
        (3333, 'mb', 123, 789456, 321987, 2014,'hgp 650',5000),
        (4444, 'r', 456, 159753, 258456, 2007,'dlo 890',800),
        (5555, 'b', 456, 951357, 448866, 2011,'dgf 789',600),
		(6666, 'm', 789, 358692, 69852, 2015,'fen 404',9500),
        (7777, 'mb',147, 134679, 976431, 2013,'oki 435',25000),
        (8888, 'r',789, 1357913, 791357, 2014,'dma 124',15000);
        
/*select *
from transporte;*/

insert into acoplado (id_acoplado, descripcion,paten)
values	(0, 'sin acoplado',0),
		(101, 'acoplado1',0),
		(201, 'acoplado2',0),
		(301, 'acoplado3',0),
		(401, 'acoplado4',0),
		(501, 'acolpado5',0),
		(601, 'acoplado6',0);    
    
/*select *
from acoplado;*/    

insert into viaje (id_viaje, id_usuario,id_acoplado, id_transporte, origen, km_recorridos,
				 destino, cliente, fecha_inicio, fecha_fin, carga,combustible_cons)
values	(1122, 30,101, 2222, 'Buenos Aires', 10000, 'Florianopolis', 'Pedromania', '2015-06-05 07:20:21', '2015-06-06 09:36:55', 'pantalones',600),
		(2233, 40,0, 6666, 'Salta',8900, 'Buenos aires','Ropamania', '2015-08-09 07:00:20','2015-08-09 04:00:20', 'poleras',100),
		(3344, 50,101, 2222, 'Rio Negro',  4000, 'Chile','TodoRopa', '2015-10-11 05:00:00', '2015-11-11 01:18:05', 'pantalones',500),
		(4455, 30,401, 1111, 'Cordoba',  9000, 'Bolivia','Todopordospesos', '2015-08-01 05:25:54','2015-08-01 18:25:55','remeras',400),
		(5566, 30,0, 2222, 'Misiones', 4000, 'Montevideo','sisis', '2015-12-12 12:30:34', '2015-12-12 16:30:00','medias',600),
		(6677, 50,601, 8888, 'Mendoza',  8500, 'Asuncion','ropaparatodo', '2015-11-08 12:00:50', '2015-11-08 20:40:29','buzos',750),
		(7788, 40,501, 6666, 'Chubut',  650, 'Cordoba','Remeraal100', '2015-07-15 12:30:20', '2015-07-15 20:40:29','remeras',800),
		(8899, 50,101, 5555, 'Buenos Aires',  8500, 'Canasvieiras','tiendaropa', '2015-09-17 13:00:50', '2015-09-17 20:40:29','pantalones',250),
		(2211, 30,201, 7777, 'Asuncion',  9800, 'Paraguay','lasaladita', '2015-07-14 18:00:40', '2015-07-14 20:40:29','chalinas',300),
		(2244, 40,601, 4444, 'Tierra del Fuego',  5500, 'Formosa','complaropa', '2015-07-06 12:00:20', '2015-07-06 20:40:29','medias',900),
		(2255, 50,501, 5555, 'Santiago de Chile',  6000, 'Salta','roparoparopa', '2015-02-20 10:30:10', '2015-02-20 20:40:29','poleras',450),
		(2266, 40,401, 2222, 'Mendoza',  800, 'Cordoba','si ropa todo', '2015-09-16 12:00:20', '2015-09-16 20:40:29','buzos',410),
		(2277, 30,601, 6666, 'Buenos Aires',  0, 'Cordoba','ropamania', '2015-07-06 12:00:20', '0000-00-00 00:00:00','remeras',0);

/*select *
from viaje;*/

insert into lugar(id_lugar,descripcion,latitud,longitud)
values (1,'Entre Rios','-32.0333','-60.3167'),   
       (2,'canasvieiras','-27.4333','-48.5'),
	   (3,'Mendoza', '-33.0833','-68.8833'),
	   (4,'Buenos Aires','-34.61315','-58.37723');
       
/*select *
from lugar;*/
       
insert into vale_combustible(id_vc,id_viaje,  fecha_hora, id_lugar, costo, cantidad)
values (1,1122,'2015-06-05 15:11:25',1, 5000.00, 250.00),   
       (2,1122,'2015-06-06 07:36:55',2, 2000.00, 100.00),
	   (3,3344,'2015-10-11 07:16:45',3, 2600.00, 200.00),
	   (4,6677,'2015-07-06 15:30:14',4, 2250.00, 150.00),
       (5,2255,'2015-06-05 15:11:25',2, 400.00, 250.00),   
       (6,2211,'2015-06-06 07:36:55',3, 8000.00, 1000.00),
	   (7,4455,'2015-10-11 07:16:45',1, 3000.00, 200.00),
	   (8,6677,'2015-07-06 15:30:14',4, 2250.00, 150.00);     
       
       
/*select *
from vale_combustible;*/

insert into repuesto(id_repuesto,descripcion,costo)
values(1,'motor',15000),
	  (2,'llanta',2000),
      (3,'rueda',2500),
      (4,'tapa de cilindro',8500),
      (5,'amortiguador',1200),
      (6,'volante',8750),
      (7,'paragolpes',4750),
      (8,'guardabarro',1250);
      
/*select * 
from repuesto;*/      



      
/*select * 
from alarmas;*/

insert into orden (id_orden,id_repuesto,cantidad)
values	(1,1,1),
		(2,2,2),
        (3,2,4),
        (4,1,1),
        (5,4,1),
        (6,5,4),
        (7,6,1),
        (8,1,1),
        (9,8,2);
        
/*select * 
from orden;*/        
        
insert into mecanico (id_mecanico, nombre)
values	(001, 'Yanet Rodriguez'),
		(002, 'Monica Nicolosi'),
		(003, 'Walter Tin'),
		(004, 'Silvia Escobar'),
		(005, 'Ivan Lomba'),
		(006, 'Lucrecio Lunch');
        
/*select * 
from mecanico;*/

insert into mecanico_interno (id_mecanico)
values (001),
	   (004),
	   (006);
       
/*select *
from mecanico_interno;*/

insert into mecanico_externo (id_mecanico, empresa)
values (002, 'Jorge Motors'),
	   (003, 'San Telmo Tunning'),
	   (005, 'El taller de Juanca');
        
/*select * 
from mecanico_externo;*/     
   
insert into reparacion (codigo_reparacion, id_mecanico, id_transporte,id_orden, costo, fecha,km)
values	(123, 006, 5555,1, 15000, '2015-08-06',1400),
        (124, 006, 5555,2, 4000, '2015-08-06',1400),
		(125, 005, 4444,3, 8000,'2015-12-07',5980),
		(126, 001, 1111,4, 8000,'2015-12-01',7582),
		(127, 002, 3333,5, 8500,'2015-01-01',6852),
        (128, 002, 3333,6, 4800,'2015-01-01',6852),
		(129, 004, 2222,7, 8750,'2015-03-06',1478),
        (130, 004, 2222,8,7450,'2015-03-06',1478),
		(131, 003, 6666,9, 2500,'2015-06-26',3652),
        (132, 002, 3333,6, 4800,'2015-01-01',6852),
		(133, 006, 6666,1, 8750,'2015-03-07',1478),
        (134, 005, 4444,2,7450,'2015-04-15',1478),
		(135, 002, 3333,3, 2500,'2015-06-26',3652);        

select *
from reparacion;

insert into alar_transp (id_transporte,contador)
values	(1111,5),
 	    (2222,2),
        (3333,1),
 	    (4444,1),
		(5555,1),
 	    (6666,1),
		(7777,1),
 	    (8888,1);

     
SELECT *
								  FROM   alar_transp
								  WHERE id_transporte = 2222