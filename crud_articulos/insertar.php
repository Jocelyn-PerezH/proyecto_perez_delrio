<?php
include("conexion.php");
$con=conectar();

$idarticulo=$_POST['idarticulo'];
$CodigoA=$_POST['CodigoA'];
$Nombre=$_POST['Nombre'];
$Piezas=$_POST['Piezas'];
$FechaI=$_POST['FechaI'];
$Porveedor=$_POST['Porveedor'];
$Precio=$_POST['Precio'];


$sql="INSERT INTO articulos VALUES('$idarticulo','$CodigoA','$Nombre','$Piezas','$FechaI','$Porveedor','$Precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulos.php");
    
}else {
}
?>