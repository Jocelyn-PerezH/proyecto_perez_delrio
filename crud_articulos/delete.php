<?php

include("conexion.php");
$con=conectar();

$idarticulo=$_GET['id'];

$sql="DELETE FROM articulos  WHERE idarticulo='$idarticulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulos.php");
    }
?>
