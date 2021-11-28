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

$sql="UPDATE ventas SET  idempleado='$idempleado',producto='$producto',CantidadP='$CantidadP',Fecha='$Fecha',Hora='$Hora',VentaT='$VentaT' WHERE idsucursal='$idsucursal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>