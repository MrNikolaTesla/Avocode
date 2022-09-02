--Tuvimos grandes cantidades de problemas con las FK, principalmente a la hora de agregarlas y exportarlas, por lo tanto, las mismas estan faltantes es este boceto de BD
--Cabe aclarar que si sabemos que atributos volver FK (Principalmente cliente y empleado), los hubieramos colocado pero tuvimos 4000 errores, no teniamos dia para preguntar e internet no logro proporcionarnos una respuesta

CREATE TABLE `articulo` (
  `id` int(10) PRIMARY KEY NOT NULL COMMENT 'ID del Producto',
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre del Producto',
  `precio` int(20) NOT NULL COMMENT 'Precio del Producto',
  `tipo` varchar(15) NOT NULL COMMENT 'Tipo de producto (vegano, vegetariano, celiaco,  etc).'
);

CREATE TABLE `factura` (
  `id` int(10) PRIMARY KEY NOT NULL COMMENT 'ID de Factura',
  `cliente` int(10) NOT NULL COMMENT 'Cliente al que le corresponde la factura',
`empleado` int(10) NOT NULL COMMENT 'Empleado que atendió al cliente',
  `fecha` date NOT NULL COMMENT 'Fecha de la factura',
  `hora` varchar(10) NOT NULL COMMENT 'Hora en la que se realizó la factura',
  `forma_pago` enum('Credito','Debito','Online','Casa_Credito') NOT NULL COMMENT 'Forma de pago utilizada para la factura',
  `articulos` varchar(100) NOT NULL COMMENT 'Artículos que tiene la factura',
  `monto` int(15) NOT NULL COMMENT 'Monto a pagar por el cliente'
);

CREATE TABLE `mesa` (
  `id` int(10) PRIMARY KEY NOT NULL COMMENT 'ID de la Mesa',
  `estado` enum('Libre','Ocupada','Reservada') NOT NULL COMMENT 'Estado de la Mesa'
);

CREATE TABLE `orden` (
  `id` int(10) PRIMARY KEY NOT NULL COMMENT 'ID de la orden', --Se crearan FK cliente y empleado para verificar e origen y direccion de la orden
  `fecha` date NOT NULL COMMENT 'Fecha de la orden realizada',
  `observacion` varchar(90) NOT NULL COMMENT 'Comentarios para realizar el pedido',
  `hora` varchar(10) NOT NULL COMMENT 'Hora de la orden',
  `articulos` varchar(100) NOT NULL COMMENT 'Articulos de la orden', --Tanto articulos como precio seran cambiados por una relacion segun sea posible
  --tabla a nombre de lineas, permitiendo evitar la redundancia de multiples productos dentro de una misma comanda
  `precio` int(10) NOT NULL COMMENT 'Precio de la orden'
);

--Esta tabla es solo un archivador de datos, no se relacionara con ninguna de las otras
CREATE TABLE `proveedor` (
  `id` int(10) PRIMARY KEY NOT NULL COMMENT 'ID del Proveedor',
  `nombre_apellido` varchar(60) NOT NULL COMMENT 'Nombre y Apellido del Proveedor',
  `empresa` varchar(40) NOT NULL COMMENT 'Empresa a la que pertenece el Proveedor',
  `productos` varchar(30) NOT NULL COMMENT 'Productos que proporciona el Proveedor',
  `telefono` int(13) NOT NULL COMMENT 'Teléfono del Proveedor'
);

CREATE TABLE `reserva` (
  `id` int(10) PRIMARY KEY NOT NULL COMMENT 'ID de Mesa',
  `mesa` int(10) NOT NULL COMMENT 'Numero de Mesa',
  `fecha` date NOT NULL COMMENT 'Fecha en la que se ocupo la Mesa',
  `hora` varchar(10) NOT NULL COMMENT 'Hora en que se ocupo la Mesa',
  `cliente` int(10) NOT NULL COMMENT 'Cliente que ocupo la Mesa',
  `empleado` int(10) NOT NULL COMMENT 'Empleado que atendio la Mesa'
);

--Muy probablemente tengamos que hacer una nueva entidad a nombre de empleados para las FK a futuro
CREATE TABLE `usuario` (
  `id` int(10) PRIMARY KEY NOT NULL COMMENT 'ID del Usuario',
  `nombre` varchar(40) NOT NULL COMMENT 'Nombre del Usuario',
  `apellido` varchar(40) NOT NULL COMMENT 'Apellido del Usuario',
  `correo` varchar(60) NOT NULL COMMENT 'Correo del Usuario',
  `password` varchar(20) NOT NULL COMMENT 'Clave del Usuario',
  `direccion` varchar(80) DEFAULT NULL COMMENT 'Direccion de envio del Usuario',
  `telefono` int(13) DEFAULT NULL COMMENT 'Telefono de contacto del Usuario',--Por algun motivo si ponemos el 0 primero la BD lo elimina, he de suponer porque el valor realmente no cambia, eso habria que cambiarlo segun sepamos porque sucede.
  `tipo` varchar(30) NOT NULL DEFAULT 'cliente' COMMENT 'Tipo de usuario, para las jerarquias'
);