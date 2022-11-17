CREATE TABLE `producto` (
  `id_producto` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Producto',
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre del Producto',
  `precio` int(20) NOT NULL COMMENT 'Precio del Producto',
  `tipo` varchar(15) NOT NULL COMMENT 'Tipo de producto (Hamburguesa, Bebida, Acompañamiento).',
  `descripcion` varchar(180) NULL COMMENT 'Descripcion del Producto'
);

CREATE TABLE `factura` (
  `id_factura` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de Factura',
  `cliente` int(10) NOT NULL COMMENT 'Cliente al que le corresponde la factura',
`empleado` int(10) NOT NULL COMMENT 'Empleado que atendió al cliente',
  `fecha` date NOT NULL COMMENT 'Fecha de la factura',
  `hora` varchar(5) NOT NULL COMMENT 'Hora en la que se realizó la factura',
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
  `direccion` varchar(80) DEFAULT NULL COMMENT 'Direcciín de envío del Usuario',
  `telefono` varchar(18) DEFAULT NULL COMMENT 'Teléfono de contacto del Usuario',
  `tipo` varchar(30) NOT NULL DEFAULT 'cliente' COMMENT 'Tipo de usuario, para las jerarquias y permisos'
);

CREATE TABLE `orden` (
  `id_orden` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de la orden', /*Se crearan FK cliente y empleado para verificar e origen y direccion de la orden*/
  `cliente_orden` int(10) NULL COMMENT 'Cliente al que le corresponde la orden',
  `empleado_orden` int(10) NULL COMMENT 'Empleado que realizó la orden',
  `mesa_orden` int(10) NULL COMMENT 'Mesa asignada a la orden',
  `tipo_orden` enum('Local','Take Away','Delivery') NULL COMMENT 'Tipo de orden',
  `hora` varchar(5) NOT NULL COMMENT 'Hora de la orden',
  `direccion` varchar(80) NULL COMMENT 'Dirección de la orden',
  `fecha` date NOT NULL COMMENT 'Fecha de la orden realizada',
  `observacion` varchar(90) NULL COMMENT 'Comentarios para el pedido',
  `estado_orden` enum('Generandose...','Pendiente','En Proceso','Completada') NOT NULL COMMENT 'Estado de la orden',
  CONSTRAINT cliente_orden FOREIGN KEY (cliente_orden) REFERENCES usuario(id_usuario),
  CONSTRAINT empleado_orden FOREIGN KEY (empleado_orden) REFERENCES usuario(id_usuario),
  CONSTRAINT mesa_orden FOREIGN KEY (mesa_orden) REFERENCES mesa(id_mesa)
);

CREATE TABLE `detalles_orden` (
  `id_detalle_orden` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de la línea', /*Se crearan FK cliente y empleado para verificar e origen y direccion de la orden*/
  `orden` int(10) NULL COMMENT 'ID de la orden',
  `producto_det` int(10) NULL COMMENT 'ID del producto de la línea',
  `cantidad_producto` int(10) NOT NULL COMMENT 'Cantidad del producto de la línea',
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
  `mesa` int(10) NULL COMMENT 'Número de Mesa',
  `fecha` date NOT NULL COMMENT 'Fecha en la que se ocupó la Mesa',
  `hora` varchar(5) NOT NULL COMMENT 'Hora en que se ocupó la Mesa',
  `cliente` int(10) NULL COMMENT 'Cliente que ocupó la Mesa',
  `empleado` int(10) NULL COMMENT 'Empleado que atendió la Mesa',
  CONSTRAINT cliente FOREIGN KEY (cliente) REFERENCES usuario(id_usuario),
  CONSTRAINT empleado FOREIGN KEY (empleado) REFERENCES usuario(id_usuario),
  CONSTRAINT mesa FOREIGN KEY (mesa) REFERENCES mesa(id_mesa)
);
INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('1','Edición Limitada', '410', 'hamburguesa', 'Carne, doble cheddar, panceta, cebolla Crispy y spicy BBQ. ');


INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('2','Burger Clásica ', '350', 'hamburguesa', ' 160grs de carne, doble cheddar, lechuga, cebolla, tomate y mayonesa. Acompañada de papas rústicas');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('3','Burger Gringa ', '390', 'hamburguesa', ' 160grs de carne, doble cheddar, pepinillos, panceta y ketchup. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('4','Burger Cabrona ', '460', 'hamburguesa', ' 160grs de carne, queso de cabra, muzzarella, pesto de tomates secos, berenjena y mayonesa. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('5','Burger Champi ', '430', 'hamburguesa', ' 160grs de carne, muzzarella, champiñones, tomate, cebolla caramelizada, rúcula, mostaza a la antigua y miel. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('6','Burger Red Hot ', '430', 'hamburguesa', ' 160grs de carne, muzzarella, guacamole, lechuga, tomate, salsa factory picante. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('7','Super Cheese ', '460', 'hamburguesa', ' 160grs de carne, provolone, queso azul, muzzarella, queso crema con hierbas y tomate con orégano. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('8','Sanderburger', '540', 'hamburguesa', 'Doble carne, extra cheddar, extra panceta, huevo a la plancha, lechuga, tomate, cebolla caramelizada y salsa barbacoa. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('9','Edición I-Limitada ', '410', 'hamburguesa', ' 160grs de carne, panceta, doble cheddar, aros de cebolla, mostaza, ketchup. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('10','Burger Campo', '490', 'hamburguesa', ' Pollo a la plancha, doble cheddar, panceta, tomate, lechuga, mayonesa de ajo. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('11','Burger Salmón', '540', 'hamburguesa', 'Salmón, muzzarella, queso crema con hierbas, cebolla caramelizada y rúcula. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('12','Burger Lentejas', '330', 'hamburguesa', 'Burger de lentejas, muzzarella, berenjena grillada, cebolla caramelizada, lechuga, tomate, criolla y mayonesa. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('13','Burger Blue Cheese', '350', 'hamburguesa', 'Burger de calabaza y avena, queso azul, muzzarella, rúcula, cebolla caramelizada y mayonesa de ajo. Acompañada de papas rústicas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('14','Frambuesas Bañadas', '280', 'acompanamiento', 'Frambuesas bañadas en chocolate blanco y chocolate con leche. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('15','Aros de Cebolla', '260', 'acompanamiento', 'Acompañados de dip de salsa a elección: alioli o salsa picante. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('16','Papas', '260', 'acompanamiento', null);

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('17','Agua 600ml', '70', 'bebida', 'Sin gas / Con gas. ');

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('18','Coca Cola 600ml', '110', 'bebida', null);

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('19','Fanta 600ml', '110', 'bebida', null);

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('20','IPA Atómica', '190', 'bebida', null);

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('21','Blonde Ale', '190', 'bebida', null);

INSERT INTO producto (id_producto, nombre, precio, tipo, descripcion)
VALUES ('22','Scottish', '190', 'bebida', null);

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

INSERT INTO mesa (id_mesa, estado)
VALUES ('4','Libre');

INSERT INTO mesa (id_mesa, estado)
VALUES ('5','Libre');

INSERT INTO mesa (id_mesa, estado)
VALUES ('6','Libre');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('1','Proveedor 1', 'Empresa 1', 'Panes simples', '091111111');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('2','Proveedor 2', 'Empresa 2', 'Lechuga, tomate, zanahoria', '092222222');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('3','Proveedor 3', 'Empresa 3', 'Carne picada Vacuna, Carne picada de Cerdo', '093333333');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('4','Proveedor 4', 'Empresa 4', 'Huevos', '094444444');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('1','Administrador 1', 'Apellido 1 ADMIN', 'ADMIN@gmail.com', 'ADMINISTRADOR1', 'DIRECCION 1 ADMIN', '091010101', 'administrador');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('2', 'Administrador 2', 'Apellido 2 ADMIN', 'ADMIN2@gmail.com', 'ADMINISTRADOR2', 'DIRECCION 2 ADMIN', '097070707', 'administrador');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('3','Empleado 1', 'Apellido 1 EMP', 'EMP@gmail.com', 'EMPLEADO1', 'DIRECCION 1 EMP', '092020202', 'empleado');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('4', 'Empleado 2', 'Apellido 2 EMP', 'EMP2@gmail.com', 'EMPLEADO2', 'DIRECCION 2 EMP', '098080808', 'empleado');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('5', 'Cliente 1', 'Apellido 1 CLIENTE', 'CLIENTE1@gmail.com', 'CLIENTE1', 'DIRECCION 1 CLIENTE', '093030303', 'cliente');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('6', 'Cliente 2', 'Apellido 2 CLIENTE', 'CLIENTE2@gmail.com', 'CLIENTE2', 'DIRECCION 2 CLIENTE', '094040404', 'cliente');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('7', 'Cliente 3', 'Apellido 3 CLIENTE', 'CLIENTE3@gmail.com', 'CLIENTE3', 'DIRECCION 3 CLIENTE', '095050505', 'cliente');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('8', 'Cliente 4', 'Apellido 4 CLIENTE', 'CLIENTE4@gmail.com', 'CLIENTE4', 'DIRECCION 4 CLIENTE', '096060606', 'cliente');

INSERT INTO reserva (id_reserva, mesa, fecha, hora, cliente, empleado)
VALUES ('1', '1', '2022-09-07', '19:00', '3', '2');

INSERT INTO reserva (id_reserva, mesa, fecha, hora, cliente, empleado)
VALUES ('2', '2', '2022-09-09', '21:00', '4', '2');

INSERT INTO orden (id_orden, cliente_orden, empleado_orden, mesa_orden, tipo_orden, hora, direccion, fecha, observacion, estado_orden)
VALUES ('1', '3', '1', null, 'Take Away', '20:00', null, '2022-10-21', 'Observacion 1', 'Completada');

INSERT INTO orden (id_orden, cliente_orden, empleado_orden, mesa_orden, tipo_orden, hora, direccion, fecha, observacion, estado_orden)
VALUES ('2', '4', '2', '1', 'Local', '21:00', null, '2022-10-22', 'Observacion 2', 'Completada');

INSERT INTO orden (id_orden, cliente_orden, empleado_orden, mesa_orden, tipo_orden, hora, direccion, fecha, observacion, estado_orden)
VALUES ('3', '5', '2', null, 'Delivery', '22:00','Dirección Domicilio 1', '2022-10-23', 'Observacion 3', 'Completada');

INSERT INTO detalles_orden (id_detalle_orden, orden, producto_det, cantidad_producto)
VALUES ('1','1','2','1');

INSERT INTO detalles_orden (id_detalle_orden, orden, producto_det, cantidad_producto)
VALUES ('2','2','3','3');

INSERT INTO detalles_orden (id_detalle_orden, orden, producto_det, cantidad_producto)
VALUES ('3','3','4','2');