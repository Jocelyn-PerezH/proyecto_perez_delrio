<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM sucursal WHERE idsucursal='$id'";
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
                    
                                <input type="hidden" name="idsucursal" value="<?php echo $row['idsucursal']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad" value="<?php echo $row['ciudad']  ?>">
                                <input type="text" class="form-control mb-3" name="ubicacion" placeholder="Ubicacion" value="<?php echo $row['ubicacion']  ?>">
                                <input type="text" class="form-control mb-3" name="CPostal" placeholder="Codigo Postal" value="<?php echo $row['CPostal']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="horario" placeholder="Horario" value="<?php echo $row['horario']  ?>">
                                <input type="text" class="form-control mb-3" name="gerente" placeholder="Gerente" value="<?php echo $row['gerente']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>