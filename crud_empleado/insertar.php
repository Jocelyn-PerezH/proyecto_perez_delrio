<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$ApellidoP=$_POST['ApellidoP'];
$ApellidoM=$_POST['ApellidoM'];
$FechaN=$_POST['FechaN'];
$curp=$_POST['curp'];
$correo=$_POST['correo'];


$sql="INSERT INTO empleado VALUES('$idempleado','$nombre','$ApellidoP','$ApellidoM','$FechaN','$curp','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>