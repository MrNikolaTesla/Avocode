<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Menu Principal</title>
    <style>
ul {
  list-style-type: none;
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #3F3328;
}
</style>
</head>
<body>
<ul>
<li style="float:left"><a href="">Opcion1Nav</a></li> <!--Aca iria "GestionDeArticulos.php", pero me gustaria hacer una verificacion de permisos antes"-->
<li style="float:left"><a href="">Opcion2Nav</a></li>
<li style="float:left"><a href="">Opcion3Nav</a></li>
<li style="float:left"><a href="">Opcion4Nav</a></li>
<li style="float:left"><a href="">Opcion5Nav</a></li>
<li style="float:left"><a href="">Opcion6Nav</a></li>

</ul>
</body>
</html>
