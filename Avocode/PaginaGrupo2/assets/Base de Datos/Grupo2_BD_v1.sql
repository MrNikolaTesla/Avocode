CREATE TABLE `producto` (
  `id_producto` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Producto',
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre del Producto',
  `precio` int(20) NOT NULL COMMENT 'Precio del Producto',
  `tipo` varchar(15) NOT NULL COMMENT 'Tipo de producto (vegano, vegetariano, celiaco,  etc).',
  `descripcion` varchar(180) NULL COMMENT 'Descripcion del Producto'
);

CREATE TABLE `factura` (
  `id_factura` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de Factura',
  `cliente` int(10) NOT NULL COMMENT 'Cliente al que le corresponde la factura',
`empleado` int(10) NOT NULL COMMENT 'Empleado que atendió al cliente',
  `fecha` date NOT NULL COMMENT 'Fecha de la factura',
  `hora` varchar(4) NOT NULL COMMENT 'Hora en la que se realizó la factura',
  `forma_pago` enum('Credito','Debito','Online','Casa_Credito') NOT NULL COMMENT 'Forma de pago utilizada para la factura',
  `productos` varchar(100) NOT NULL COMMENT 'Artículos que tiene la factura',
  `monto` int(15) NOT NULL COMMENT 'Monto a pagar por el cliente'
);

CREATE TABLE `mesa` (
  `id_mesa` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de la Mesa',
  `estado` enum('Libre','Ocupada','Reservada') NOT NULL DEFAULT 'Libre' COMMENT 'Estado de la Mesa'
);


CREATE TABLE `usuario` (
  `id_usuario` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Usuario',
  `nombre` varchar(40) NOT NULL COMMENT 'Nombre del Usuario',
  `apellido` varchar(40) NOT NULL COMMENT 'Apellido del Usuario',
  `correo` varchar(60) NOT NULL COMMENT 'Correo del Usuario',
  `password` varchar(20) NOT NULL COMMENT 'Clave del Usuario',
  `direccion` varchar(80) DEFAULT NULL COMMENT 'Direccion de envio del Usuario',
  `telefono` varchar(18) DEFAULT NULL COMMENT 'Telefono de contacto del Usuario',
  `tipo` varchar(30) NOT NULL DEFAULT 'cliente' COMMENT 'Tipo de usuario, para las jerarquias'
);

CREATE TABLE `orden` (
  `id_orden` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de la orden', /*Se crearan FK cliente y empleado para verificar e origen y direccion de la orden*/
  `cliente_orden` int(10) NULL COMMENT '',
  `empleado_orden` int(10) NULL COMMENT '',
  `mesa_orden` int(10) NULL COMMENT '',
  `tipo_orden` enum('Local','Take Away','Delivery') NULL COMMENT 'Tipo de orden funcional',
  `hora` varchar(4) NOT NULL COMMENT '',
  `direccion` varchar(80) NULL COMMENT '',
  `fecha` date NOT NULL COMMENT 'Fecha de la orden realizada',
  `observacion` varchar(90) NULL COMMENT 'Comentarios para realizar el pedido',
  `estado_orden` enum('Generandose...','Pendiente','En Proceso','Completada') NOT NULL COMMENT 'Estado de la orden',
  CONSTRAINT cliente_orden FOREIGN KEY (cliente_orden) REFERENCES usuario(id_usuario),
  CONSTRAINT empleado_orden FOREIGN KEY (empleado_orden) REFERENCES usuario(id_usuario),
  CONSTRAINT mesa_orden FOREIGN KEY (mesa_orden) REFERENCES mesa(id_mesa)
);

CREATE TABLE `detalles_orden` (
  `id_detalle_orden` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de la orden', /*Se crearan FK cliente y empleado para verificar e origen y direccion de la orden*/
  `orden` int(10) NULL COMMENT '',
  `producto_det` int(10) NULL COMMENT '',
  `cantidad_producto` int(10) NOT NULL COMMENT '',
  CONSTRAINT orden FOREIGN KEY (orden) REFERENCES orden(id_orden),
  CONSTRAINT producto_det FOREIGN KEY (producto_det) REFERENCES producto(id_producto)
);

/*Esta tabla es solo un archivador de datos, no se relacionara con ninguna de las otras*/
CREATE TABLE `proveedor` (
  `id_proveedor` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Proveedor',
  `nombre_apellido` varchar(60) NOT NULL COMMENT 'Nombre y Apellido del Proveedor',
  `empresa` varchar(40) NOT NULL COMMENT 'Empresa a la que pertenece el Proveedor',
  `productos` varchar(180) NOT NULL COMMENT 'Productos que proporciona el Proveedor',
  `telefono` varchar(18) NOT NULL COMMENT 'Teléfono del Proveedor'
);

