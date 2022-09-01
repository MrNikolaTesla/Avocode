
CREATE TABLE `articulo` (
  `id_articulo` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Producto',
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre del Producto',
  `precio` int(20) NOT NULL COMMENT 'Precio del Producto',
  `tipo` varchar(15) NOT NULL COMMENT 'Tipo de producto (vegano, vegetariano, celíaco,  etc).'
);

CREATE TABLE `factura` (
  `id_factura` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de Factura',
  `cliente` varchar(40) NOT NULL COMMENT 'Cliente al que le corresponde la factura', --Esto seria FK
`empleado` varchar(40) NOT NULL COMMENT 'Empleado que atendió al cliente', --Esto seria FK
  `fecha` date NOT NULL COMMENT 'Fecha de la factura',
  `hora` varchar(10) NOT NULL COMMENT 'Hora en la que se realizó la factura',
  `forma_pago` enum('Credito','Debito','Online','Casa_Credito') NOT NULL COMMENT 'Forma de pago utilizada para la factura',
  `articulos` varchar(100) NOT NULL COMMENT 'Artículos que tiene la factura',
  `monto` int(15) NOT NULL COMMENT 'Monto a pagar por el cliente'
);

CREATE TABLE `mesa` (
  `id_mesa` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de la Mesa',
  `estado` enum('Libre','Ocupada','Reservada') NOT NULL COMMENT 'Estado de la Mesa'
);

CREATE TABLE `orden` (
  `id_orden` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de la orden',
  `fecha` date NOT NULL COMMENT 'Fecha de la orden realizada',
  `observacion` varchar(90) NOT NULL COMMENT 'Comentarios para realizar el pedido',
  `hora` varchar(10) NOT NULL COMMENT 'Hora de la orden',
  `articulos` varchar(100) NOT NULL COMMENT 'Articulos de la orden', --Este trozo de aca va a cambiar con una relacion a una entidad nueva que tenemos que pensar mejor
  -- para no crear redundancia a la hora de poner multiples productos relacionados a la misma orden
  `precio` int(10) NOT NULL COMMENT 'Precio de la orden'
);

CREATE TABLE `proveedor` ( --Esta tabla solo va a ser un CRUD, no se relacionara con nada mas
  `id_proveedor` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Proveedor',
  `nombre_apellido` varchar(60) NOT NULL COMMENT 'Nombre y Apellido del Proveedor',
  `empresa` varchar(40) NOT NULL COMMENT 'Empresa a la que pertenece el Proveedor',
  `productos` varchar(30) NOT NULL COMMENT 'Productos que proporciona el Proveedor',
  `telefono` int(13) NOT NULL COMMENT 'Teléfono del Proveedor'
);

CREATE TABLE `reserva` (
  `id_reserva` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID de Mesa',
  `mesa` int(10) NOT NULL COMMENT 'Numero de Mesa',
  `fecha` date NOT NULL COMMENT 'Fecha en la que se ocupo la Mesa',
  `hora` int(10) NOT NULL COMMENT 'Hora en que se ocupo la Mesa',
  `cliente` int(40) NOT NULL COMMENT 'Cliente que ocupo la Mesa', --Esto seria FK
  `empleado` int(40) NOT NULL COMMENT 'Empleado que atendio la Mesa' --Esto seria FK
);

CREATE TABLE `usuario` (
  `id_usuario` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT COMMENT 'ID del Usuario', --Aca probablemente no tengamos que crear una entidad empleado y relacionarla con usuario, principalmente
  --a la hora de hacer las FK de arriba
  `nombre` varchar(40) NOT NULL COMMENT 'Nombre del Usuario',
  `apellido` varchar(40) NOT NULL COMMENT 'Apellido del Usuario',
  `correo` varchar(60) NOT NULL COMMENT 'Correo del Usuario',
  `password` varchar(20) NOT NULL COMMENT 'Clave del Usuario',
  `direccion` varchar(80) DEFAULT NULL COMMENT 'Direccion de envio del Usuario',
  `telefono` int(13) DEFAULT NULL COMMENT 'Telefono de contacto del Usuario',
  `tipo` varchar(30) NOT NULL DEFAULT 'cliente' COMMENT 'Tipo de usuario, para las jerarquias'
);