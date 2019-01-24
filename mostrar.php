<?php
    include ('devuelveProductos.php');
    $alumnos = new DevuelveProductos();
    $nombre = $_GET['nombre'];
    $array_alumnos = $alumnos->getProductos($nombre);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD | PDO | POO</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
</head>
<body>
<div class="navbar navbar-dark bg-dark mb-5">
        <a href="#" class="navbar-brand">Search Users to Database</a>
    </div>
    <table class="table bordered w-50 m-auto mt-5">
        <thead>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Contraseña</th>
        </thead>
        <tbody>
    <?php
    foreach($array_alumnos as $elemento){
            echo "<tr><td>";
            echo $elemento['nombre']."</td><td>";
            echo $elemento['edad']."</td><td>";
            echo $elemento['contra']."</td></tr>";
            }    
            ?>
        </tbody>
    </table>

            
    

</body>
</html>