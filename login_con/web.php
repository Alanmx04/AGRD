<?php
 $rol = "admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h2>Administracion de Libros</h2>
    <h6>Rol: <?= $rol; ?></h6>
    <hr>
    <?php if($rol == "admin"): ?>
        <button>Eliminar Libro</button>
    <?php endif; ?>

    <?php
    $num1 = 3;
    $num2 = 4;
    $resultado = $num1 + $num2; // Se agregó el operador suma (+) y el punto y coma (;)

    echo $resultado;
    ?> <!-- Se cerró la etiqueta de PHP antes del comentario HTML -->

    <!--Soy un comentario-->
    
</body>
</html>