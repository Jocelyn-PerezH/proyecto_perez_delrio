<?php
include("conexion.php");
$con=conectar();

$idsucursal=$_POST['idsucursal'];
$ciudad=$_POST['ciudad'];
$ubicacion=$_POST['ubicacion'];
$CPostal=$_POST['CPostal'];
$telefono=$_POST['telefono'];
$horario=$_POST['horario'];
$gerente=$_POST['gerente'];


$sql="INSERT INTO sucursal VALUES('$idsucursal','$ciudad','$ubicacion','$CPostal','$telefono','$horario','$gerente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: sucursales.php");
    
}else {
}
?>