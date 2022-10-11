CREATE TABLE `articulo` (
  `id_articulo` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Producto',
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre del Producto',
  `precio` int(20) NOT NULL COMMENT 'Precio del Producto',
  `tipo` varchar(15) NOT NULL COMMENT 'Tipo de producto (vegano, vegetariano, celiaco,  etc).'
);

CREATE TABLE `factura` (
  `id_factura` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de Factura',
  `cliente` int(10) NOT NULL COMMENT 'Cliente al que le corresponde la factura',
`empleado` int(10) NOT NULL COMMENT 'Empleado que atendió al cliente',
  `fecha` date NOT NULL COMMENT 'Fecha de la factura',
  `hora` varchar(10) NOT NULL COMMENT 'Hora en la que se realizó la factura',
  `forma_pago` enum('Credito','Debito','Online','Casa_Credito') NOT NULL COMMENT 'Forma de pago utilizada para la factura',
  `articulos` varchar(100) NOT NULL COMMENT 'Artículos que tiene la factura',
  `monto` int(15) NOT NULL COMMENT 'Monto a pagar por el cliente'
);

CREATE TABLE `mesa` (
  `id_mesa` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de la Mesa',
  `estado` enum('Libre','Ocupada','Reservada') NOT NULL DEFAULT 'Libre' COMMENT 'Estado de la Mesa'
);

CREATE TABLE `orden` (
  `id_orden` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de la orden', /*Se crearan FK cliente y empleado para verificar e origen y direccion de la orden*/
  `fecha` date NOT NULL COMMENT 'Fecha de la orden realizada',
  `observacion` varchar(90) NOT NULL COMMENT 'Comentarios para realizar el pedido',
  `hora` varchar(10) NOT NULL COMMENT 'Hora de la orden',
  `articulos` varchar(100) NOT NULL COMMENT 'Articulos de la orden', /*Tanto articulos como precio seran cambiados por una relacion segun sea posible, POR AHORA NO SON FUNCIONALES, al igual que otros atributos ARTICULO*/
  /*tabla a nombre de lineas, permitiendo evitar la redundancia de multiples productos dentro de una misma comanda*/
  `precio` int(10) NOT NULL COMMENT 'Precio de la orden'
);

/*Esta tabla es solo un archivador de datos, no se relacionara con ninguna de las otras*/
CREATE TABLE `proveedor` (
  `id_proveedor` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Proveedor',
  `nombre_apellido` varchar(60) NOT NULL COMMENT 'Nombre y Apellido del Proveedor',
  `empresa` varchar(40) NOT NULL COMMENT 'Empresa a la que pertenece el Proveedor',
  `productos` varchar(30) NOT NULL COMMENT 'Productos que proporciona el Proveedor',
  `telefono` varchar(18) NOT NULL COMMENT 'Teléfono del Proveedor'
);

CREATE TABLE `reserva` (
  `id_reserva` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de Mesa',
  `mesa` int(10) NOT NULL COMMENT 'Numero de Mesa',
  `fecha` date NOT NULL COMMENT 'Fecha en la que se ocupo la Mesa',
  `hora` varchar(10) NOT NULL COMMENT 'Hora en que se ocupo la Mesa',
  `cliente` int(10) NOT NULL COMMENT 'Cliente que ocupo la Mesa',
  `empleado` int(10) NOT NULL COMMENT 'Empleado que atendio la Mesa'
);

/*Muy probablemente tengamos que hacer una nueva entidad a nombre de empleados para las FK a futuro*/
CREATE TABLE `usuario` (
  `id_usuario` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Usuario',
  `nombre` varchar(40) NOT NULL COMMENT 'Nombre del Usuario',
  `apellido` varchar(40) NOT NULL COMMENT 'Apellido del Usuario',
  `correo` varchar(60) NOT NULL COMMENT 'Correo del Usuario',
  `password` varchar(20) NOT NULL COMMENT 'Clave del Usuario',
  `direccion` varchar(80) DEFAULT NULL COMMENT 'Direccion de envio del Usuario',
  `telefono` varchar(18) DEFAULT NULL COMMENT 'Telefono de contacto del Usuario',/*Por algun motivo si ponemos el 0 primero la BD lo elimina, he de suponer porque el valor realmente*/
  /*no cambia, eso habria que cambiarlo segun sepamos porque sucede.*/
  `tipo` varchar(30) NOT NULL DEFAULT 'cliente' COMMENT 'Tipo de usuario, para las jerarquias'
);

INSERT INTO articulo (id_articulo, nombre, precio, tipo)
VALUES ('1','Hamburguesa de Conocimiento', '500', 'Standard');

INSERT INTO articulo (id_articulo, nombre, precio, tipo)
VALUES ('2','Hamburguesa Clasica', '230', 'Standard');

INSERT INTO articulo (id_articulo, nombre, precio, tipo)
VALUES ('3','Hamburguesa Vegana', '270', 'Vegana');

INSERT INTO factura (id_factura, cliente, empleado, fecha, hora, forma_pago, articulos, monto)
VALUES ('1','3', '2', '2022-09-07', '19:00', 'Credito', '2', '230');

INSERT INTO factura (id_factura, cliente, empleado, fecha, hora, forma_pago, articulos, monto)
VALUES ('2','4', '1', '2022-09-09', '21:00', 'Debito', '3', '300');

INSERT INTO mesa (id_mesa, estado)
VALUES ('1','Libre');

INSERT INTO mesa (id_mesa, estado)
VALUES ('2','Libre');

INSERT INTO mesa (id_mesa, estado)
VALUES ('3','Libre');

INSERT INTO orden (id_orden, fecha, observacion, hora, articulos, precio)
VALUES ('1','2022-09-07', '-', '19:00', '2', '230');

INSERT INTO orden (id_orden, fecha, observacion, hora, articulos, precio)
VALUES ('2','2022-09-09', 'Panes clasicos', '21:00', '3', '300');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('1','Joshua Uchiha', 'Bread Industries', 'Panes Simples', '098453122');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('2','Edo Brando', 'Green Stairs', 'Lechuga', '093742849');

INSERT INTO reserva (id_reserva, mesa, fecha, hora, cliente, empleado)
VALUES ('1', '1', '2022-09-07', '19:00', '3', '2');

INSERT INTO reserva (id_reserva, mesa, fecha, hora, cliente, empleado)
VALUES ('2', '2', '2022-09-09', '21:00', '4', '2');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('1', 'Martin', 'Mainentti', 'TEST@gmail.com', 'nonPermanent', 'Un sitio', '092145344', 'administrador');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('2', 'Lautaro', 'Galeazzi', 'correo@gmail.com', 'otroPassword', 'Otro sitio', '097834128', 'empleado');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('3', 'Sebastian', 'Amestoy', 'correo2@gmail.com', 'tercerPassword', 'Un lugar', '095732812', 'cliente');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('4', 'Facundo', 'Guerra', 'Aguacate@gmail.com', 'avocado', 'La Tierra del Aguacate', '097996696', 'cliente');