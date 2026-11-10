<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <div class="card theme-primary text-center">
        <div class="card-header">
            Iniciar sesion
        </div>
        <div class="card-body">
            <form action="procesar.php" method="post">

                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="usuario" class="col-form-label">Usuario</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="usuario" name="usuario" class="form-control" required>
                    </div>
                </div>

                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="password" class="col-form-label">Contrasena</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ingresar</button>

            </form>
        </div>
        <div class="card-footer text-muted">
            <a href="registro.php" class="text-decoration-none">No tienes cuenta? Registrate aqui</a>
        </div>
    </div>

</body>
</html>