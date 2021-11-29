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
    <title>Lista usuarios</title>
</head>
<body>

<table class="table">
    <thead class="table-succes table-striped">
        <tr>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Grupo</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Comentario</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($row=mysqli_fetch_array($query)){
        ?>
            <tr>
                <th><?php echo $row['matricula']?></th>
                <th><?php echo $row['nombre']?></th>
                <th><?php echo $row['grupo']?></th>
                <th><?php echo $row['email']?></th>
                <th><?php echo $row['contrasena']?></th>
                <th><?php echo $row['comentario']?></th>
                <th><a href="delete.php?id=<?php echo $row['matricula'] ?>" class="btn btn danger">Eliminar</a></th>
            </tr>
        
        <?php    
        }
        ?>
    </tbody>
</table>
</body>
</html>