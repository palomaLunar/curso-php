-- Active: 1721375362536@@127.0.0.1@3306@peliculas




-- Seleccionar todas las películas

SELECT * FROM peliculas

-- Seleccionar el título y el director de todas las películas
 
 SELECT titulo, director FROM peliculas

-- Seleccionar todas las películas que fueron lanzadas después del año 2000
SELECT * FROM peliculas WHERE año > 2000

-- Seleccionar todas las películas del género 'Drama'
SELECT * FROM peliculas WHERE genero = 'drama';

-- eleccionar todas las películas con una duración mayor a 150 minutos
SELECT * FROM peliculas WHERE duracion > 150

-- Seleccionar todas las películas del país 'EE.UU.' y del género 'Acción'
SELECT * FROM peliculas WHERE pais = 'EE.UU.' AND genero = 'Accion';

-- Seleccionar la película más reciente (con el año de lanzamiento más alto)
SELECT titulo, año FROM peliculas ORDER BY año DESC LIMIT 1;


-- Seleccionar la película más antigua (con el año de lanzamiento más bajo)
SELECT titulo, año FROM peliculas ORDER BY año ASC LIMIT 1;

-- Seleccionar todas las películas con clasificación 'R'
SELECT titulo, clasificacion FROM peliculas WHERE clasificacion 'R';

-- Seleccionar todas las películas ordenadas por título en orden alfabético
SELECT * FROM peliculas ORDER BY titulo ASC;

-- eleccionar todas las películas del director 'Christopher Nolan'
SELECT * FROM peliculas WHERE director = 'Christopher Nolan';

-- Seleccionar las películas con una duración entre 90 y 120 minutos
SELECT titulo, duracion FROM peliculas WHERE duracion >= 90 AND duracion < 120 ;

-- Seleccionar todas las películas cuyo título empieza con 'A'
SELECT * FROM peliculas WHERE titulo like 'a%';

-- Seleccionar todas las películas que no sean del país 'EE.UU.'
SELECT * FROM peliculas WHERE pais != 'EE.UU.';

-- seleccionar las películas que tienen la palabra 'El' en el título
SELECT titulo FROM peliculas WHERE  titulo like '%el%';
 

--  Seleccionar títulos y directores de películas del género 'Drama' o 'Acción', ordenados por título, con límite de 10 resultados
SELECT titulo, director, genero FROM peliculas WHERE genero = 'drama' OR genero = 'accion' ORDER BY titulo ASC LIMIT 10 ;


-- Seleccionar todas las películas del país 'EE.UU.' con una duración mayor a 120 minutos, excluyendo las del género 'Comedia', ordenadas por año de lanzamiento
SELECT * FROM peliculas WHERE pais = 'EE.UU.' AND duracion > 120 AND genero != 'comedia' ORDER BY año ASC; 

-- Seleccionar títulos únicos de películas clasificadas como 'R' o 'PG-13', pero no del género 'Terror', ordenadas por director
--? tuve que hacer alreves la comprobacion de la condicional where. 
SELECT * FROM peliculas WHERE  genero !='terror' and clasificacion = 'R' OR clasificacion = 'PG-13' ORDER BY director;



-- Seleccionar los géneros distintos de películas que no sean del país 'Japón' y cuya duración sea menor a 100 minutos, ordenados por género
 
 SELECT DISTINCT genero, pais, duracion  FROM peliculas WHERE pais != 'japon' AND duracion < 100 ORDER BY genero ;

--  Seleccionar títulos y años de películas lanzadas después del año 2000, del país 'México' o 'Brasil', ordenadas por año en orden descendente
SELECT titulo, año, pais FROM peliculas WHERE año > 2000 and pais = 'mexico' or  pais = 'brasil';


-- Consultas para la tabla de película:
-- Seleccionar todas las películas del género 'Ciencia Ficción' que fueron lanzadas después del año 2010, ordenadas por año de lanzamiento en orden descendente.

SELECT titulo, año, genero FROM peliculas WHERE año > 2010 ORDER BY año DESC;

-- Seleccionar el título y el director de las películas que tienen una duración entre 100 y 150 minutos y no sean del país 'EE.UU.'.

SELECT titulo, director FROM peliculas WHERE pais != 'EE.UU.' AND duracion < 150 AND duracion > 100 ;
-- Seleccionar todos los géneros distintos de las películas que fueron lanzadas entre los años 1990 y 2000.
SELECT DISTINCT genero, año FROM peliculas  WHERE año BETWEEN  1990 and 2000;
-- Seleccionar los títulos de las películas que contienen la palabra 'Matrix' o 'Star' en el título, ordenados por año de lanzamiento.
SELECT * FROM peliculas  WHERE  titulo LIKE '%Matrix%' OR titulo LIKE '%Star%' ORDER BY año;
-- Seleccionar el título y el año de las películas del director 'Steven Spielberg', ordenadas por año de lanzamiento en orden ascendente.
SELECT titulo, año FROM peliculas WHERE director LIKE '%steven spielberg%'

