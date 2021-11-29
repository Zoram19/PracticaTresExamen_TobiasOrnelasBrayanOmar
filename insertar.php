<?php 
include("conexion.php");
$con=conectar();

$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$grupo=$_POST['grupo'];
$email=$_POST['email'];
$contrasena=$_POST['contrasena'];
$comentario=$_POST['comentario'];

$sql="INSERT INTO usuarios VALUES('$matricula', '$nombre', '$grupo', '$email', '$contrasena', '$comentario')";
$query= mysqli_query($con,$sql);

if($query){
    header("location: test.php");

}else{
}
?>