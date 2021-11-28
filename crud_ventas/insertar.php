<?php
include("conexion.php");
$con=conectar();

$idsucursal=$_POST['idsucursal'];
$idempleado=$_POST['idempleado'];
$producto=$_POST['producto'];
$CantidadP=$_POST['CantidadP'];
$Fecha=$_POST['Fecha'];
$Hora=$_POST['Hora'];
$VentaT=$_POST['VentaT'];


$sql="INSERT INTO ventas VALUES('$idsucursal','$idempleado','$producto','$CantidadP','$Fecha','$Hora','$VentaT')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ventas.php");
    
}else {
}
?>