-- Seleccionar el título y la duración de las 5 películas más largas.
SELECT titulo, duracion FROM peliculas WHERE duracion ORDER BY duracion DESC LIMIT 5 ;
-- Seleccionar el país y el número total de películas producidas en cada país, ordenadas por el número total de películas en orden descendente.

SELECT pais, COUNT(*) AS numero_peliculas
FROM peliculas
GROUP BY pais
ORDER BY numero_peliculas DESC;

-- Seleccionar el título y el género de las películas que no sean del género 'Comedia' y cuyo título empiece con la letra 'T'.

SELECT titulo, genero FROM peliculas WHERE genero != 'comedia' AND titulo LIKE 'T%';
-- Seleccionar el título y la clasificación de todas las películas clasificadas como 'PG' o 'G', ordenadas por título en orden alfabético.

SELECT titulo, clasificacion FROM peliculas WHERE clasificacion = 'pg' OR clasificacion = 'g';
-- Seleccionar los 3 géneros con más películas y contar cuántas películas hay en cada uno, ordenados por el número de películas en orden descendente.
SELECT genero, COUNT(*) AS numero_peliculas
FROM peliculas
GROUP BY genero
ORDER BY numero_peliculas DESC
LIMIT 3;

-- Seleccionar el país con la mayor cantidad de películas y mostrar el país y el número total de películas producidas en ese país.
SELECT pais, COUNT(*) as numero_peliculas  
FROM peliculas
GROUP BY pais
ORDER BY numero_peliculas DESC
LIMIT 1;

-- Seleccionar el título, director, género y duración de las películas que cumplen con los siguientes criterios:

-- Son del país 'EE.UU.'.
-- Tienen una duración entre 120 y 180 minutos.
-- Su año de lanzamiento es posterior a 1990.
-- No pertenecen al género 'Comedia'.
-- Están clasificadas como 'PG-13' o 'R'.
-- La lista está ordenada primero por duración en orden descendente y luego por título en orden ascendente.
-- Solo se muestran los primeros 15 resultados.

SELECT titulo, director, genero, duracion, 
FROM peliculas
WHERE
    pais = 'EE.UU.'
    AND duracion BETWEEN 120 AND 180
    AND año> 1990
    AND genero != 'Comedia'
    AND clasificacion IN ('PG-13', 'R')
ORDER BY duracion DESC, titulo
LIMIT 15;




---  Seleccionar el título, año, país y clasificación de las películas que cumplen con los siguientes criterios:
-- Son de los países 'Francia' o 'Italia'.
-- Fueron lanzadas entre 2005 y 2015.
-- No pertenecen al género 'Terror'.
-- Tienen una clasificación distinta de 'NC-17'.
-- La lista está ordenada primero por año en orden ascendente y luego por país en orden alfabético.
-- Solo se muestran los primeros 20 resultados.
SELECT titulo, año, pais, clasificacion 
FROM peliculas 
WHERE pais IN ('Francia', 'REINO UNIDO')
AND año BETWEEN 2005 and 2015
AND genero != 'terror'
AND clasificacion != 'NC-17'
ORDER BY año ASC, pais
LIMIT 20;



--        -  Seleccionar el título, director, año y duración de las películas que cumplen con los siguientes criterios:
-- Son del género 'Aventura'.
-- Fueron lanzadas después del año 2000.
-- No tienen una duración mayor a 140 minutos.
-- El director no es 'Peter Jackson'.
-- La lista está ordenada primero por título en orden alfabético y luego por año en orden descendente.
-- Solo se muestran los primeros 10 resultados.
SELECT titulo, director, año, duracion
FROM peliculas
WHERE
    genero = 'Aventura'
    AND año > 2000
    AND duracion <= 140
    AND director != 'Peter Jackson'
ORDER BY titulo ASC, año DESC
LIMIT 10;



-- Seleccionar el título, género, país y duración de las películas que cumplen con los siguientes criterios:
-- Son del país 'Reino Unido'.
-- Pertenecen a los géneros 'Drama' o 'Romance'.
-- Tienen una duración de al menos 100 minutos.
-- Fueron lanzadas antes del año 2010.
-- La lista está ordenada primero por género en orden alfabético y luego por duración en orden ascendente.
-- Solo se muestran los primeros 15 resultados.
SELECT titulo, genero, pais, duracion
FROM peliculas
WHERE
    pais = 'Reino Unido'
    AND (genero = 'Drama' OR genero = 'Romance')
    AND duracion >= 100
    AND año < 2010
