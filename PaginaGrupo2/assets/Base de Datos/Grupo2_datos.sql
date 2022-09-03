INSERT INTO articulo (id_articulo, nombre, precio, tipo)
VALUES ('0','Hamburguesa de Conocimiento', '500', 'Standard');

INSERT INTO articulo (id_articulo, nombre, precio, tipo)
VALUES ('1','Hamburguesa Clasica', '230', 'Standard');

INSERT INTO articulo (id_articulo, nombre, precio, tipo)
VALUES ('2','Hamburguesa Vegana', '270', 'Vegana');

INSERT INTO factura (id_factura, cliente, empleado, fecha, hora, forma_pago, articulos, monto)
VALUES ('0','3', '1', '2022-09-07', '19:00', 'Credito', '1', '230');

INSERT INTO factura (id_factura, cliente, empleado, fecha, hora, forma_pago, articulos, monto)
VALUES ('1','2', '0', '2022-09-09', '21:00', 'Debito', '2', '300');

INSERT INTO mesa (id_mesa, estado)
VALUES ('0','Libre');

INSERT INTO mesa (id_mesa, estado)
VALUES ('1','Libre');

INSERT INTO mesa (id_mesa, estado)
VALUES ('2','Libre');

INSERT INTO orden (id_orden, fecha, observacion, hora, articulos, precio)
VALUES ('0','2022-09-07', '-', '19:00', '1', '230');

INSERT INTO orden (id_orden, fecha, observacion, hora, articulos, precio)
VALUES ('1','2022-09-09', 'Panes clasicos', '21:00', '2', '300');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('0','Joshua Uchiha', 'Bread Industries', 'Panes Simples', '98453122');

INSERT INTO proveedor (id_proveedor, nombre_apellido, empresa, productos, telefono)
VALUES ('1','Edo Brando', 'Green Stairs', 'Lechuga', '93742849');

INSERT INTO reserva (id_reserva, mesa, fecha, hora, cliente, empleado)
VALUES ('0', '1', '2022-09-07', '19:00', '3', '1');

INSERT INTO reserva (id_reserva, mesa, fecha, hora, cliente, empleado)
VALUES ('1', '2', '2022-09-09', '21:00', '2', '1');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('0', 'Martin', 'Mainentti', 'TEST@gmail.com', 'nonPermanent', 'Un sitio', '092145344', 'administrador');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('1', 'Lautaro', 'Galeazzi', 'correo@gmail.com', 'otroPassword', 'Otro sitio', '097834128', 'empleado');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('2', 'Sebastian', 'Amestoy', 'correo2@gmail.com', 'tercerPassword', 'Un lugar', '095732812', 'cliente');

INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, direccion, telefono, tipo)
VALUES ('3', 'Facundo', 'Guerra', 'Aguacate@gmail.com', 'avocado', 'La Tierra del Aguacate', '097996696', 'cliente');