<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
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
                            <h1>Empleados</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idempleado" placeholder="Id empleado">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="ApellidoP" placeholder="Apellido Paterno">
                                    <input type="text" class="form-control mb-3" name="ApellidoM" placeholder="Apellido Materno">
                                    <input type="text" class="form-control mb-3" name="FechaN" placeholder="Fecha de Nacimiento">
                                    <input type="text" class="form-control mb-3" name="curp" placeholder="Curp">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    
                                    <input type="submit" class="btn btn-primary"><br><br>
                                    <a href="/proyecto_perez_delrio/index.php">Inicio</a><br><br>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombres</th>
                                        <th>ApellidoP</th>
                                        <th>ApellidoP</th>
                                        <th>FechaN</th>
                                        <th>Curp</th>
                                        <th>Correo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idempleado']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['ApellidoP']?></th>
                                                <th><?php  echo $row['ApellidoM']?></th>  
                                                <th><?php  echo $row['FechaN']?></th> 
                                                <th><?php  echo $row['curp']?></th> 
                                                <th><?php  echo $row['correo']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['idempleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idempleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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