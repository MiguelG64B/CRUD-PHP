<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];


$sql="INSERT INTO usuario VALUES('','$nombre','$apellido','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    header("Location: ../index.php");
} else{
    
}
