-- Crear la tabla 'categorias'
CREATE TABLE categorias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL UNIQUE,
    disponibilidad BOOLEAN NOT NULL DEFAULT TRUE,
    num_productos INT NOT NULL DEFAULT 0
);

-- Crear la tabla 'productos'
CREATE TABLE productos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL UNIQUE,
    descripcion TEXT NOT NULL,
    tamano VARCHAR(50) NOT NULL,
    cantidad INT NOT NULL DEFAULT 0,
    vigencia DATE NOT NULL,
    imagen VARCHAR(255),
    disponibilidad BOOLEAN NOT NULL DEFAULT TRUE,
    categoria_id INT NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE RESTRICT
);

-- Actualizar el número de productos en la tabla 'categorias'
-- Trigger para incrementar el contador de productos al insertar un nuevo producto
DELIMITER //
CREATE TRIGGER after_insert_producto
AFTER INSERT ON productos
FOR EACH ROW
BEGIN
    UPDATE categorias
    SET num_productos = num_productos + 1
    WHERE id = NEW.categoria_id;
END //
DELIMITER ;

-- Trigger para decrementar el contador de productos al eliminar un producto
DELIMITER //
CREATE TRIGGER after_delete_producto
AFTER DELETE ON productos
FOR EACH ROW
BEGIN
    UPDATE categorias
    SET num_productos = num_productos - 1
    WHERE id = OLD.categoria_id;
END //
DELIMITER ;