ORDER BY genero ASC, duracion ASC
LIMIT 15;




---  Seleccionar el título, director, género y clasificación de las películas que cumplen con los siguientes criterios:
-- Son de los géneros 'Ciencia Ficción', 'Fantasía' o 'Acción'.
-- Fueron lanzadas entre 1995 y 2005.
-- Tienen una clasificación distinta de 'PG'.
-- No tienen una duración menor a 110 minutos.
-- La lista está ordenada primero por clasificación en orden alfabético y luego por título en orden descendente.
-- Solo se muestran los primeros 25 resultados.

SELECT titulo, director, genero, clasificacion
FROM peliculas
WHERE
    genero IN ('Ciencia Ficción', 'Fantasía', 'Acción')
    AND año BETWEEN 1995 AND 2005
    AND clasificacion != 'PG'
    AND duracion >= 110
ORDER BY clasificacion ASC, titulo DESC
LIMIT 25;


-- Inserta tres nuevos registros en la tabla películas con los siguientes datos:
-- Título: "Interstellar"
-- Director: "Christopher Nolan"
-- Año: 2014
-- Género: "Ciencia Ficción"
-- Duración: 169 minutos
-- País: "EE.UU."
-- Clasificación: "PG-13"
-- ----------------------------------------
-- Título: "Parasite"
-- Director: "Bong Joon-ho"
-- Año: 2019
-- Género: "Thriller"
-- Duración: 132 minutos
-- País: "Corea del Sur"
-- Clasificación: "R"
-- ----------------------------------------
-- Título: "Amélie"
-- Director: "Jean-Pierre Jeunet"
-- Año: 2001
-- Género: "Comedia"
-- Duración: 122 minutos
-- País: "Francia"
-- Clasificación: "R"
-- --------------------------------------------
-- Título: "Inception"
-- Director: "Christopher Nolan"
-- Año: 2010
-- Género: "Ciencia Ficción"
-- Duración: 148 minutos
-- País: "EE.UU."
-- Clasificación: "PG-13"
-- --------------------------------

INSERT INTO peliculas (titulo, director, año, genero, duracion, pais, clasificacion) VALUES ('parasite', 'Bong Joon-ho', 2019, 'thriller', 132, 'corea del sur', 'R'), ('Amelie', 'Jean-pierre Jeunet', 2001, 'comedia', 122, 'francia', 'R'), ('inception', 'christofer nolan', 2010, 'ciencia ficcion', 148, 'EE.UU.', 'PG-13');

-- Selecciona todas las películas del director "Steven Spielberg" y muestra el título, año y género.
 SELECT titulo, año, genero FROM peliculas WHERE director = 'steven spielberg';


-- Actualiza la duración de la película "el padrino" a 175 minutos.
 UPDATE peliculas SET duracion = 175 WHERE titulo = 'el padrino';


-- Elimina el registro de la película con el título "El Gran Hotel Budapest".
 DELETE FROM peliculas WHERE titulo = 'El Gran Hotel Budapest';


-- Selecciona el título, director y año de las películas que fueron lanzadas entre 2000 y 2010, que no sean del género "Comedia", y que tengan una duración mayor a 120 minutos. Ordena los resultados por año en orden descendente y muestra los primeros 10 resultados.

SELECT titulo, director, año FROM peliculas WHERE genero != 'comedia' AND año BETWEEN 2000 AND 2010 AND duracion > 120 ORDER BY año DESC LIMIT 10;

-- Selecciona el título, director y país de las películas que son del género "Drama" o "Romance", tienen una duración menor a 150 minutos, y fueron lanzadas antes del año 2010. Ordena los resultados por país en orden ascendente y luego por año en orden descendente.

SELECT titulo, director, pais
FROM peliculas
WHERE
    genero IN ('Drama', 'Romance')
    AND duracion < 150
    AND año < 2010
ORDER BY pais ASC, año DESC;



-- Actualiza el género de todas las películas dirigidas por "Quentin Tarantino" a "Crimen".



UPDATE peliculas
SET genero = 'Crimen'
WHERE director = 'Quentin Tarantino';

-- Elimina todas las películas que tienen la clasificación "NC-17" y fueron lanzadas antes del año 2000.

DELETE FROM peliculas WHERE clasificacion = 'NC-17' AND año < 2000;
-- Selecciona el género y la duración promedio de las películas, pero solo muestra los géneros que tienen una duración promedio mayor a 120 minutos. Ordena los resultados por duración promedio en orden descendente.

SELECT genero, AVG(duracion) AS duracion_promedio
FROM peliculas
GROUP BY genero
HAVING AVG(duracion) > 120
ORDER BY duracion_promedio DESC;