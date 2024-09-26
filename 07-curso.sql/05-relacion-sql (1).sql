CREATE DATABASE datos_prueba;

USE datos_prueba;

--? 1:1
CREATE TABLE clientes (
    id_cli INT(5) AUTO_INCREMENT PRIMARY KEY,
    nombre_cli VARCHAR(255) NOT NULL,
    apellido_cli VARCHAR(255) NOT NULL
);

INSERT INTO
    clientes (nombre_cli, apellido_cli)
VALUES ('Juan', 'Pérez'),
    ('María', 'González'),
    ('Luis', 'Martínez'),
    ('Ana', 'Rodríguez'),
    ('Carlos', 'Sánchez'),
    ('Laura', 'Fernández'),
    ('Pedro', 'López'),
    ('Sofía', 'Hernández'),
    ('Diego', 'García'),
    ('Valentina', 'Torres');

CREATE TABLE pefil (
    id_perfil INT AUTO_INCREMENT PRIMARY KEY,
    tel_perfil INT(9),
    ciudad_perfil VARCHAR(255) NOT NULL,
    email_perfil VARCHAR(255) UNIQUE NOT NULL,
    edades_cli INT(3),
    id_cli INT(5) NOT NULL UNIQUE,
    FOREIGN KEY (id_cli) REFERENCES clientes (id_cli)
);

INSERT INTO
    `pefil` (
        `tel_perfil`,
        `ciudad_perfil`,
        `email_perfil`,
        `edades_cli`,
        `id_cli`
    )
VALUES (
        123456789,
        'Madrid',
        'correo1@example.com',
        30,
        1
    ),
    (
        987654321,
        'Barcelona',
        'correo2@example.com',
        25,
        2
    ),
    (
        555555555,
        'Valencia',
        'correo3@example.com',
        22,
        3
    ),
    (
        111111111,
        'Sevilla',
        'correo4@example.com',
        28,
        4
    ),
    (
        999999999,
        'Bilbao',
        'correo5@example.com',
        35,
        5
    ),
    (
        444444444,
        'Málaga',
        'correo6@example.com',
        40,
        6
    ),
    (
        777777777,
        'Zaragoza',
        'correo7@example.com',
        27,
        7
    ),
    (
        222222222,
        'Alicante',
        'correo8@example.com',
        29,
        8
    ),
    (
        888888888,
        'Granada',
        'correo9@example.com',
        24,
        9
    ),
    (
        333333333,
        'Murcia',
        'correo10@example.com',
        32,
        10
    );

--? 1:N

CREATE TABLE pedidos (
    id_pedidos INT AUTO_INCREMENT PRIMARY KEY,
    nombre_pedidos VARCHAR(200),
    descripción_pedidos VARCHAR(255),
    precio_pedidos DECIMAL(5, 2),
    fecha_pedidos DATE,
    id_cli INT(5) NOT NULL,
    FOREIGN KEY (id_cli) REFERENCES clientes (id_cli)
);

UPDATE pedidos
SET
    nombre_pedidos = CONCAT('Pedidos', ' ', id_pedidos)
WHERE
    nombre_pedidos LIKE '%Producto%';

INSERT INTO
    `pedidos` (
        `nombre_pedidos`,
        `descripción_pedidos`,
        `precio_pedidos`,
        `fecha_pedidos`,
        `id_cli`
    )
VALUES (
        'Pedidos A',
        'Descripción del Pedidos A',
        25.50,
        '2024-07-23',
        1
    ),
    (
        'Pedidos B',
        'Descripción del Pedidos B',
        12.75,
        '2024-07-24',
        2
    ),
    (
        'Pedidos C',
        'Descripción del Pedidos C',
        18.90,
        '2024-07-25',
        2
    ),
    (
        'Pedidos D',
        'Descripción del Pedidos D',
        30.00,
        '2024-07-26',
        4
    ),
    (
        'Pedidos E',
        'Descripción del Pedidos E',
        8.50,
        '2024-07-27',
        5
    ),
    (
        'Pedidos F',
        'Descripción del Pedidos F',
        42.25,
        '2024-07-28',
        6
    ),
    (
        'Pedidos G',
        'Descripción del Pedidos G',
        15.75,
        '2024-07-29',
        3
    ),
    (
        'Pedidos H',
        'Descripción del Pedidos H',
        22.80,
        '2024-07-30',
        8
    ),
    (
        'Pedidos I',
        'Descripción del Pedidos I',
        10.00,
        '2024-07-31',
        6
    ),
    (
        'Pedidos J',
        'Descripción del Pedidos J',
        50.50,
        '2024-08-01',
        10
    );

--? N:N

CREATE TABLE productos (
    id_prod INT AUTO_INCREMENT PRIMARY KEY,
    nombre_prod VARCHAR(255) NOT NULL,
    precio_prod DECIMAL(5, 2) NOT NULL,
    cantidad_prod INT(3) NOT NULL
);

INSERT INTO
    productos (
        nombre_prod,
        precio_prod,
        cantidad_prod
    )
VALUES ('Producto A', 12.50, 100),
    ('Producto B', 8.75, 50),
    ('Producto C', 19.99, 75),
    ('Producto D', 5.00, 200),
    ('Producto E', 14.75, 30),
    ('Producto F', 10.25, 80),
    ('Producto G', 7.50, 150),
    ('Producto H', 22.00, 20),
    ('Producto I', 16.50, 60),
    ('Producto J', 11.99, 40);

CREATE TABLE pedidos_productos (
    id_ped_prod INT AUTO_INCREMENT PRIMARY KEY,
    id_pedidos INT(5) NOT NULL,
    id_prod INT(5) NOT NULL,
    cantidad_pedido_prod INT(3),
    FOREIGN KEY (id_pedidos) REFERENCES pedidos (id_pedidos),
    FOREIGN KEY (id_prod) REFERENCES productos (id_prod)
);

INSERT INTO
    pedidos_productos (id_pedidos, id_prod)
VALUES (3, 5),
    (7, 10),
    (2, 3),
    (5, 8),
    (1, 2),
    (4, 6),
    (9, 4),
    (6, 7),
    (8, 1),
    (10, 9),
    (3, 4),
    (7, 2),
    (2, 6),
    (5, 3),
    (1, 7);