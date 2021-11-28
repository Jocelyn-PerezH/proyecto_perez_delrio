<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM ventas WHERE idsucursal='$id'";
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
                                
                                <input type="text" class="form-control mb-3" name="idempleado" placeholder="Id empleado" value="<?php echo $row['idempleado']  ?>">
                                <input type="text" class="form-control mb-3" name="producto" placeholder="Producto" value="<?php echo $row['producto']  ?>">
                                <input type="text" class="form-control mb-3" name="CantidadP" placeholder="Cantidad de Productos" value="<?php echo $row['CantidadP']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']  ?>">
                                <input type="text" class="form-control mb-3" name="Hora" placeholder="Hora" value="<?php echo $row['Hora']  ?>">
                                <input type="text" class="form-control mb-3" name="VentaT" placeholder="Venta Total" value="<?php echo $row['VentaT']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>