CREATE TABLE `reserva` (
  `id_reserva` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de Mesa',
  `mesa` int(10) NULL COMMENT 'Numero de Mesa',
  `fecha` date NOT NULL COMMENT 'Fecha en la que se ocupo la Mesa',
  `hora` varchar(4) NOT NULL COMMENT 'Hora en que se ocupo la Mesa',
  `cliente` int(10) NULL COMMENT 'Cliente que ocupo la Mesa',
  `empleado` int(10) NULL COMMENT 'Empleado que atendio la Mesa',
  CONSTRAINT cliente FOREIGN KEY (cliente) REFERENCES usuario(id_usuario),
  CONSTRAINT empleado FOREIGN KEY (empleado) REFERENCES usuario(id_usuario),
  CONSTRAINT mesa FOREIGN KEY (mesa) REFERENCES mesa(id_mesa)
);

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('1','Burger Clásica ', '350', 'hamburguesa', ' 160grs de carne, doble cheddar, lechuga, cebolla, tomate y mayonesa. Acompañada de papas rústicas');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('2','Burger Gringa ', '390', 'hamburguesa', ' 160grs de carne, doble cheddar, pepinillos, panceta y ketchup. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('3','Burger Cabrona ', '460', 'hamburguesa', ' 160grs de carne, queso de cabra, muzzarella, pesto de tomates secos, berenjena y mayonesa. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('4','Burger Champi ', '430', 'hamburguesa', ' 160grs de carne, muzzarella, champiñones, tomate, cebolla caramelizada, rúcula, mostaza a la antigua y miel. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('5','Burger Red Hot ', '430', 'hamburguesa', ' 160grs de carne, muzzarella, guacamole, lechuga, tomate, salsa factory picante. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('6','Burger Super Cheese ', '460', 'hamburguesa', ' 160grs de carne, provolone, queso azul, muzzarella, queso crema con hierbas y tomate con orégano. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('7','Sanderburger', '540', 'hamburguesa', 'Doble carne, extra cheddar, extra panceta, huevo a la plancha, lechuga, tomate, cebolla caramelizada y salsa barbacoa. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('8','Edición I-Limitada ', '410', 'hamburguesa', ' 160grs de carne, panceta, doble cheddar, aros de cebolla, mostaza, ketchup. Acompañada de papas rústicas. ');


INSERT INTO factura (id_factura, cliente, empleado, fecha, hora, forma_pago, productos, monto)
VALUES ('1','3', '2', '2022-09-07', '19:00', 'Credito', '2', '230');

INSERT INTO factura (id_factura, cliente, empleado, fecha, hora, forma_pago, productos, monto)
VALUES ('2','4', '1', '2022-09-09', '21:00', 'Debito', '3', '300');

INSERT INTO mesa (id_mesa, estado)
VALUES ('1','Libre');

INSERT INTO mesa (id_mesa, estado)
VALUES ('2','Libre');

INSERT INTO mesa (id_mesa, estado)
VALUES ('3','Libre');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('1','Joshua Uchiha', 'Bread Industries', 'Panes Simples', '098453122');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('2','Edo Brando', 'Green Stairs', 'Lechuga', '093742849');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('3','Amelia Fernandez', 'Porto Dorado', 'Tomate', '093672812');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('4','Lee Tao', 'Manman Tower', 'Carne Simple', '091273479');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('1', 'Martin', 'Mainentti', 'TEST@gmail.com', 'nonPermanent', 'Un sitio', '092145344', 'administrador');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('2', 'Lautaro', 'Galeazzi', 'correo@gmail.com', 'otroPassword', 'Otro sitio', '097834128', 'empleado');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('3', 'Sebastian', 'Amestoy', 'correo2@gmail.com', 'tercerPassword', 'Un lugar', '095732812', 'cliente');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('4', 'Facundo', 'Guerra', 'Aguacate@gmail.com', 'avocado', 'La Tierra del Aguacate', '094206696', 'cliente');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('5', 'Pepe', 'Perez', 'correo3@gmail.com', 'quintoPassword', 'Casa de Perez', '097162386', 'cliente');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('6', 'Lian', 'Gomez', 'correo4@gmail.com', 'sextaPassword', 'Tal calle entre Tal calle y Tal calle', '097984686', 'cliente');

INSERT INTO reserva (id_reserva, mesa, fecha, hora, cliente, empleado)
VALUES ('1', '1', '2022-09-07', '19:00', '3', '2');

INSERT INTO reserva (id_reserva, mesa, fecha, hora, cliente, empleado)
VALUES ('2', '2', '2022-09-09', '21:00', '4', '2');

INSERT INTO orden (id_orden, cliente_orden, empleado_orden, mesa_orden, tipo_orden, hora, direccion, fecha, observacion, estado_orden)
VALUES ('1', '3', '1', '2', 'Take Away', '16:00', null, '2022-10-21', 'Especificaciones de orden IDK', 'Completada');

INSERT INTO orden (id_orden, cliente_orden, empleado_orden, mesa_orden, tipo_orden, hora, direccion, fecha, observacion, estado_orden)
VALUES ('2', '4', '2', '1', 'Local', '12:00', null, '2022-10-24', 'Mas cosas importantes', 'Completada');

INSERT INTO detalles_orden (id_detalle_orden, orden, producto_det, cantidad_producto)
VALUES ('1','1','2','1');

INSERT INTO detalles_orden (id_detalle_orden, orden, producto_det, cantidad_producto)
VALUES ('2','2','3','3');