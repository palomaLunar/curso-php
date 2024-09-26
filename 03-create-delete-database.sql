-- --? crear base de datos;
-- CREATE DATABASE nombre_base_de_datos;

-- --? SELECCIONAR BASE DE DATOS;

-- USE nombre_base_de_datos;

-- --? Eliminar BASE DE DATOS ;

-- DROP DATABASE nombre_base_de_datos;
CREATE DATABASE recetas;

use recetas;

--?crear tabla de db.

CREATE TABLE postres (
    id_postre int(3),
    nombre_postre VARCHAR(100),
    descrip_postre VARCHAR(255),
    fecha_creacion DATE,
    img_postre VARCHAR(255)
);

SELECT* FROM postres;

