<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$resultado = mysqli_query($con, $sql);
if($resultado);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>inventario CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
        <input type="text" name="name" placeholder="nombre">
            <input type="text" name="descripcion" placeholder="descripcion">
            <input type="text" name="cantidad" placeholder="cantidad">
            <input type="text" name="precio" placeholder="precio">
          
          
            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>descripcion</th>
                    <th>cantidad</th>
                    <th>precio</th>
                    <th></th>
                    <th></th>
                </rt>
            </thead>
            <tbody>
            <?php while ($fila= mysqli_fetch_array($resultado)): ?>
                    <tr>
                        <th><?= $fila['id'] ?></th>
                        <th><?= $fila['name'] ?></th>
                        <th><?= $fila['description'] ?></th>
                        <th><?= $fila['amount'] ?></th>
                        <th><?= $fila['price'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>