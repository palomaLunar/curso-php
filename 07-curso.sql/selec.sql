-- Active: 1721375362536@@127.0.0.1@3306@curso
--? consulto todos los datos de la tabla 
SELECT * FROM usuario;
SELECT id, nombre, edad FROM usuario;

--? WHERE: nos permite colocar una condicional 

SELECT nombre, edad FROM usuario WHERE edad > 30;

SELECT nombre, apellido, id, email FROM usuario WHERE apellido = 'Perez';
SELECT nombre, id, email FROM usuario WHERE nombre = 'Juan';


--? DISTINCT; nos sirve para devolver valores distintos de la tabla;
/*solo devuelve los datos que no se repiten entre si */

SELECT DISTINCT edad FROM usuario;

SELECT DISTINCT nombre FROM usuario WHERE edad >30;


--? ORDER BY: nos permite ordenar la informacion de forma DESC BO ASC. por defecto ASC. 

SELECT nombre, edad FROM usuario ORDER BY edad DESC;

SELECT nombre, edad FROM usuario ORDER BY edad ASC;

SELECT nombre, email FROM usuario WHERE edad < 25 ORDER BY apellido ASC;

SELECT nombre, email FROM usuario WHERE edad < 25 ORDER BY apellido ASC;



--? like; es usuado juntos con where para buscar un parametro especifico: wildcars: (%) (_)

/* que termine en a*/
SELECT nombre, email FROM usuario WHERE email LIKE '%a';
/*que comience con a*/
SELECT nombre, email FROM usuario WHERE email LIKE 'a%';


/*que indiferenntemente de donde se encuentre */
SELECT nombre, email FROM usuario WHERE email LIKE '%ar%';

SELECT nombre, edad FROM usuario WHERE nombre LIKE '_ar__';

----? condicionales  AND, OR, NOT:

SELECT nombre, email, edad
FROM usuario
WHERE edad >= 30 AND edad < 40 
AND nombre LIKE '%C%'
ORDER BY nombre DESC;

SELECT nombre FROM usuario  WHERE nombre LIKE '%ar%';

--? limit: limita el numero de registros a mostrar. 
/* "*"" es para elegir todas las propiedaddes (nombre, correo, edad, etc)*/
SELECT * FROM usuario LIMIT 5;

SELECT nombre, apellido
FROM usuario
where
nombre LIKE '%i%'
ORDER BY apellido DESC 
LIMIT 3;

----? NULL;

/* MUESTRAME TODOS LOS CORREOS QUE SON NULOS */
SELECT nombre, email FROM usuario 
WHERE email IS NULL;
 
 /* MUESTRAME TODOS LOS CORREOS QUE NO SEAN  NULOS */

 SELECT nombre, email FROM usuario 
WHERE email IS NOT NULL;

SELECT nombre, email
 FROM usuario 
WHERE edad < 50 
AND nombre  LIKE '%er%'
AND email is not NULL
ORDER BY nombre;
--? IN: especifica varios valores en una consulta WHERE

SELECT *
FROM usuario
WHERE
    nombre IN ('Maria', 'Carlos', 'Juan')
    AND edad < 50
ORDER BY nombre;

SELECT nombre, apellido, edad
FROM usuario
WHERE
    edad IN (23, 45, 30)
ORDER BY edad;

--? BETWEEN: especifica un rango de valores en una consulta WHERE

SELECT nombre, edad FROM usuario WHERE edad BETWEEN 20 AND 30;

SELECT nombre, apellido
FROM usuario
WHERE
    nombre BETWEEN 'Ana' AND 'Pedro'
ORDER BY nombre;

SELECT nombre, email
FROM usuario
WHERE
    nombre BETWEEN 'Ana' AND 'Pedro'
    AND email IS NOT NULL
ORDER BY nombre;

--? MIN y MAX:

SELECT MAX(edad) FROM usuario;

SELECT MIN(edad) FROM usuario;

SELECT MAX(edad) FROM usuario WHERE edad BETWEEN 30 AND 50;

SELECT MIN(edad) FROM usuario WHERE email IS NOT NULL;

--? COUNT:

SELECT COUNT(*) FROM usuario;

SELECT COUNT(*) FROM usuario WHERE email IS NOT NULL

SELECT COUNT(*) FROM usuario WHERE email IS NULL AND edad > 30;

--? SUM: suma el total de los usuarios

SELECT SUM(edad) FROM usuario;

SELECT SUM(edad) FROM usuario WHERE nombre LIKE '%an%' AND edad < 30;

--? AVG: promedio de las datos: edad;

SELECT AVG(edad) FROM usuario;

SELECT AVG(edad)
FROM usuario
WHERE
    nombre BETWEEN 'Ana' AND 'Pedro'
    AND email IS NOT NULL;

--? Alias (AS): Alias para una consulta.

SELECT AVG(edad) AS 'Media de edad entre Ana y Pedro'
FROM usuario
WHERE
    nombre BETWEEN 'Ana' AND 'Pedro'
    AND email IS NOT NULL;

--?CONCAT(Función)

SELECT CONCAT(nombre, ', ', apellido) AS 'Nombre Completo'
FROM usuario;

--? GROUP BY: agrupa los resultados de una consulta por uno o varios valores.

SELECT COUNT(edad), nombre, email
FROM usuario
FROM usuario
GROUP BY
    edad,
    nombre,
    email;


SELECT MAX(edad), nombre FROM usuario GROUP BY edad; 


----? having;

SELECT COUNT (edad) FROM usuario HAVING COUNT(edad) > 20;


SELECT nombre, COUNT(*)
FROM usuario
GROUP BY nombre
HAVING COUNT (*) > 1;

--? case condicional 

SELECT   *, 
case
when edad < 20 THEN 'joven'
WHEN edad < 40 THEN 'adulto'
else 'viejos'
END as 'edades'
FROM usuario; 

