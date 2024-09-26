-- Active: 1721375362536@@127.0.0.1@3306@curso

---? INSERT; agregamos informacion a la base de datos
--- agregamos  datos a la lista de usuarios 

INSERT INTO usuario (nombre, apellido,edad, email)
VALUES('juan', 'garcia', 34, 'juan.garcia@gmail.com');


INSERT INTO usuario (nombre, apellido, edad)
VALUES ('laura', 'martin', 18), ('carlos', 'perez', 49)´

----? UPDATE; actualizar datos de la base de datos
UPDATE usuario SET nombre = 'jaime', apellido = 'vega', email = 'jaime.vega@gmail.com' WHERE id = 14;


---? DELETE: ELIMINA LOS REGISTROS DE UNA TABLA 
DELETE FROM usuario WHERE  id = 12;

--- como arriba eliminamos el id 12 ahora podriamos agregar un valor al id 12 que quedo vacio 

INSERT INTO usuario (id, nombre, apellido,edad, email)
VALUES( 12, 'juan', 'garcia', 34, 'juan.garcia@gmail.com');