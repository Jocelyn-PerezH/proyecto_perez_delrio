<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulos";
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
                            <h1>Articulos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idarticulo" placeholder="Id articulo">
                                    <input type="text" class="form-control mb-3" name="CodigoA" placeholder="Codigo Articulo">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Piezas" placeholder="Piezas">
                                    <input type="text" class="form-control mb-3" name="FechaI" placeholder="Fecha de Ingreso">
                                    <input type="text" class="form-control mb-3" name="Porveedor" placeholder="Porveedor">
                                    <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio">
                                    
                                    <input type="submit" class="btn btn-primary"><br><br>
                                    <a href="/proyecto_perez_delrio/index.php">Inicio</a><br><br>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Piezas</th>
                                        <th>FechaI</th>
                                        <th>Proveedor</th>
                                        <th>Precio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idarticulo']?></th>
                                                <th><?php  echo $row['CodigoA']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Piezas']?></th>  
                                                <th><?php  echo $row['FechaI']?></th> 
                                                <th><?php  echo $row['Porveedor']?></th> 
                                                <th><?php  echo $row['Precio']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['idarticulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idarticulo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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