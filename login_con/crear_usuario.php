<?php
require "conexion.php";

$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';

if($usuario == "" || $password == ""){
    exit("Debes de llenar todos los campos.");
}

$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$consulta = $conexion->prepare($sql);
$consulta->execute([$usuario]);

if($consulta->fetch()){
    exit("El usuario ya existe. Intente con otro.");
}

$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (usuario, password) VALUES (?, ?)";
$consulta = $conexion->prepare($sql);
$consulta->execute([$usuario, $password]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <div class="card theme-primary text-center">
        <div class="card-body">
            <p class="card-text mb-3">Usuario creado correctamente.</p>
            <a href="index.php" class="btn btn-primary">Iniciar sesion</a>
        </div>
    </div>

</body>
</html>