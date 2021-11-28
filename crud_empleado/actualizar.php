<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE idempleado='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idempleado" value="<?php echo $row['idempleado']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="ApellidoP" placeholder="Apellido Paterno" value="<?php echo $row['ApellidoP']  ?>">
                                <input type="text" class="form-control mb-3" name="ApellidoM" placeholder="Apellido Materno" value="<?php echo $row['ApellidoM']  ?>">
                                <input type="text" class="form-control mb-3" name="FechaN" placeholder="Fecha de nacimiento" value="<?php echo $row['FechaN']  ?>">
                                <input type="text" class="form-control mb-3" name="curp" placeholder="Curp" value="<?php echo $row['curp']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>