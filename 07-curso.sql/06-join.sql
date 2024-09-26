--?
USE datos_prueba;

SELECT * FROM clientes;

SELECT * FROM pefil;

--? INNER JOIN

SELECT * FROM clientes INNER JOIN pefil;

--? JOIN -> 1:1
SELECT *
FROM clientes cli
    INNER JOIN pefil pf ON cli.id_cli = pf.id_cli;

--? JOIN = INNER JOIN
SELECT *
FROM clientes cli
    JOIN pefil pf ON cli.id_cli = pf.id_cli
ORDER BY nombre_cli ASC;

SELECT
    nombre_cli,
    apellido_cli,
    tel_perfil,
    ciudad_perfil
FROM clientes cli
    JOIN pefil pf ON cli.id_cli = pf.id_cli
ORDER BY nombre_cli ASC;

SELECT cli.nombre_cli, cli.apellido_cli, pf.tel_perfil, pf.ciudad_perfil
FROM pefil pf
    JOIN clientes cli ON cli.id_cli = pf.id_cli
ORDER BY nombre_cli ASC;

--? INER JOIN 
---? 1:N
--? CLIENTES Y PEDIDOS 

SELECT cli.nombre_cli, ped.id_pedidos, ped.nombre_pedidos , ped.fecha_pedidos FROM clientes cli JOIN pedidos ped ON cli.id_cli = ped.id_cli;


SELECT cli.nombre_cli, COUNT (ped.id_pedidos) FROM clientes cli JOIN pedidos ped ON cli.id_cli = ped.id_cli 
GROUP BY cli.id_cli;

--? INNER JOIN - N:N 
---? CLIENTES , PEDIDOS Y PRODUCTOS , PEDIDOS_PRODUCTOS
SELECT ped.nombre_pedidos, ped.fecha_pedidos, prod.nombre_prod, prod.precio_prod
 FROM pedidos_productos pedpro
 JOIN pedidos ped ON ped.id_pedidos = pedpro.id_pedidos
 join productos prod ON prod.id_prod = pedpro.id_prod;


SELECT cli.nombre_cli, ped.nombre_pedidos, prod.nombre_prod
 FROM pedidos_productos pedpro
INNER JOIN pedidos ped ON ped.id_pedidos = pedpro.id_pedidos
 join productos prod ON prod.id_prod = pedpro.id_prod
 INNER JOIN clientes cli on cli.id_cli = ped.id_cli;


SELECT cli.nombre_cli, COUNT(prod.nombre_prod)
AS 'total productos comprados'
FROM pedidos_productos pedpro
INNER join pedidos ped ON ped.id_pedidos = pedpro.id_pedidos
INNER JOIN productos prod ON prod.id_prod = pedpro.id_prod 
INNER JOIN clientes cli on cli.id_cli = ped.id_cli
GROUP BY cli.nombre_cli;


--? LEFT JOIN Y RIGH JOIN 

SELECT * FROM clientes cli LEFT JOIN pefil pef ON cli.id_cli = pef.id_cli;

SELECT cli.nombre_cli, pef.tel_perfil, pef.ciudad_perfil FROM clientes cli LEFT JOIN pefil pef on cli.id_cli = pef.id_cli;


-- - Muestra el nombre de los usuarios junto con la datos de sus perfiles, solo para aquellos usuarios que tienen un perfil asociado.
SELECT cli.nombre_cli, pef.id_perfil
FROM clientes  AS cli
LEFT JOIN pefil AS pef ON cli.id_cli = pef.id_perfil
WHERE pef.id_perfil IS NOT NULL;

SELECT cli.nombre_cli, pf.tel_perfil, pf.ciudad_perfil FROM clientes cli 
INNER JOIN pefil pf on cli.id_cli = pf.id_cli;

-- - Muestra el nombre de todos los usuarios y los IDs de sus pedidos, incluyendo aquellos usuarios que notienen pedidos registrados.
SELECT cli.nombre_cli, pedido.id_pedidos
FROM clientes AS cli
LEFT JOIN pedidos AS pedido ON cli.id_cli = pedido.id_pedidos;

SELECT cli.nombre_cli, ped.id_pedidos 
FROM clientes cli 
LEFT JOIN pedidos ped ON cli.id_cli = ped.id_cli;


-- - Muestra los IDs de los pedidos, nombres de los productos y las cantidades de cada producto en esos pedidos.

SELECT cli.id_pedidos, prod.nombre_prod, produ.cantidad_pedido_prod
FROM pedidos AS cli
LEFT JOIN productos AS produ ON cli.id_pedidos = produ.nombre_prod
JOIN productos AS prod ON prod.cantidad_pedido = prod.id_producto;

SELECT ped.id_pedidos, pro.nombre_prod, pp.cantidad_pedido_prod
 FROM pedidos ped 
 JOIN pedidos_productos pp on ped.id_pedidos = pp.id_pedidos
 JOIN productos pro ON pp.id_prod = pro.id_prod;




-- - Muestra el nombre de todos los productos y la cantidad total en los pedidos, incluyendo los productos que no están en ningún pedido.

SELECT prod.nombre_prod, COALESCE(COUNT(pp.id_prod),0) as cantidad_total
FROM productos prod
LEFT JOIN pedidos_productos pp ON prod.id_prod = pp.id_prod
GROUP BY prod.nombre_prod;


-- - Muestra los IDs de todos los pedidos junto con los IDs de los productos asociados, incluyendo todos los registros en pedidos_productos y los pedidos que pueden no tener productos asociados.


SELECT ped.id_pedidos, pp.id_prod 
FROM pedidos ped        
 RIGHT JOIN pedidos_productos pp ON ped.id_pedidos = pp.id_pedidos;





-- Muestra el nombre de los productos y la cantidad total de cada producto en todos los pedidos. Ordena los resultados por la cantidad total en orden descendente.


SELECT prod.nombre_prod, COALESCE( SUM(pp.cantidad_pedido_prod),0)  as cantidad_total 
FROM productos prod 
JOIN pedidos_productos pp 
ON prod.id_prod = pp.id_prod
GROUP BY prod.nombre_prod
ORDER BY cantidad_total DESC;