<?php

include("conexion.php");
$con=conectar();

$matricula=$_GET['id'];

$sql="DELETE FROM usuarios WHERE matricula='$matricula'";
$query=mysqli_query($con,$sql);

    if($query){
        header("location: test.php");
    }


?>