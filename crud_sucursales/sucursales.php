<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM sucursal";
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
                            <h1>Sucursales</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idsucursal" placeholder="Id sucursal">
                                    <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
                                    <input type="text" class="form-control mb-3" name="ubicacion" placeholder="Ubicacion">
                                    <input type="text" class="form-control mb-3" name="CPostal" placeholder="Codigo Postal">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="horario" placeholder="Horario">
                                    <input type="text" class="form-control mb-3" name="gerente" placeholder="Gerente">
                                    
                                    <input type="submit" class="btn btn-primary"><br><br>
                                    <a href="/proyecto_perez_delrio/index.php">Inicio</a><br><br>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Ciudad</th>
                                        <th>Ubicacion</th>
                                        <th>CP</th>
                                        <th>Telefono</th>
                                        <th>Horario</th>
                                        <th>Gerente</th>
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
                                                <th><?php  echo $row['ciudad']?></th>
                                                <th><?php  echo $row['ubicacion']?></th>
                                                <th><?php  echo $row['CPostal']?></th>  
                                                <th><?php  echo $row['telefono']?></th> 
                                                <th><?php  echo $row['horario']?></th> 
                                                <th><?php  echo $row['gerente']?></th>   
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