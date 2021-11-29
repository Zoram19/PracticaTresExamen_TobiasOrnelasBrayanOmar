<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM usuarios";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body style="background-color: cornflowerblue;">
    <h1 style="text-align: center;"> Formulario para ingresar datos: </h1>

    <center>
<form action="insertar.php" method="post">
<h2 > Matricula </h2><input type="number" name="matricula" placeholder="Numero completo de matricula" require> <br>

<h2> Nombre </h2><input type="text" name="nombre" placeholder="Nombre Completo con apellidos" > <br>

<h2> Grupo </h2><input type="text" name="grupo" placeholder="Poner el grado y grupo" require> <br>

<h2> Email </h2><input type="email" name="email" placeholder="Email completo" require> <br>

<h2> Contraseña </h2><input type="password" name="contrasena" placeholder="Escriba la contraseña" require> <br>

<h2> Comentario </h2><input type="text" name="comentario" placeholder="Escriba algun comentario" require> <br>
<br>

<input type="submit"  class="btn btn-primary" value="Registrar">
</form>
<br>
<form action="lista.php" method="POST">
    <input type="submit" class="btn btn-primary" value="Buscar">
</form>
<br>
<form action="lista.php" method="POST">
    <input type="submit" class="btn btn-primary" value="Eliminar">
</form>
</center>





</body>
</html>