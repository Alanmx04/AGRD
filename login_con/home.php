<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <div class="card theme-primary text-center">
        <div class="card-header">
            Bienvenido <?php echo htmlspecialchars($_SESSION['usuario']); ?>
        </div>
        <div class="card-body">
            <p class="card-text">Has iniciado sesion correctamente.</p>
            <a href="logout.php" class="btn btn-primary">Cerrar sesion</a>
        </div>
    </div>

</body>
</html>