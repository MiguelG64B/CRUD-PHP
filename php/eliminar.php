<?php

include("conexion.php");
$con=conectar();

$id_u=$_GET['id'];

$sql="DELETE FROM usuario  WHERE id='$id_u'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
?>
