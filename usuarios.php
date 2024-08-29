<?php

require_once("bd/conexion.php");

$sql = "select * from usuarios";

$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
    
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
           
        <?php

        if ($result->num_rows > 0){
            while($fila = $result->fetch_assoc()){
        ?>
            <tr>
                <td> <?php echo $fila["id"]; ?> </td>
                <td> <?php echo $fila["nombre"]; ?>  </td>
                <td> <?php echo $fila["email"]; ?> </td>
            </tr>
        <?php
            }
        }
            
        ?>
        </tbody>
    </table>
</div>
</body>
</html>