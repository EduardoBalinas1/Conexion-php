<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conexion Database</title>
</head>
<body>

    <?php include_once 'poo.php';

    $conexion = new Conexion();
    ?>

    <h1> <?php $conexion->conn_stable(); ?></h1>
    
</body>
</html>