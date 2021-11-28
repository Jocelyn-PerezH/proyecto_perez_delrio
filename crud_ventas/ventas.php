<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA EMPLEADOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ventas</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idsucursal" placeholder="Id sucursal">
                                    <input type="text" class="form-control mb-3" name="idempleado" placeholder="Id empleado">
                                    <input type="text" class="form-control mb-3" name="producto" placeholder="Producto">
                                    <input type="text" class="form-control mb-3" name="CantidadP" placeholder="Cantidad de Productos">
                                    <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha">
                                    <input type="text" class="form-control mb-3" name="Hora" placeholder="Hora">
                                    <input type="text" class="form-control mb-3" name="VentaT" placeholder="Venta Total">
                                    
                                    <input type="submit" class="btn btn-primary"><br><br>
                                    <a href="/proyecto_perez_delrio/index.php">Inicio</a><br><br>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id sucursal</th>
                                        <th>Id empleado</th>
                                        <th>Productos</th>
                                        <th>Piezas</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Venta Total</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idsucursal']?></th>
                                                <th><?php  echo $row['idempleado']?></th>
                                                <th><?php  echo $row['producto']?></th>
                                                <th><?php  echo $row['CantidadP']?></th>  
                                                <th><?php  echo $row['Fecha']?></th> 
                                                <th><?php  echo $row['Hora']?></th> 
                                                <th><?php  echo $row['VentaT']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['idsucursal'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idsucursal'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>