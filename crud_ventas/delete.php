<?php

include("conexion.php");
$con=conectar();

$idsucursal=$_GET['id'];

$sql="DELETE FROM ventas  WHERE idsucursal='$idsucursal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>
