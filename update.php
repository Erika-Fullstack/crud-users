<?php
include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COmpatible" content="IE =edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuarios</title>
</head>

<body>
    <div class="users-form">
        <form action="edit_user.php" method="POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" placeholder="Nombre" value="<?= $row['nombre'] ?>">
            <input type="text" name="lastname" placeholder="Apellido" value="<?= $row['lastname'] ?>">
            <input type="text" name="username" placeholder="Username" value="<?= $row['username'] ?>">
            <input type="text" name="password" placeholder="Password" value="<?= $row['password'] ?>">
            <input type="text" name="email" placeholder="Email" value="<?= $row['email'] ?>">

            <input type="submit" value="Actualizar información">
        </form>
    </div>
    </body>
    </html>