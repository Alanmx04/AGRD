<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <div class="card theme-primary text-center">
        <div class="card-header">
            Registro de usuario
        </div>
        <div class="card-body">
            <form action="crear_usuario.php" method="post">

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
                        <label for="password" class="col-form-label">Contraseña</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelpInline" required>
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                            Debe tener entre 8 y 20 caracteres.
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>

            </form>
        </div>
        <div class="card-footer text-muted">
            <a href="index.php" class="text-decoration-none">¿Ya tienes cuenta? Inicia sesion aqui</a>
        </div>
    </div>

</body>
</html>