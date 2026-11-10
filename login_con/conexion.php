<?php
// Datos de conexion
$servidor = "localhost";
$basedatos = "dummy";
$usuario = "root";
$contrasena = "";

try{
$conexion = new PDO(
"mysql:host=$servidor;dbname=$basedatos;charset=utf8mb4",
$usuario,
$contrasena
);


// Configuramos manejo de errores
$conexion->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);
//echo "Conexion creada con exito!";

}catch(PDOException $e){
    die("Error al conectar con la base de datos.");

}
