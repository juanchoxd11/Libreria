-- Crear la base de datos
CREATE DATABASE libreria_virtual;
-- Seleccionar la base de datos
USE libreria_virtual;

-- Tabla para almacenar las categorías de los libros
CREATE TABLE categorias (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
);

-- Insertar algunas categorías de ejemplo
INSERT INTO categorias (nombre)
VALUES 
('Novela'),
('Fantasía'),
('Ciencia');

-- Tabla para almacenar los libros
CREATE TABLE libros (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  categoria_id INT,
  precio DECIMAL(10, 2),
  descripcion TEXT,
  imagen VARCHAR(255),
  cantidad INT DEFAULT 0,         -- Cantidad de libros disponibles
  ventas INT DEFAULT 0,          -- Total de ventas del libro
  FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

-- Insertar algunos libros de ejemplo
INSERT INTO libros (titulo, categoria_id, precio, descripcion, imagen, cantidad)
VALUES 
('Cien años de soledad', 1, 20.00, 'Una obra maestra de Gabriel García Márquez.', 'img/cien.jpg', 50),
('Harry Potter', 2, 25.00, 'El inicio de una mágica aventura en Hogwarts.', 'img/harry.jpg', 30),
('El origen de las especies', 3, 30.00, 'La teoría de la evolución explicada por Darwin.', 'img/darwin.jpg', 40),
('Don Quijote', 1, 22.00, 'La icónica historia del caballero andante.', 'img/quijote.jpg', 20),
('El Hobbit', 2, 24.00, 'Un viaje épico en la Tierra Media.', 'img/hobbit.jpg', 15);

-- Tabla para registrar las ventas realizadas
CREATE TABLE ventas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  libro_id INT,
  cantidad INT,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (libro_id) REFERENCES libros(id)
);

-- Realizar una venta (por ejemplo, vender 2 libros de "Cien años de soledad")
INSERT INTO ventas (libro_id, cantidad)
VALUES (1, 2);  -- Suponiendo que el libro_id de "Cien años de soledad" es 1 y se vendieron 2 unidades

-- Actualizar la cantidad de libros después de una venta
UPDATE libros
SET cantidad = cantidad - 2
WHERE id = 1;

-- Actualizar las ventas totales del libro
UPDATE libros
SET ventas = ventas + 2
WHERE id = 1;
